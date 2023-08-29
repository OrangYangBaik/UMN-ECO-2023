<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Team;
use \Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\RecruitmentExport;
use App\Exports\RecruitmentAllExport;
use App\Models\Kupon;
use App\Models\Settings;
use Exception;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index(){  
        return view('admin.page.loginAdmin',[
            'title' => 'ECO Admin Login'
        ]);
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email'=>'required|email',
            'password' => 'required'
        ]);

        if(Auth::guard('web')->attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('/admin/dashboard');
        }

        return back()->with('status', 'Invalid login details');
    }

    public function logout(){
        Auth::guard('web')->logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect(route('loginAdmin'));
    }

    public function register(){
        return view('admin.page.registerAdmin', [
            'title' => 'ECO Admin Register'
        ]);
    }

    public function store(Request $request){
        $ValidReq = $request->validate([
            'name'=>'required',
            'email'=>'required|email:dns|unique:admins',
            'password'=>'required|min:8',
            'code'=>'required'
        ]);

        if($ValidReq['code']==="ECO2022JaYaJayA"){
            $ValidReq['password'] = Hash::make($ValidReq['password']);
            Admin::create($ValidReq);
            $request->session()->flash('success','Registrasi Berhasil!');
            return redirect('/loginAdmin');
        }

        else return back()->with('status', 'Invalid login details');
    }

    public function dashboard(){
        $admin = auth()->user();
        return view('admin.page.dashboard',[
            'title' => 'Admin Dashboard',
            'teams' => Team::All(),
            'boothNum' => $admin->booth
        ]);
    }

    public function setting(){
        return view('admin.page.setting',[
            'title' => 'Admin Setting',
            'teams' => Team::All()
        ]);
    }

    public function changeStatus(Request $request){
        $Tim = Team::find($request->team_id);
        $Tim->status = $request->status;
        $Tim->save();
    }

    public function sendToAdminPageMain(Request $request){
        $nama = $request->input('nama');
        $nim = $request->input('nim');

        $user = User::where('nama', $nama)
                ->where('nim', $nim)
                ->first();
        if ($user) {
            $msg = 'data sudah terkirim';
            return response()->json(['message' => $msg, 'success' => true]);
        } else {
            $msg = 'data anda tidak dapat ditemukan';
            return response()->json(['message' => $msg, 'success' => false]);

        }
    }

    public function verificationPoint($boothNum){
        $admin = auth()->user();
        if($admin->booth == $boothNum){
            $requester = User::where('scanned', true)
                            ->where('booth', $boothNum)
                            ->get();

            if ($requester->count() === 0) {
                $requester = 'none';
            }

            return view('admin.page.verificationPointAdmin'.$boothNum, [
                'title' => 'daftar yang ngescan',
                'requester' => $requester
            ]);
        }else{
            return back();
        }
    }
    
    public function increasePoints(Request $request)
     {
        $request->validate([
            'point' => 'required|numeric',
            'userId' => 'required',
        ]);

        $user = User::findOrFail($request->input('userId'));

        if ($user) {
            $user->point += $request->point;
            $user->scanned = false;
            $user->booth = 0;
            $user->save();
            
            //return back();
            return response()->json(['success' => true, 'message' => 'bisa']);
        } else {
            return response()->json(['success' => false, 'message' => 'User not found']);
        }
    }

    public function deductPoints(Request $request)
     {
        $request->validate([
            'point' => 'required|numeric',
            'userId' => 'required',
        ]);

        $user = User::findOrFail($request->input('userId'));

        if ($user) {
            if($user->point < $request->point){
                return response()->json(['success' => false, 'message' => 'maaf poin kamu tidak mencukupi']);
            }
            $user->point -= $request->point;
            $user->save();
            
            //return back();
            return response()->json(['success' => true, 'message' => 'bisa']);
        } else {
            return response()->json(['success' => false, 'message' => 'User not found']);
        }
    }
}
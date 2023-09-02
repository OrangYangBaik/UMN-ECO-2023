<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Team;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\Kupon;
use \Illuminate\Support\Str;

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

            $user = auth()->user();
            $email = $user->email;
            if(str_contains($email, 'arcade')){
                return redirect()->intended('/admin/dashboardArcade');
            }else if(str_contains($email, 'dapatkupon')){
                return redirect()->intended('/admin/dashboardDapatKupon');
            }
            
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

    public function dashboardArcade(){
        $admin = auth()->user();
        return view('admin.page.dashboardArcade',[
            'title' => 'Admin Dashboard',
            'teams' => Team::All(),
            'boothNum' => $admin->booth
        ]);
    }

    public function dashboardDapatKupon(){
        $admin = auth()->user();
        return view('admin.page.dashboardDapatKupon',[
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
        //cuma validasi doang si sbnrnya
        $nama = $request->input('nama');
        $nim = $request->input('nim');
        dd("tes");

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

    public function sendToAdminPageDapatKupon(Request $request){
        //cuma validasi doang si sbnrnya
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

    public function sendToAdminPageTukarPoint(Request $request){
        $nama = $request->input('nama');
        $nim = $request->input('nim');
        
        $user = User::where('nama',$nama)
                ->where('nim',$nim)
                ->first();

                if($user){
                    $msg = 'data sudah terkirim';
                    return response()->json(['message' => $msg, 'success' => true]);
                }
                else{
                    $msg = 'data anda tidak dapat ditemukan';
                    return response()->json(['message' => $msg, 'success' => false]); 
                }
    }

    public function verificationPoint($boothNum){
        $admin = auth()->user();
        if($admin->booth == $boothNum){
            $requester = User::where('scanned_arcade', true)
                            ->where('booth_arcade', $boothNum)
                            ->get();

            if ($requester->count() === 0) {
                $requester = [];
            }

            return view('admin.page.verificationPointAdmin'.$boothNum, [
                'title' => 'Daftar yang Ngescan',
                'requester' => $requester,
                'boothNum' => $boothNum,
            ]);
            
        }else{
            return back();
        }
    }

    public function verificationKupon($boothNum){
        $admin = auth()->user();
        if($admin->booth == $boothNum){
            $requester = User::where('scanned_dapat_kupon', true)
                            ->where('booth_dapat_kupon', $boothNum)
                            ->get();

            if ($requester->count() === 0) {
                $requester = [];
            }

            return view('admin.page.verificationDapatKuponAdmin'.$boothNum, [
                'title' => 'Daftar yang Ngescan',
                'requester' => $requester,
                'boothNum' => $boothNum,
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
            $user->scanned_arcade = false;
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

    public function IncreaseKupons(Request $request)
     {
        $data = $request->validate([
            'jumlah_atasan' => 'required|numeric',
            'jumlah_bawahan' => 'required|numeric',
            'jumlah_aksesoris' => 'required|numeric',
            'userId' => 'required',
        ]);

        $user = User::findOrFail($request->input('userId'));

        if ($user->kupon() == null) {
            Kupon::unguard();
            Kupon::create([
                'id' => Str::uuid(),
                'pemilik' => $user->id,
                'atasan' => $request->jumlah_atasan,
                'bawahan' => $request->jumlah_bawahan,
                'aksesoris' => $request->jumlah_aksesoris,
            ]);
            Kupon::reguard();
            $user->scanned_dapat_kupon = 0;
            $user->booth_dapat_kupon = 0;
            $user->save();
            
            //return back();
            return response()->json(['success' => true, 'message' => 'bisa']);
        } else if($user->kupon()){
            $user->kupon()->atasan += $request->jumlah_atasan;
            $user->kupon()->credit += $request->jumlah_bawahan;
            $user->kupon()->aksesoris += $request->jumlah_aksesoris;
        }else{
            return response()->json(['success' => false, 'message' => 'User not found']);
        }
    }
}
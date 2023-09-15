<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Team;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\Kupon;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use \Illuminate\Support\Str;
use Exception;

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
            }else if(str_contains($email, 'sidequest')){
                return redirect()->intended('/admin/dashboardDapatCredit');
            }
            else if(str_contains($email,'merchandise')){
                return redirect()->intended('/admin/dashboardMerchandise');
            }
            else if(str_contains($email, 'kurang')){
                return redirect()->intended('/admin/dashboardKurangKupon');
            }
            
        }

        return back()->with('status', 'Invalid login details');
    }

    public function logout(){
        Auth::guard('web')->logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect(route('homepage'));
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
        $allUser = User::all();
        return view('admin.page.dashboardArcade',[
            'title' => 'Admin Dashboard',
            'teams' => Team::All(),
            'boothNum' => $admin->booth,
            'allUser' => $allUser
        ]);
    }

    public function dashboardDapatKupon(){
        $admin = auth()->user();
        $allUser = User::all();
        return view('admin.page.dashboardDapatKupon',[
            'title' => 'Admin Dashboard',
            'teams' => Team::All(),
            'boothNum' => $admin->booth,
            'allUser' => $allUser
        ]); 
    }

    public function dashboardKurangKupon(){
        $admin = auth()->user();
        $allUser = User::all();
        return view('admin.page.dashboardKurangKupon',[
            'title' => 'Admin Dashboard',
            'teams' => Team::All(),
            'boothNum' => $admin->booth,
            'allUser' => $allUser
        ]);
    }

    public function dashboardMerchandise(){
        $admin = auth()->user();
        $allUser = User::all();
        return view('admin.page.dashboardMerchandise',[
            'title' => 'Admin Dashboard',
            'teams' => Team::All(),
            'boothNum' => $admin->booth,
            'allUser' => $allUser
        ]);
    }

    public function dashboardDapatCredit(){
        $admin = auth()->user();
        $allUser = User::all();
        return view('admin.page.dashboardDapatCredit',[
            'title' => 'Admin Dashboard',
            'teams' => Team::All(),
            'boothNum' => $admin->booth,
            'allUser' => $allUser
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

    public function sendToAdminPageKurangKupon(Request $request){
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

    public function sendToAdminPageDapatCredit(Request $request){
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

    public function sendToAdminPageMerchandise(Request $request){
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

    public function verificationKupon($boothNum)
    {
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
        
    public function verificationMerchandise($boothNum)
    {
        $admin = auth()->user();
        if($admin->booth == $boothNum){
            $requester = User::where('scanned_merchandise', true)
                            ->where('booth_merchandise', $boothNum)
                            ->get();

            if ($requester->count() === 0) {
                $requester = [];
            }

            return view('admin.page.verificationMerchandiseAdmin'.$boothNum, [
                'title' => 'Daftar yang Ngescan',
                'requester' => $requester,
                'boothNum' => $boothNum,
            ]);

        }else{
            return back();
        }
    }

    public function verificationDecreaseKupon($boothNum)
    {
        $admin = auth()->user();
        if($admin->booth == $boothNum){
            $requester = User::where('scanned_tukar_kupon', true)
                            ->where('booth_tukar_kupon', $boothNum)
                            ->get();

            if ($requester->count() === 0) {
                $requester = [];
            }

            return view('admin.page.verificationTukarKuponAdmin'.$boothNum, [
                'title' => 'Daftar yang Ngescan',
                'requester' => $requester,
                'boothNum' => $boothNum,
            ]);
            
        }else{
            return back();
        }
    }

    public function verificationCredit($boothNum)
    {
        $admin = auth()->user();
        if($admin->booth == $boothNum){
            $requester = User::where('scanned_dapat_credit', true)
                            ->where('booth_dapat_credit', $boothNum)
                            ->get();

            if ($requester->count() === 0) {
                $requester = [];
            }

            return view('admin.page.verificationCreditAdmin'.$boothNum, [
                'title' => 'Daftar yang Ngescan',
                'requester' => $requester,
                'boothNum' => $boothNum,
            ]);
            
        }else{
            return back();
        }
    }
    
    public function increaseCredits(Request $request)
    {
        $request->validate([
            'credit' => 'required|numeric',
            'userId' => 'required',
        ]);

        $user = User::findOrFail($request->input('userId'));

        if ($user) {
            $user->credit += $request->credit;
            $user->scanned_dapat_credit = false;
            $user->booth_dapat_credit = 0;
            $user->save();
            
            return back();
        } else {
            return redirect()->back()->with('error', 'User tidak dapat ditemukan');
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
            $user->booth_arcade = 0;
            $user->save();
            
            return back();
        } else {
            return redirect()->back()->with('error', 'User tidak dapat ditemukan');
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
                return redirect()->back()->with('error', 'Poin anda tidak mencukupi');
            }
            $user->point -= $request->point;
            $user->scanned_merchandise = 0;
            $user->booth_merchandise = 0;
            $user->save();
            
            return back();
        } else {
            return redirect()->back()->with('error', 'User tidak dapat ditemukan');
        }
    }

    public function increaseKupons(Request $request)
    {
        try{
            $data = $request->validate([
                'jumlah_atasan' => 'required|numeric',
                'jumlah_bawahan' => 'required|numeric',
                'jumlah_aksesoris' => 'required|numeric',
                'userId' => 'required',
            ]);

            $user = User::where('id', $request->userId)->first();
            if ($user->kupon->first() == null) {
                Kupon::unguard();
                Kupon::insert([
                    'id' => Str::uuid(),
                    'pemilik' => $user->id,
                    'atasan' => $request->jumlah_atasan,
                    'bawahan' => $request->jumlah_bawahan,
                    'aksesoris' => $request->jumlah_aksesoris,
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
                Kupon::reguard();
            } else if($user->kupon->first() != null){
                $kupon = $user->kupon->first();
                $kupon->atasan += $request->jumlah_atasan;
                $kupon->bawahan += $request->jumlah_bawahan;
                $kupon->aksesoris += $request->jumlah_aksesoris;
                $kupon->updated_at = now();

                $kupon->save();
            }
            $user->scanned_dapat_kupon = 0;
            $user->booth_dapat_kupon = 0;
            $user->save();
            
            return back();
        }catch(ModelNotFoundException $e){
            return response()->json(['success' => false, 'message' => 'User not found']);
        }
    }

    public function decreaseKupons(Request $request)
    {
        try {
            $data = $request->validate([
                'jumlah_atasan' => 'required|numeric',
                'jumlah_bawahan' => 'required|numeric',
                'jumlah_aksesoris' => 'required|numeric',
                'userId' => 'required',
            ]);
            
            $user = User::where('id', $request->userId)->first();

            if($request->jumlah_atasan == 0 && $request->jumlah_bawahan == 0 && $request->jumlah_aksesoris == 0){
                $user->scanned_tukar_kupon = 0;
                $user->booth_tukar_kupon = 0;
                $user->save();
                return back();
            }
        
            if (!$user) {
                return redirect()->back()->with('error', 'User not found');
            }
        
            $kupon = $user->kupon->first();
        
            if (!$kupon) {
                return redirect()->back()->with('error', 'Anda tidak memiliki kupon satu pun');
            }
        
            if ($kupon->atasan < $request->jumlah_atasan || $kupon->bawahan < $request->jumlah_bawahan || $kupon->aksesoris < $request->jumlah_aksesoris) {
                return redirect()->back()->with('error', 'Kupon anda tidak mencukupi');
            }
        
            $kupon->atasan -= $request->jumlah_atasan;
            $kupon->bawahan -= $request->jumlah_bawahan;
            $kupon->aksesoris -= $request->jumlah_aksesoris;
            $kupon->updated_at = now();
            $kupon->save();
        
            $user->scanned_tukar_kupon = 0;
            $user->booth_tukar_kupon = 0;
            $user->save();
        
            return back();
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }        
    }
}
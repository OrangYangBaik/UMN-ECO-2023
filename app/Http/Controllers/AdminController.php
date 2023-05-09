<?php

namespace App\Http\Controllers;

use App\Models\Recruitment;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Team;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\RecruitmentExport;
use App\Exports\RecruitmentAllExport;
use App\Exports\droughtExport;
use App\Exports\downpourExport;
use App\Exports\downpourExportAll;
use App\Models\DownpourUser;
use App\Models\DroughtRegistration;
use App\Models\Drought_bingo;
use App\Models\Settings;
use Illuminate\Support\Facades\DB;


class AdminController extends Controller
{
    public function index(){
        return view('admin.page.loginAdmin',[
            'title' => 'ECO Admin Login'
        ]);
    }

    public function login(Request $request){
        $credentials = $request->validate([
            'email'=>'required|email',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('/dashboardDrought');
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
            'email'=>'required|email:dns|unique:users',
            'password'=>'required|min:8',
            'code'=>'required'
        ]);

        if($ValidReq['code']==="ECO2022JaYaJayA"){
            $ValidReq['password'] = Hash::make($ValidReq['password']);
            User::create($ValidReq);

            $request->session()->flash('success','Registrasi Berhasil!');
            return redirect('/loginAdmin');
        }

        else return back()->with('status', 'Invalid login details');
    }

    public function dashboardOprec(){
        return view('admin.page.dashboardOprec',[
            'items'=> Recruitment::All(),
            'title'=>'Dashboard Admin'
        ]);
    }

    public function dashboardDrought(){
        return view('admin.page.dashboardDrought',[
            'items' => DroughtRegistration::All(),
            'title' => 'Dashboard Admin'
        ]);
    }

    public function dashboardDownpour(){
        return view('admin.page.dashboardDownpour',[
            'items' => DownpourUser::All(),
            'title' => 'Dashboard Admin'
        ]);
    }

    public function dashboardFeatures(){
        return view('admin.page.dashboardFeatures',[
            'bingo' => Drought_bingo::First(),
            'teams' => Team::All(),
            'features' => Settings::All(),
            'title' => 'Dashboard Admin'
        ]);
    }

    public function setting(){
        return view('admin.page.setting',[
            'title' => 'Recruitment setting',
            'teams' => Team::All()
        ]);
    }

    public function changeStatus(Request $request){
        $Tim = Team::find($request->team_id);
        $Tim->status = $request->status;
        $Tim->save();
    }

    public function changeActivity1Status(Request $request){
        $User = DownpourUser::find($request->user_id);
        $User->activity_booth_1 = $request->status;
        $User->save();
    }
    public function changeActivity2Status(Request $request){
        $User = DownpourUser::find($request->user_id);
        $User->activity_booth_2 = $request->status;
        $User->save();
    }
    public function changeActivity3Status(Request $request){
        $User = DownpourUser::find($request->user_id);
        $User->activity_booth_3 = $request->status;
        $User->save();
    }
    public function changeActivity4Status(Request $request){
        $User = DownpourUser::find($request->user_id);
        $User->activity_booth_4 = $request->status;
        $User->save();
    }
    public function changeSeminarStatus(Request $request){
        $User = DownpourUser::find($request->user_id);
        $User->seminar_ticket = $request->status;
        $User->save();
    }

    public function changeBingoStatus(Request $request){
        $Bingos = Drought_bingo::All();
        foreach($Bingos as $Bingo){
            $Bingo->status = $request->status;
            $Bingo->save();
        }
    }

    public function changeStatusFeatures(Request $request){
        $Settings = Settings::find($request->feature_id);
        $Settings->status = $request->status;
        $Settings->save();
    }

    public function export(Recruitment $recruitment){
        return Excel::download(new RecruitmentExport($recruitment->Team), 'Recruitment'.$recruitment->Team.'.xlsx');
    }

    public function exportAll(){
        return Excel::download(new RecruitmentAllExport, 'RecruitmentAll.xlsx');
    }
    
    public function exportDrought(){
        return Excel::download(new droughtExport, 'DroughtRegistration.xlsx');
    }

    public function exportDownpour(){
        return Excel::download(new downpourExport, 'DownpourRegistration.xlsx');
    }
	
    public function exportDownpourAll(){
        return Excel::download(new downpourExportAll, 'DownpourRegistrationAll.xlsx');
    }

    public function delete(Recruitment $recruitment){
        $deleted = DB::table('recruitments')->where('id', '=', $recruitment->id)->delete();
        return redirect(route('dashboardOprec'))->with('success','Data berhasil dihapus');
    }

    // public function deleteDrought(DroughtRegistration $drought){
    //     $deleted = DB::table('drought_registrations')->where('id', '=', $drought->id)->delete();
    //     return redirect(route('dashboardDrought'))->with('success','Data berhasil dihapus');
    // } TAMBAHIN EXTENDS MODEL di DroughtRegistration
}

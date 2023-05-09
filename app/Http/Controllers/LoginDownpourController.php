<?php

namespace App\Http\Controllers;

use App\Mail\ForgetPassword;
use App\Models\DownpourUser;
use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;
use App\Models\Verification;
use Illuminate\Support\Facades\Mail;

class LoginDownpourController extends Controller
{
    public function loginDownpour(){
        return view('cms/page/Downpour/loginDownpour', ['title' => 'DOWNPOUR - Login']);
    }

    public function registrationDownpour(){
        return view('cms/page/Downpour/registrationDownpour', ['title' => 'DOWNPOUR - Registration']);
    }

    public function forgetVerifyPageDownpour(){
        return view('cms/page/Downpour/forgetVerifyDownpour', ['title' => 'DOWNPOUR - Forget Password']);
    }

    public function newPassDownpour(){
        return view('cms/page/Downpour/newPassDownpour', ['title' => 'DOWNPOUR - New Password']);
    }

    public function forgetPassword(Request $request){

        $student = DownpourUser::where('username_student_email', $request->email_student)->get()->first();

        if($student == null){
            return back()->with('status', 'Email yang dimasukan salah');
        }

        $token = Verification::create([
            "token" => Uuid::uuid4(),
            'user_id' => $student->id,
            'about' => 'Forget Password',
            'expires' => now()->addMinutes(30)
        ]);

        Mail::to($student->username_student_email)->send(new ForgetPassword($student->name, $token->token));

        return redirect(route('newPassDownpour'));
    }

    public function newPass(Request $request){
        
        $allVerification = Verification::all();
        //  foreach($allVerification as $eachverification){
           // if(now()> $eachverification->expires){
             //   $eachverification->delete();
               // return back()->with('status', 'Token Expired');
            //}

        // }

        $ValidReq = $request->validate([
            'password' => 'required',
            'confirm_password' => 'required|same:password',
            'verifCode' => 'required'
        ]);
        
        $verification = Verification::where('token', $ValidReq['verifCode'])->get()->first();
        
        if(!$verification){
            return back()->with('status', 'Token Not Found');
        }
        $student = DownpourUser::FindOrFail($verification->user_id);
        $student->password = bcrypt($request->password);
        $student->save();

        $verification->delete();

        return redirect(route('loginDownpour'));
    }
}

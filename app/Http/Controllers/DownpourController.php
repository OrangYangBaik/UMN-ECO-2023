<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use \App\Mail\SeminarDownpourMail;
use \App\Mail\ActivityDownpourMail;
use Illuminate\Support\Facades\Mail;
use App\Jobs\TestEmailJob;
use Illuminate\Support\Facades\Response;

class DownpourController extends Controller
{
  

    public function ticketDownpour(){
        return view('cms.page.Downpour.ticketDownpour', ['title' => 'DOWNPOUR - Tickets']);
    }

    public function activityVerification(Request $request){
      $validRequest = $request->validate([
        'link' => "required"
      ]);
  
      DB::table('downpour_users')
          ->where('id', Auth::guard('downpour')->id())
          ->update(["activity_booth_additional" => $validRequest["link"]]);
  
      return redirect()->route("ticketDownpour");
    }

    public function pendaftaranDownpour(){
        return view('cms.page.Downpour.pendaftaranDownpour', ['title' => 'DOWNPOUR - Pendaftaran']);
    }

    public function daftarSeminarDownpour(){
      DB::table('downpour_users')
          ->where('id', Auth::guard('downpour')->id())
          ->update(["seminar_ticket" => 0]);

      $name = DB::table('downpour_users')
               ->where('id', Auth::guard('downpour')->id())->value('name');

      $email = DB::table('downpour_users')
               ->where('id', Auth::guard('downpour')->id())->value('username_student_email');

      $this->sendEmail($name, $email);

      return redirect()->route("pendaftaranDownpour");
    }
    
    public function daftarActivityDownpour(){
      DB::table('downpour_users')
          ->where('id', Auth::guard('downpour')->id())
          ->update(["activity_booth_1" => 0, "activity_booth_2" => 0, "activity_booth_3" => 0, "activity_booth_4" => 0]);
      
      $name = DB::table('downpour_users')
          ->where('id', Auth::guard('downpour')->id())->value('name');

      $email = DB::table('downpour_users')
          ->where('id', Auth::guard('downpour')->id())->value('username_student_email');

      $this->sendEmailActivity($name, $email);

      return redirect()->route("pendaftaranDownpour");
    }

    public function loginVerification(Request $request) {
      $credentials = $request->validate([
          'username_student_email' => ['required','email:dns' ],
          'password' => 'required'
      ]);

      // dd($credentials);

      if (Auth::guard('downpour')->attempt($credentials)) {
          $request->session()->regenerate();

          return redirect()->intended(route('pendaftaranDownpour'));
      }

      return back()->with('status','The provided credentials do not match our records.');
    }


    public function sendEmail($name, $email)
    {
        $details = [
            'title' => 'DOWNPOUR: OFFICIALLY ECO CITIZEN',
            'name' => $name,
            'email' => $email
        ];
        Mail::to($email)->send(new SeminarDownpourMail($details));
        return response()->json(['message'=>'Mail Send Successfully!!']);
    }

    public function sendEmailActivity($name, $email)
    {
        $details = [
            'title' => 'DOWNPOUR: OFFICIALLY ECO CITIZEN',
            'name' => $name,
            'email' => $email
        ];
        Mail::to($email)->send(new ActivityDownpourMail($details));
        return response()->json(['message'=>'Mail Send Successfully!!']);
    }

    public function logout(){
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect(route('home'));
    }

    public function getDownload(){
        $file = 'https://drive.google.com/file/d/1fEZguhx-tg8kYG0YSeoV73VakJuYtypO/view?usp=sharing';
        $headers = array('Content-Type: application/pdf',);
        return Response::download($file, 'Regulasi-Downpour.pdf',$headers);
    }
}

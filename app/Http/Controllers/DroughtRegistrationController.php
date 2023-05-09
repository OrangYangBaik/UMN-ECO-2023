<?php

namespace App\Http\Controllers;

use App\Mail\DroughtRegistrationMail;
use App\Models\DroughtRegistration;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth; 


class DroughtRegistrationController extends Controller {
  public function index() {
    // return view('cms.page.droughtRegistration',[
    //     'title' => 'DROUGHT Registration'
    // ]);
  }

  public function registration() {
    return view('cms.page.droughtRegistration', [
      'title' => 'DROUGHT Registration'
    ]);
  }

  public function registrationValidation(Request $request) {
    $ValidReq = $request->validate([
      'email_student' => ['required', 'email:dns', 'regex:/^.+@(student\.umn\.ac\.id|lecturer\.umn\.ac\.id|umn\.ac\.id)$/', 'unique:drought_registrations,email_student'],
      'nim' => 'required|regex:/000000(\d{5})/|unique:drought_registrations,nim',
      'nama' => 'required|regex:/[a-zA-Z]+$/x',
      'jurusan' => 'required',
      'angkatan' => 'required',
      'password' => 'required',
      'username_instagram' => 'required|unique:drought_registrations,username_instagram',
      'id_line' => 'required|unique:drought_registrations,id_line',
      'telephone' => 'required',
    ]);

    $ValidReq['password'] = Hash::make($ValidReq['password']);
    $fullName = $ValidReq['nama'];
    $firstName = explode(" ", $ValidReq['nama']);
    $firstName = $firstName[0];

    DroughtRegistration::create($ValidReq);

    $details = [
      'title' => "WELCOME TO DROUGHT, {$fullName}!",
      'body' => "<h2 style='margin-bottom:10px'>Halo, {$fullName}!</h2>

    <p>Terima kasih karena telah mendaftar pada kegiatan DROUGHT: Determine The Way Out UMN ECO 2022!</p>

    <p>Dengan ini, kami nyatakan bahwa {$firstName} telah berhasil menjadi bagian dari kegiatan DROUGHT yang akan
    berlangsung dari Senin, 16 Mei 2022 sampai dengan Sabtu, 21 Mei 2022.</p>

    <p>Untuk informasi lebih lengkap mengenai detail regulasi kegiatan, {$firstName} dapat temukan dalam website
    <a href=\"https://eco.umn.ac.id/\">eco.umn.ac.id</a> atau Instagram <a href=\"https://www.instagram.com/umn_eco/\">@umn_eco</a>.</p>

    <p>Jika ada kendala ataupun pertanyaan, {$firstName} bisa langsung hubungi melalui LINE Official Account kami di
    @bxd0023u.</p>

    <p>Bersama-sama, We Act for The Better Earth!</p>

    <p>Untuk informasi lebih lanjut, bisa hubungi kami melalui:</p>
    <div style='margin-left:40px;'>
      <p>📱LINE      : @bxd0023u</p>
      <p>🤳🏻Instagram : <a href=\"https://www.instagram.com/umn_eco/\">@umn_eco</a></p>
      <p>🎙️Spotify   : <a href=\"https://open.spotify.com/show/4IEv70x1GNMPMMI4SeSlYV\">UMN ECO</a></p>
      <p>📲TikTok    : <a href=\"https://www.tiktok.com/@umn_eco\">@umn_eco</a></p>
      <p>🌏Website   : <a href=\"https://eco.umn.ac.id/\">eco.umn.ac.id</a></p>
      <p>📩E-mail    : eco@umn.ac.id</p>
    </div>"
    ];

    Mail::to($ValidReq['email_student'])->send(new DroughtRegistrationMail($details));

    $credentials = $request->validate([
        'email_student' => ['required','email:dns' ],
        'password' => 'required',
    ]);
    if (Auth::guard('drought')->attempt($credentials)) {
        $request->session()->regenerate();

        return redirect()->intended(route('bingoDrought'));
    }

    return redirect(route('homeDrought'));
  }

  public function regulation(){
    return view('cms.page.regulasiUmum', [
      'title' => 'UMN ECO 2022 - Regulasi Umum'
    ]);
  }
}

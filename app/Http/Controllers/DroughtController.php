<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 
use App\Models\Drought_bingo;
use App\Models\Settings;


class DroughtController extends Controller
{

    public function index(){
        return view('cms.page.landingDrought', [
            "title" => "DROUGHT"
        ]);
    }


    public function login(){
        return view('cms.page.droughtLogin', [
            "title" => "Drought Login",
            "feature" => Settings::All(),
        ]);
    }

    public function loginVerification(Request $request) {
        $credentials = $request->validate([
            'email_student' => ['required','email:dns' ],
            'password' => 'required',
        ]);

        if (Auth::guard('downpour')->attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended(route('bingoDrought'));
        }

        return back()->with('status','The provided credentials do not match our records.');
    }

    public function logout(){
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect(route('homeDrought'));

    }

}

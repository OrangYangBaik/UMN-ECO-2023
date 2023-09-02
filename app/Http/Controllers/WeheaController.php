<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;

class WeheaController extends Controller
{
    public function index(){
        return view('cms.page.wehea.balaiKota',['title'=>'Join Wehea']);
    }

    public function register(){
        $user = Auth::guard('participant')->user();
        $user->wehea = 1;
        $user->save();

        return redirect(route('homepage'));
    }
}

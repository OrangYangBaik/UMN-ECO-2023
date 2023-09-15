<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;

class WeheaController extends Controller
{
    public function index(){
        $user = auth()->user();
        return view('cms.page.wehea.balaiKota',[
            'title'=>'Join Wehea',
            'isJoin' => $user->wehea
        ]);
    }

    public function register(){
        $user = Auth::guard('participant')->user();
        $user->wehea = 1;
        $user->save();

        return redirect(route('homepage'));
    }

    public function ngasal(){
        return view('cms.page.wehea.carnaval',[
            'title'=>'carnaval',
        ]);
    }
}

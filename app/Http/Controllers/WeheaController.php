<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;

class WeheaController extends Controller
{
    public function index(){
        $user = auth()->user();
        $credit = $user->credit;
        $point = $user->point;
        $kupon = $user->kupon->first();
        $atasan = 0;
        $bawahan = 0;
        if($kupon){
            $atasan = $kupon->atasan;
            $bawahan = $kupon->bawahan;
        }

        return view('cms.page.wehea.balaiKota',[
            'title'=>'Hidden City in Wehea',
            'isJoin' => $user->wehea,
            'credit' => $credit,
            'point' => $point,
            'atasan' => $atasan,
            'bawahan' => $bawahan,
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

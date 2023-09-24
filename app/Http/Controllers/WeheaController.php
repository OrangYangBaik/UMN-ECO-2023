<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;

class WeheaController extends Controller
{
    public function index(){
        $user = Auth::guard('participant')->user();
        
        if(!$user){
            return view('cms.page.wehea.balaiKota',[
                'title'=>'Hidden City in Wehea',
                'user' => $user,
                'isJoin' => false,
            ]);
        }

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
            'user' => $user,
            'isJoin' => $user->wehea,
            'credit' => $credit,
            'point' => $point,
            'atasan' => $atasan,
            'bawahan' => $bawahan,
        ]);
    }

    public function register(){
        if (!Auth::guard('participant')->check()) {
            return response()->json(['status' => 'restricted']);
        }
    
        // User is authenticated, proceed with registration
        $user = Auth::guard('participant')->user();
        $user->wehea = 1;
        $user->save();
    
        return response()->json(['status' => 'success']);
    }

    public function ngasal(){
        return view('cms.page.wehea.carnaval',[
            'title'=>'carnaval',
        ]);
    }

    public function ngasal2(){
        return view('cms.page.wehea.gedungkesenian',[
            'title'=>'gedungkesenian',
        ]);
    }

    public function restricted(){
        return view('cms.page.wehea.notLoggedInWehea', ["title" => "Wehea Restricted"]);
    }
}

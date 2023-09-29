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

    public function carnival(){
        $user = Auth::guard('participant')->user();
        
        if(!$user){
            return view('cms.page.wehea.carnaval',[
                'title'=>'Wehea - Carnival',
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

        return view('cms.page.wehea.carnaval',[
            'title'=>'Wehea - Carnival',
            'user' => $user,
            'isJoin' => $user->wehea,
            'credit' => $credit,
            'point' => $point,
            'atasan' => $atasan,
            'bawahan' => $bawahan,
        ]);
    }

    public function gedungKesenian(){
        $user = Auth::guard('participant')->user();
        
        if(!$user){
            return view('cms.page.wehea.gedungKesenian',[
                'title'=>'Wehea - Gedung Kesenian',
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

        return view('cms.page.wehea.gedungKesenian',[
            'title'=>'Wehea - Gedung Kesenian',
            'user' => $user,
            'isJoin' => $user->wehea,
            'credit' => $credit,
            'point' => $point,
            'atasan' => $atasan,
            'bawahan' => $bawahan,
        ]);
    }

    public function pasarWehea(){
        $user = Auth::guard('participant')->user();
        
        if(!$user){
            return view('cms.page.wehea.pasar',[
                'title'=>'Wehea - Fleamarket',
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

        return view('cms.page.wehea.pasar',[
            'title'=>'Wehea - Fleamarket',
            'user' => $user,
            'isJoin' => $user->wehea,
            'credit' => $credit,
            'point' => $point,
            'atasan' => $atasan,
            'bawahan' => $bawahan,
        ]);
    }

    public function fashionWehea(){
        $user = Auth::guard('participant')->user();
        
        if(!$user){
            return view('cms.page.wehea.fashion',[
                'title'=>'Wehea - Fashion',
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

        return view('cms.page.wehea.fashion',[
            'title'=>'Wehea - Fashion',
            'user' => $user,
            'isJoin' => $user->wehea,
            'credit' => $credit,
            'point' => $point,
            'atasan' => $atasan,
            'bawahan' => $bawahan,
        ]);
    }

    public function restricted(){
        return view('cms.page.wehea.notLoggedInWehea', ["title" => "Wehea - Restricted"]);
    }
}

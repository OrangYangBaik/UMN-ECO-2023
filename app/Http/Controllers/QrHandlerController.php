<?php

namespace App\Http\Controllers;

use App\Models\Kupon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class QrHandlerController extends Controller
{
    public function main()
    {
        return view('cms.page.event.scannerQrBoothGame');
    }

    public function dapatKupon()
    {
        return view('cms.page.event.scannerQrBoothDapatKupon');
    }

    public function sendReqMain(Request $request)
    {
        dd("halo");
        //proses masukin ke db data yang scan
        $arcade1 = 'weheaarcade1';
        $arcade2 = 'weheaarcade2';
        $arcade3 = 'weheaarcade3';
        $arcade4 = 'weheaarcade4';
        $arcade5 = 'weheaarcade5';

        if (Auth::guard('participant')->check()) {
            $user = Auth::guard('participant')->user();
            if($user->wehea == true){
                if ($user->scanned_arcade == 0 && $user->booth_arcade == 0) { 
                    if(strcmp($request->input('qrcode'), $arcade1) === 0){
                        if ($user->credit > 0) {
                            $userNama = $user->nama;
                            $userNim = $user->nim;
        
                            $user->credit -= 1;
                            $user->scanned_arcade = true;
                            $user->booth_arcade = 1;
        
                            //ini error biarin aja krn blm ada usernya (modelnya) makanya save functionnya ga kedetect
                            $user->save();
        
                            return response()->json([
                                'success' => true,
                                'message' => 'Mohon tunggu transaksi sedang diproses',
                                'nama' => $userNama,
                                'nim' => $userNim,
                            ]);
                        } else {
                            return response()->json([
                                'success' => false,
                                'message' => 'Credit anda tidak mencukupi',
                            ]);
                        }
                    }else if(strcmp($request->input('qrcode'), $arcade2) === 0){
                        if ($user->credit > 0) {
                            $userNama = $user->nama;
                            $userNim = $user->nim;
        
                            $user->credit -= 1;
                            $user->scanned_arcade = true;
                            $user->booth_arcade = 2;
        
                            //ini error biarin aja krn blm ada usernya (modelnya) makanya save functionnya ga kedetect
                            $user->save();
        
                            return response()->json([
                                'success' => true,
                                'message' => 'Mohon tunggu transaksi sedang diproses',
                                'nama' => $userNama,
                                'nim' => $userNim,
                            ]);
                        } else {
                            return response()->json([
                                'success' => false,
                                'message' => 'Credit anda tidak mencukupi',
                            ]);
                        }
                    }else if(strcmp($request->input('qrcode'), $arcade3) === 0){
                        if ($user->credit > 0) {
                            $userNama = $user->nama;
                            $userNim = $user->nim;
        
                            $user->credit -= 1;
                            $user->scanned_arcade = true;
                            $user->booth_arcade = 3;
        
                            //ini error biarin aja krn blm ada usernya (modelnya) makanya save functionnya ga kedetect
                            $user->save();
        
                            return response()->json([
                                'success' => true,
                                'message' => 'Mohon tunggu transaksi sedang diproses',
                                'nama' => $userNama,
                                'nim' => $userNim,
                            ]);
                        } else {
                            return response()->json([
                                'success' => false,
                                'message' => 'Credit anda tidak mencukupi',
                            ]);
                        }
                    }else if(strcmp($request->input('qrcode'), $arcade4) === 0){
                        if ($user->credit > 0) {
                            $userNama = $user->nama;
                            $userNim = $user->nim;
        
                            $user->credit -= 1;
                            $user->scanned_arcade = true;
                            $user->booth_arcade = 4;
        
                            //ini error biarin aja krn blm ada usernya (modelnya) makanya save functionnya ga kedetect
                            $user->save();
        
                            return response()->json([
                                'success' => true,
                                'message' => 'Mohon tunggu transaksi sedang diproses',
                                'nama' => $userNama,
                                'nim' => $userNim,
                            ]);
                        } else {
                            return response()->json([
                                'success' => false,
                                'message' => 'Credit anda tidak mencukupi',
                            ]);
                        }
                    }else if(strcmp($request->input('qrcode'), $arcade5) === 0){
                        if ($user->credit > 0) {
                            $userNama = $user->nama;
                            $userNim = $user->nim;
        
                            $user->credit -= 1;
                            $user->scanned_arcade = true;
                            $user->booth_arcade = 5;
        
                            //ini error biarin aja krn blm ada usernya (modelnya) makanya save functionnya ga kedetect
                            $user->save();
        
                            return response()->json([
                                'success' => true,
                                'message' => 'Mohon tunggu transaksi sedang diproses',
                                'nama' => $userNama,
                                'nim' => $userNim,
                            ]);
                        } else {
                            return response()->json([
                                'success' => false,
                                'message' => 'Credit anda tidak mencukupi',
                            ]);
                        }
                    }else{
                        return response()->json([
                            'success' => false,
                            'message' => 'Silakan gunakan QR code yang benar',
                        ]);
                    }
                } else {
                    return response()->json([
                        'success' => false,
                        'message' => 'Anda sudah scan QR code',
                    ]);
                }
            }else{
                return response()->json([
                    'success' => false,
                    'message' => 'User is not registered for wehea',
                ]);
            }
            
        } else {
            return response()->json([
                'success' => false,
                'message' => 'User not authenticated',
            ]);
        }
    }

    public function sendReqDapatKupon(Request $request){
        $kupon1 = "weheadptkupon1";
        $kupon2 = "weheadptkupon2";
        $kupon3 = "weheadptkupon3";

        if (Auth::guard('participant')->check()) {
            $user = Auth::guard('participant')->user();
            if($user->wehea == true && $user->booth_dapat_kupon == 0){
                if(strcmp($request->input('qrcode'), $kupon1) === 0){
                    $userNama = $user->nama;
                    $userNim = $user->nim;
    
                    $user->scanned_dapat_kupon = true;
                    $user->booth_dapat_kupon = 1;
    
                    //ini error biarin aja krn blm ada usernya (modelnya) makanya save functionnya ga kedetect
                    $user->save();
    
                    return response()->json([
                        'success' => true,
                        'message' => 'Mohon tunggu transaksi sedang diproses',
                        'nama' => $userNama,
                        'nim' => $userNim,
                    ]);
                }else if(strcmp($request->input('qrcode'), $kupon2) === 0){
                    $userNama = $user->nama;
                    $userNim = $user->nim;
    
                    $user->scanned_dapat_kupon = true;
                    $user->booth_dapat_kupon = 2;
    
                    //ini error biarin aja krn blm ada usernya (modelnya) makanya save functionnya ga kedetect
                    $user->save();
    
                    return response()->json([
                        'success' => true,
                        'message' => 'Mohon tunggu transaksi sedang diproses',
                        'nama' => $userNama,
                        'nim' => $userNim,
                    ]);
                }else if(strcmp($request->input('qrcode'), $kupon3) === 0){
                    $userNama = $user->nama;
                    $userNim = $user->nim;
    
                    $user->scanned_dapat_kupon = true;
                    $user->booth_dapat_kupon = 3;
    
                    //ini error biarin aja krn blm ada usernya (modelnya) makanya save functionnya ga kedetect
                    $user->save();
    
                    return response()->json([
                        'success' => true,
                        'message' => 'Mohon tunggu transaksi sedang diproses',
                        'nama' => $userNama,
                        'nim' => $userNim,
                    ]);
                }
            }
        }
    }

    public function sendReqTukarPoint(Request $request){
        $merch1 = "tukarpoint1";
        $merch2 = "tukarpoint2";
        $merch3 = "tukarpoint3";

        if (Auth::guard('participant')->check()){
            $user = Auth::guard('participant')->user();
            if (user->scanned_merchandise == 0 && user->booth_merchandise == 0){
                if (strcmp($request->input('qrcode'),$merch1)===0){
                    if($user->point>0){
                        $userNama = $user->nama;
                        $userNim = $user->nim;
                        $user->scanned_merchandise = true;
                        $user->booth_merchandise = 1;
                        $user->save();
                        return response()->json([
                            'success' => true,
                            'message' => 'Mohon tunggu transaksi sedang diproses',
                            'nama' => $userNama,
                            'nim' => $userNim,
                        ]);
                    }
                    else{
                        return response()->json([
                            'success' => false,
                            'message' => 'Insufficient points'
                        ]);
                    }
                }
                else if(strcmp($request->input('qrcode'),$merch2)===0){
                    if($user->point>0){
                        $userNama = $user->nama;
                        $userNim = $user->nim;
                        $user->scanned_merchandise = true;
                        $user->booth_merchandise = 2;
                        $user->save();
                        return response()->json([
                            'success' => true,
                            'message' => 'Mohon tunggu transaksi sedang diproses',
                            'nama' => $userNama,
                            'nim' => $userNim,
                        ]);
                    }
                    else{
                        return response()->json([
                            'success' => false,
                            'message' => 'Insufficient points'
                        ]);
                    }
                }
                else if(strcmp($request->input('qrcode'),$merch3)===0){
                    if($user->point>0){
                        $userNama = $user->nama;
                        $userNim = $user->nim;
                        $user->scanned_merchandise = true;
                        $user->booth_merchandise = 3;
                        $user->save();
                        return response()->json([
                            'success' => true,
                            'message' => 'Mohon tunggu transaksi sedang diproses',
                            'nama' => $userNama,
                            'nim' => $userNim,
                        ]);
                    }
                    else{
                        return response()->json([
                            'success' => false,
                            'message' => 'Insufficient points'
                        ]);
                    }
                }
                else{
                    return response()->json([
                        'success' => false,
                        'messgae' => 'Anda sudah scan QR code'
                    ]);
                }
            }


        }
    }   
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class QrHandlerController extends Controller
{
    public function main()
    {
        return view('cms.page.event.scannerQrBoothGame');
    }

    public function beliKupon()
    {
        return view('cms.page.event.scannerQrBoothGame');
    }

    public function sendReqMain(Request $request)
    {
        $arcade1 = 'weheaarcade1';
        $arcade2 = 'weheaarcade2';
        $arcade3 = 'weheaarcade3';
        $arcade4 = 'weheaarcade4';
        $arcade5 = 'weheaarcade5';

        if (Auth::guard('participant')->check()) {
            $user = Auth::guard('participant')->user();
            if($user->wehea == true){
                if ($user->scanned == 0 && $user->booth == 0) { 
                    if(strcmp($request->input('qrcode'), $arcade1) === 0){
                        if ($user->credit > 0) {
                            $userNama = $user->nama;
                            $userNim = $user->nim;
        
                            $user->credit -= 1;
                            $user->scanned = true;
                            $user->booth = 1;
        
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
                            $user->scanned = true;
                            $user->booth = 2;
        
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
                            $user->scanned = true;
                            $user->booth = 3;
        
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
                            $user->scanned = true;
                            $user->booth = 4;
        
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
                            $user->scanned = true;
                            $user->booth = 5;
        
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
}

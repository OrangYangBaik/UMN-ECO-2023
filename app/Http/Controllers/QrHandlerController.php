<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class QrHandlerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cms.page.event.scannerPage');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function sendReq(Request $request)
    {
        $qrCodeYangBenar = 'hmhisqouyi';
        if (Auth::guard('participant')->check()) {
            if (strcmp($request->input('qrcode'), $qrCodeYangBenar) === 0 && Auth::guard('participant')->user()->scanned == 0) {
                $user = Auth::guard('participant')->user();
                if ($user->credit > 0) {
                    $userNama = $user->nama;
                    $userNim = $user->nim;

                    $user->credit -= 1;
                    $user->scanned = true;

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
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Silakan gunakan QR code yang benar',
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

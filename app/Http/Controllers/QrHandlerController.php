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
        return view('cms.page.event.tesScanQr');
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
            if (strcmp($request->input('qrcode'), $qrCodeYangBenar) === 0) {
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

     public function increaseCreditPoints(Request $request)
     {
        //  $qrCodeMessage = $request->input('qrCode');
     
        //  // Check if the scanned QR code message matches the expected code
        //  $expectedQrCode = "SOME_EXPECTED_QR_CODE";
        //  if ($qrCodeMessage === $expectedQrCode) {
        //      // Find the user based on some identifier (e.g., user ID or email)
        //      $user = User::where('id', $userId)->first();
     
        //      if ($user) {
        //          // Perform credit point increase logic here based on your specific business rules
        //          // Increase the appropriate credit points for the specific action (e.g., scanning QR code)
     
        //          // Example: Increase 10 credit points
        //          $increasePoints = 10;
        //          $user->credit_points += $increasePoints;
        //          $user->save();
     
        //          return response()->json(['success' => true]);
        //      } else {
        //          return response()->json(['success' => false, 'message' => 'User not found']);
        //      }
        //  } else {
        //      return response()->json(['success' => false, 'message' => 'Invalid QR code']);
        //  }
     }
}

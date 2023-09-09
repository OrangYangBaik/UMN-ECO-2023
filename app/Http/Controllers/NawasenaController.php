<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Models\Recruitment;
use App\Models\Team;
use SheetDB\SheetDB;

class NawasenaController extends Controller
{
public function pengumpulanNawasenaGet(Request $request){
        return view('cms.page.nawasena.pengumpulanNawasena');
    }

    public function pengumpulanNawasena(Request $request){

        $user = Auth::guard('participant')->user();
        $request->validate([
            'bukti' => 'required|image|mimes:jpeg,png,jpg,svg|max:1024'
        ]);

        if($user){

            try {
                $date = date("Y-m-d",time());
                $imageName = $user->nama.'-'.$date.'.'.$request->bukti->extension();
        
                // Save the image to a custom directory in the storage directory
                //$request->bukti->public_path('nawasena/')->move($imageName);
                Storage::disk('local')->put('nawasena/' . $imageName, file_get_contents($request->bukti->path()));

                return back()
                    ->with('success', 'Image uploaded successfully')
                    ->with('nawasena', $imageName);
            } catch (\Exception $e) {
                // Handle any exceptions here
                return back()
                    ->with('error', 'Error uploading image: ' . $e->getMessage());
            }
        }
        else{
            return redirect('/login');
        }
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Recruitment;
use App\Models\Team;
use App\models\Nawasena;
use SheetDB\SheetDB;

class NawasenaController extends Controller
{
    public function index(){
        $user = Auth::guard('participant')->user();
        $sheetdb = new SheetDB('bsxkj2qx222h0');

        $isSubmitted = false;
        $isSubmittedLink = false;
        if($user){
            if($sheetdb->search(['Nama'=>$user->nama])){
               $isSubmitted = true;
               if($sheetdb->search(['Nama' => $user->nama, 'Link' => '']) == false){
                $isSubmittedLink = true;
               }
            }
            // return view('cms.page.nawasena.homePageNawasena', ['title'=>'Nawasena', 'isSubmitted' => $isSubmitted]);
        }
        return view('cms.page.nawasena.homePageNawasena', ['title'=>'Nawasena', 'isSubmitted' => $isSubmitted, 'isSubmittedLink' => $isSubmittedLink]);
    }   

    // public function pengumpulanNawasenaGet(){
    //     return view('cms.page.nawasena.pengumpulanNawasena');
    // }

    public function pengumpulanNawasena(Request $request){
        $user = Auth::guard('participant')->user();

        if(!$user){
            return response()->json(['redirect' => route('loginUser')]);
        }

        $request->validate([
            'bukti' => 'required|image|mimes:jpeg,png,jpg,svg|max:1024',
            'deskripsi' => 'nullable'
        ], [
            'bukti.required' => 'Mohon pilih gambar untuk diunggah!',
            'bukti.image' => 'Unggahan harus berupa gambar!',
            'bukti.mimes' => 'Format gambar harus berupa jpeg, png, jpg, or svg!',
            'bukti.max' => 'Ukuran gambar tidak boleh lebih dari 1mb!'
        ]);
        
        try {
            $date = date("Y-m-d",time());
            $imageName = 'simpanFoto/'.$user->nama.'-'.$date.'.'.$request->bukti->extension();
            
            $nama = $user->nama;
            $deskripsi = $request->deskripsi;
            $nim = $user->nim;
            $email = $user->email;
            $angkatan = $user->angkatan;
            $jurusan = $user->prodi;
            $instagram = $user->instagram;
            $line = $user->line;
            
            // Save the image to a custom directory in the storage directory
            
            $sheetdb = new SheetDB('bsxkj2qx222h0');
            if($sheetdb->search(['Nama'=>$user->nama])){
                return response()->json([
                    'status' => 'error',
                    'message' => 'Anda telah terdaftar, silakan join grup di bawah ini!',
                    'link' => 'https://line.me/R/ti/g/TDmeH4OgrT',
                ]);
                // return back()
                //     ->with('error', 'User sudah submit bukti!');
                //$sheetdb->update('Nama',$user->nama, ['Bukti'=>$imageName]);
            } else{
                $sheetdb->create([
                    'id' => 'INCREMENT',
                    'Nama' => $nama,
                    'NIM' => $nim,
                    'Email' => $email,
                    'Angkatan' => $angkatan,
                    'Jurusan' => $jurusan,
                    'Instagram' => $instagram,
                    'Line' => $line,
                    'Bukti' => $imageName,
                    'Deskripsi' => $deskripsi,
                ]);
                /* Database on progress (masih eror)
                    $data = [
                        'Name' => $nama,
                        'NIM' => $nim,
                        'Email' => $email,
                        'Angkatan' => $angkatan,
                        'Jurusan' => $jurusan,
                        'Instagram_account' => $instagram_account,
                        'Line_id' => $line_id,
                        'image' => $imageName,
                    ];
                    try {
                        Nawasena::create($data);
                        // Or: $nawasena = new Nawasena($data); $nawasena->save();
                    } catch (\Exception $e) {
                        dd($e->getMessage()); // Print the error message for debugging
                    } 
                */
            }
            $request->bukti->move('simpanFoto/',$imageName);
            
            //Storage::disk('local')->put('nawasena/' . $imageName, file_get_contents($request->bukti->path()));     buat masuk ke storage/app/nawasena, gabisa difetch
            
            //Kalo image gak muncul, coba php artisan storage:link
            // return back()
            //     ->with('success', 'Image uploaded successfully')
            //     ->with('nawasena', $imageName);
            // return response()->json([
            //     'status' => 'success',
            //     'message' => 'Terima kasih telah mendaftar, silakan join grup di bawah ini!',
            //     'link' => 'https://line.me/R/ti/g/TDmeH4OgrT'
            // ]);
            return response()->json(['redirect' => route('nawasena-thanks')]);
        } catch (\Exception $e) {
            // Handle any exceptions here
            // return back()
            //     ->with('error', 'Error uploading image: ' . $e->getMessage());
            return response()->json([
                'status' => 'error',
                'message' => 'Error uploading image: ' . $e->getMessage(),
            ]);
        
        }
    }

    public function nawasenaThanks(){
        return view('cms.page.nawasena.thanksNawasena', ['title' => 'Nawasena Thanks Page']);
    }
}

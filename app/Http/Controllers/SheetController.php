<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Models\Recruitment;
use App\Models\Team;
use SheetDB\SheetDB;

class SheetController extends Controller
{
    public function index(Team $team){
        return view('cms.page.recruitmentForm', [
            $ecofriends = new Recruitment,
            'title' => 'UMN ECO 2023 - Recruitment',
            'team' => $team,
            'ecofriends' => $ecofriends->getAll()
        ]);
    }

    public function store(Request $request){
        $sheetdb = new SheetDB('7klu48ezum4z0');

        if($request->Team == 'JAGAT') return redirect('our-team');

        if($request->Team=="LIKU" || $request->Team=="GENTA" || $request->Team=="BACARITA")
            $SubReq = 'required';
        else
            $SubReq = '';

        if($request->Team == "BACARITA") $Pengalaman_dokums = 'required';
        else $Pengalaman_dokums = '';

        $request->validate([
                'Team' => 'required',
                'Subdivisi' => $SubReq,
                'Name' => 'required|regex:/[a-zA-Z]+$/x',
                'NIM' => 'required|regex:/000000(\d{5})/|unique:recruitments,NIM',
                'Email' => ['required','email:dns','regex:/^.+@(student\.umn\.ac\.id|lecturer\.umn\.ac\.id|umn\.ac\.id)$/', 'unique:recruitments,Email'],
                'Angkatan' => 'required',
                'Jurusan' => 'required',
                'Instagram_account' => 'required|unique:recruitments,Instagram_account',
                'Line_id' => 'required|unique:recruitments,Line_id',
                'Phone_number' => 'required|unique:recruitments,Phone_number',
                'Pengetahuan' => 'required',
                'Kesibukan' => 'required',
                'Experience' => 'required',
                'Alasan1' => 'required',
                'Alternative' => 'required',
                'Alasan2' => 'required',
                'Pengalaman_dokum' => $Pengalaman_dokums,
                'LinkDrive' => 'required|url',
            ]);
    

        $id = "INCREMENT";
        $team = $request->Team;
        $subdivisi = $request->Subdivisi;
        $name = $request->Name;
        $nim = $request->NIM;
        $email = $request->Email;
        $angkatan = $request->Angkatan;
        $jurusan = $request->Jurusan;
        $instagram_account = $request->Instagram_account;
        $line_id = $request->Line_id;
        $phone_number = $request->Phone_number;
        $pengetahuan = $request->Pengetahuan;
        $kesibukan = $request->Kesibukan;
        $experience = $request->Experience;
        $alasan1 = $request->Alasan1;
        $alternative = $request->Alternative;
        $alasan2 = $request->Alasan2;
        $pengalaman_dokum = $request->Pengalaman_dokum;
        $linkDrive = $request->LinkDrive;
        $sheetdb->create([  'id'=> $id,
                            'Team'=>$team, 
                            'Subdivisi'=>$subdivisi, 
                            'Name'=>$name,
                            'NIM' => $nim,
                            'Email' => $email,
                            'Angkatan' => $angkatan,
                            'Jurusan' => $jurusan,
                            'Instagram_account' => $instagram_account,
                            'Line_id' => $line_id,
                            'Phone_number' => $phone_number,
                            'Pengetahuan' => $pengetahuan,
                            'Pengalaman_dokum' => $pengalaman_dokum,
                            'Kesibukan' => $kesibukan,
                            'Experience' => $experience,
                            'Alasan1' => $alasan1,
                            'Alternative' => $alternative,
                            'Alasan2' => $alasan2,
                            'LinkDrive' => $linkDrive
                        ]);

        return redirect('/oprec-thanks');
    }

    // public function pengumpulanLinkNawasenaGet(Request $request){
    //     return view('cms.page.nawasena.pengumpulanLinkNawasena');
    // }

    public function pengumpulanLinkNawasena(Request $request){
        $user = Auth::guard('participant')->user();

        if($user){
            $request->validate([
                'link' => 'required|url'
            ], [
                'link.required' => 'Link Google Drive wajib diisi!',
                'link.url' => 'Link yang Anda masukkan tidak valid!'
            ]);

            // $date = date("Y-m-d",time());
            $link = $request->link;
            $sheetdb = new SheetDB('bsxkj2qx222h0');
            if($sheetdb->search(['Nama'=>$user->nama])){
                $sheetdb->update('Nama',$user->nama, ['Link'=>$link]);
            }
            else{
                // return back()
                //     ->with('error', 'Error uploading link: User not found');
                return response()->json([
                    'status' => 'error',
                    'message' => 'Pengguna tidak ditemukan!',
                ]);
            }
/*
            $sheetdb->create([
                'id' => 'INCREMENT',
                'Nama' => $user->nama,
                'Link' => $link
            ]);
*/
            // return back()
            //     ->with('success', 'Link uploaded successfully')
            //     ->with('nawasenaLink', $link);
            return response()->json([
                'status' => 'success',
                'message' => 'Berhasil mengunggah link!',
            ]);
        }
        else{
            return response()->json(['redirect' => route('loginUser')]);
        }
    }

/*    public function getImageNawasena($filename)
    {
        // Ensure the file exists in storage
        if (Storage::disk('public')->exists('nawasena' . $filename)) {
            $path = Storage::disk('public')->path('nawasena' . $filename);
            return response()->file($path);
        } else {
            abort(404); // Image not found
        }
    }
*/   
}

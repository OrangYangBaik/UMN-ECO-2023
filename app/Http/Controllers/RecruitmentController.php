<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Mail\RecruitmentMail;
use Illuminate\Support\Facades\Mail;
use App\Models\Team;
use App\Models\Recruitment;

class RecruitmentController extends Controller
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
        if($request->Team=="LIKU" || $request->Team=="GENTA" || $request->Team=="BACARITA")
            $SubReq = 'required';
        else
            $SubReq = '';

        if($request->Team == "BACARITA") $Pengalaman_dokum = 'required';
        else $Pengalaman_dokum = '';

        $ValidReq = $request->validate([
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
            'Pengalaman_dokum' => $Pengalaman_dokum,
            'LinkDrive' => 'required|url',
        ]);

        Recruitment::create($ValidReq);

        // $this->sendEmail($ValidReq);

        return redirect('/oprec-thanks');
    }

    // public function sendEmail($data){
    //     $details = [
    //         'title' => 'UMN ECO 2022: REGISTRATION CONFIRMATION',
    //         'name' => $data['Name'],
    //         'team' => $data['Team']
    //     ];
    //     Mail::to($data['Email'])->send(new RecruitmentMail($details));
    // }

}
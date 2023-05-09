<?php

namespace App\Http\Controllers;

use App\Models\DownpourUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DownpourRegistrationController extends Controller
{

    public function registrationValidation(Request $request){
        $ValidReq = $request->validate([
            'username_student_email' => ['required','email:dns','regex:/^.+@(student\.umn\.ac\.id|lecturer\.umn\.ac\.id|umn\.ac\.id)$/', 'unique:downpour_users,username_student_email'],
            'student_id' => 'required|regex:/000000(\d{5})/|unique:downpour_users,student_id',
            'name' => 'required|regex:/[a-zA-Z]+$/x',
            'password' => 'required',
            'confirm_password' => 'required|same:password',
            'major' => 'required',
            'generation' => 'required|integer',
            'line_id' => 'required|unique:downpour_users,line_id',
            'telephone' => 'required',
            'instagram_username' => 'required|unique:downpour_users,instagram_username' 
        ]);

        $ValidReq['password'] = Hash::make($ValidReq['password']);

        DownpourUser::create($ValidReq);

        return redirect('/downpour/login');
    }
}

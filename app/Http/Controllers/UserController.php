<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function dashboard()
    {
        return view('cms.page.dashboard',['title' => 'user dashboard']);
    }

    public function loginPage()
    {
        return view('cms.page.event.loginUser',[
            'title' => 'login page',
        ]);
    }

    public function registerPage()
    {
        return view('cms.page.event.registerUser',['title' => 'Register page']);
    }

    public function store(Request $request)
    {
        $request->validate([
            'Name' => 'required|regex:/[a-zA-Z]+$/x',
            'NIM' => 'required|regex:/000000(\d{5})/|unique:recruitments,NIM',
            'Email' => ['required','email:dns','regex:/^.+@(student\.umn\.ac\.id|lecturer\.umn\.ac\.id|umn\.ac\.id)$/', 'unique:recruitments,Email'],
            'Password' => 'required'
        ]);
        $user = new User();
        $user->nama = $request->Name;
        $user->nim = $request->NIM;
        $user->email = $request->Email;
        $user->password = Hash::make($request->input('Password'));
        $user->save();
        return view('cms.page.event.loginUser', ['title' => 'login page']);
    }

    public function login(Request $request)
    {   
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if(Auth::guard('participant')->attempt($credentials)){
            $request->session()->regenerate();
            return view('cms.page.dashboard',['title' => 'user dashboard']);
            //return redirect()->intended('/admin/dashboard');
        }else return back()->with('status', 'Invalid login details');
    }

    public function logout(){
        Auth::guard('participant')->logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect(route('loginUser'));
    }
}
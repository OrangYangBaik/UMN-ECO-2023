<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Exception;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Support\Facades\Http;
use \Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\JsonResponse;

class UserController extends Controller
{   
    public function getAllUserInfo(){
        $user = Auth::guard('participant')->user();

        $nama = $user->nama;
        $nim = $user->nim;
        $credit = $user->credit;
        $point = $user->point;

        $kupon = $user->kupon->first();
        
        if($kupon){
            $atasan = $kupon->atasan;
            $bawahan = $kupon->bawahan;
            //$aksesoris = $kupon->aksesoris;

            return view('cms.page.wehea.weheaInfo',[
                "title" => "My Info",
                'nama' => $nama,
                'nim' => $nim,
                'credit' => $credit,
                'point' => $point,
                'atasan' => $atasan,
                'bawahan' => $bawahan,
                //'aksesoris' => $aksesoris,
            ]);
        }

        $atasan = 0;
        $bawahan = 0;
        //$aksesoris = 0;

        return view('cms.page.wehea.weheaInfo',[
            "title" => "My Info",
            'nama' => $nama,
            'nim' => $nim,
            'credit' => $credit,
            'point' => $point,
            'atasan' => $atasan,
            'bawahan' => $bawahan,
            //'aksesoris' => $aksesoris,
        ]);
    }

    public function dashboard()
    {
        return view('cms.page.homePage',['title' => 'User Dashboard']);
    }

    public function loginPage()
    {
        return view('cms.page.event.loginUser',[
            'title' => 'Login',
        ]);
    }

    public function registerPage()
    {
        $ecofriends = new User;
        return view('cms.page.event.registerUser', [
            'title' => 'Register',
            'ecofriends' => $ecofriends->All(),
        ]);
    }

    public function store(Request $request)
    {
        try{
            $request->validate([
                'name' => 'required|regex:/[a-zA-Z]+$/x',
                // 'nim' => 'required|regex:/000000(\d{5})/|unique:recruitments,NIM',
                'nim' => 'required|unique:recruitments,NIM',
                'email-student' => ['required','email:dns','regex:/^.+@(student\.umn\.ac\.id|lecturer\.umn\.ac\.id|umn\.ac\.id)$/', 'unique:recruitments,Email'],
                'angkatan' => 'required',
                'fakultas' => 'required',
                'program-studi' => 'required',
                'instagram' => 'required|unique:recruitments,Instagram_account',
                'id-line' => 'required|unique:recruitments,Line_id',
                'password' => 'required',
                'confirmation-password' => 'required|same:password'
            ]);
    
            $user = new User();
            $user->id = Str::uuid();
            $user->nama = $request->name;
            $user->nim = $request->nim;
            $user->email = $request->input('email-student');
            $user->angkatan = $request->angkatan;
            $user->fakultas = $request->fakultas;
            $user->prodi = $request->input('program-studi');
            $user->instagram = $request->instagram;
            $user->line = $request->input('id-line');
            $user->password = Hash::make($request->input('password'));
            $user->save();
            return view('cms.page.event.loginUser', ['title' => 'Login']);
        }catch(Exception $e){
            return response()->json([
                'status' => 500,
                'message' => $e->getMessage()
            ], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
        
    }

    public function login(Request $request)
    {   
        $credentials = $request->validate([
            'email-student' => 'required|email',
            'password' => 'required'
        ]);

        if(Auth::guard('participant')->attempt(['email' => $request->input('email-student'), 'password' => $request->password])){
            $request->session()->regenerate();
            return redirect((route('homepage')));
        }else return back()->with('status', 'Email dan/atau password salah!');
    }

    public function logout(){
        Auth::guard('participant')->logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect(route('homepage'));
    }
}
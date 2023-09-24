<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;

class HomeController extends Controller
{
    public function index(){
        return view('cms.page.homePage', ['title' => 'Earth Caring Operation'] );
    }

    public function aboutus(){
        return view('cms.page.aboutUs', ['title' => 'About Us'] );
    }

    public function ourteam(){
        return view('cms.page.oprecView', [
            'title' => 'Our Team',
            'teams' => Team::All()
        ]);
    }

    public function oprecthanks(){
        return view('cms.page.thanksOprec', [
            'title' => 'Thank You',
            'teams' => Team::All()
        ]);
    }

    public function disableJagat(){
        return redirect("our-team");
    }
}

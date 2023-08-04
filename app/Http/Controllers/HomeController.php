<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;

class HomeController extends Controller
{
    public function index(){
        return view('cms.page.newlanding', ['title' => 'Home'] );
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

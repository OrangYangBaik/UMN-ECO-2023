<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;

class HomeController extends Controller
{
    public function index(){
        return view('cms.page.newlanding', ['title' => 'UMN ECO 2023 - Home'] );
    }

    public function ourteam(){
        return view('cms.page.oprecView', [
            'title' => 'UMN ECO 2023 - Our Team',
            'teams' => Team::All()
        ]);
    }

    public function oprecthanks(){
        return view('cms.page.thanksOprec', [
            'title' => 'UMN ECO 2023 - Thank You',
            'teams' => Team::All()
        ]);
    }

    public function disableJagat(){
        return redirect("our-team");
    }
    // public function info(){
    //     return view('cms.page.info', [
    //         'title' => 'UMN ECO 2022 - Info Challenge',
    //     ]);
    // }
}

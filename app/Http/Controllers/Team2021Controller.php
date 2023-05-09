<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team2021;
use App\Models\Team2022;
use App\Models\Team;

class Team2021Controller extends Controller
{
    public function index(){
        return view('cms.page.aboutus2021', [
            'title' => 'ECO Family',
            'teams' => Team::All(),
            'teams2021' => Team2021::All(),
        ]);
    }
}

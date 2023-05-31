<?php

namespace App\Http\Controllers;

use App\Models\Team2021;
use App\Models\Team;

class EcoFamilyController extends Controller
{
    public function index(){
        return view('cms.page.ecoFamily', [
            'title' => 'ECO Family',
            'teams' => Team::All(),
            'teams2021' => Team2021::All(),
        ]);
    }
}

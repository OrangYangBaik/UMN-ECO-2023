<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MeruBetiriController extends Controller
{
    public function landingPage(){
        return view('cms.page.meruBetiri.landingMeruBetiri', ['title' => "Gate of Meru Betiri"]);
    }

    public function pagePulau1(){
        return view('cms.page.meruBetiri.pulauSatu.pulauSatu', ['title' => "Registration"]);
    }

    public function pagePulau2(){
        return view('cms.page.meruBetiri.pulauDua.pulauDua', ['title' => "Rute Funwalk"]);
    }
    
    public function pagePulau3(){
        return view('cms.page.meruBetiri.pulauTiga.pulauTiga', ['title' => "Info"]);
    }
}

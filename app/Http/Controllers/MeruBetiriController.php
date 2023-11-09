<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MeruBetiriController extends Controller
{
    public function landingPage(){
        return view('cms.page.meruBetiri.landingMeruBetiri', ['title' => "Gate of Meru Betiri"]);
    }
    public function merubetiri(){
        return view('cms.page.meruBetiri.merubetiri', ['title' => "merubetiri"]);
    }
    public function pagePulau1(){
        return('pulau1');
    }
    public function pagePulau2(){
        return('pulau2');
    }
    public function pagePulau3(){
        return('pulau3');
    }
}

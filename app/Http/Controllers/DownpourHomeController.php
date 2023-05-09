<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DownpourHomeController extends Controller
{
    public function index()
    {
        return view ('cms.page.landingDownpour', [
            "title" => "DOWNPOUR",
        ]);
    }
	
    public function description()
    {
        return view ('cms.page.descriptionDownpour', [
            "title" => "Description",
        ]);
    }
	
    public function teste()
    {
        return view ('cms.page.teste', [
            "title" => "Description",
        ]);
    }
}

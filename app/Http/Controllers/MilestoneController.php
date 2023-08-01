<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Milestone;

class MilestoneController extends Controller
{

    public function index()
    {
        return view("cms.page.milestone.milestone", ['title' => 'titel milestone']);
    }

    // public function firstGenBS()
    // {   
    //     return view("cms.page.milestone.bs.firstGenBS", [
    //         'title' => 'titel BS1',
    //         'milestone' => Milestone::where('id', '2')->get()
    //     ]);
    // }
    public function firstGenBS()
    {   
        return view("cms.page.milestone.milestoneDetailBs", [
            'title' => 'titel BS2',
            'milestone' => Milestone::where('id', '1')->first()
        ]);
    }

    public function secGenBS()
    {
        return view("cms.page.milestone.bs.secGenBS", [
            'title' => 'titel BS2',
            'milestone' => Milestone::where('id', '2')->first()
        ]);
    }

    public function thirdGenBS()
    {
        return view("cms.page.milestone.bs.thirdGenBS", [
            'title' => 'titel BS3'
        ]);
    }
    public function fourthGenBS()
    {
        return view("cms.page.milestone.bs.fourthGenBS", ['title' => 'titel BS4']);
    }
    public function fifthGenBS()
    {
        return view("cms.page.milestone.bs.fifthGenBS", ['title' => 'titel BS5']);
    }
    public function firstGenEco()
    {
        return view("cms.page.milestone.eco.firstGenECO", ['title' => 'titel ECO1']);
    }
    public function secGenEco()
    {
        return view("cms.page.milestone.eco.secGenECO", ['title' => 'titel ECO2']);
    }
    public function thirdGenECO()
    {
        return view("cms.page.milestone.eco.thirdGenECO", ['title' => 'titel ECO3']);
    }
    public function banksampah()
    {
        return view("cms.page.milestone.milestoneDetailBs", ['title' => 'titel ECO3']);
    }
    public function eco()
    {
        return view("cms.page.milestone.milestoneDetailEco", ['title' => 'titel ECO3']);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Milestone;

class MilestoneController extends Controller
{

    public function index(){
        return view("cms.page.milestone.milestone", ['title' => 'titel milestone']);
    }

    public function firstGenBS(){   
        return view("cms.page.milestone.bs.milestoneDetailBs", [
            'title' => 'Bank Sampah Gen 1',
            'milestone' => Milestone::where('id', '1')->first()
        ]);
    }

    public function secGenBS()
    {
        return view("cms.page.milestone.bs.milestoneDetailBs", [
            'title' => 'Bank Sampah Gen 2',
            'milestone' => Milestone::where('id', '2')->first()
        ]);
    }

    public function thirdGenBS()
    {
        return view("cms.page.milestone.bs.milestoneDetailBs", [
            'title' => 'Bank Sampah Gen 3',
        ]);
    }

    public function fourthGenBS()
    {
        return view("cms.page.milestone.bs.milestoneDetailBs", ['title' => 'Bank Sampah Gen 4',]);
    }
    public function fifthGenBS()
    {
        return view("cms.page.milestone.bs.milestoneDetailBs", ['title' => 'Bank Sampah Gen 5',]);
    }
    public function sixthGenBS()
    {
        return view("cms.page.milestone.bs.milestoneDetailBs", ['title' => 'Bank Sampah Gen 6',]);
    }


    public function firstGenEco()
    {
        return view("cms.page.milestone.eco.milestoneDetailEco", ['title' => 'UMN ECO Gen 1']);
    }
    public function secGenEco()
    {
        return view("cms.page.milestone.eco.milestoneDetailEco", ['title' => 'UMN ECO Gen 2']);
    }
    public function thirdGenECO()
    {
        return view("cms.page.milestone.eco.milestoneDetailEco", ['title' => 'UMN ECO Gen 3']);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Milestone;

class MilestoneController extends Controller
{

    public function index(){
        return view("cms.page.milestone.milestone", ['title' => 'Milestone']);
    }

    public function firstGenBS(){   
        return view("cms.page.milestone.milestoneDetail", [
            'title' => 'Bank Sampah Gen 1',
            'milestone' => Milestone::where('id', '1')->first()
        ]);
    }

    public function secGenBS()
    {
        return view("cms.page.milestone.milestoneDetail", [
            'title' => 'Bank Sampah Gen 2',
            'milestone' => Milestone::where('id', '2')->first()
        ]);
    }

    public function thirdGenBS()
    {
        return view("cms.page.milestone.milestoneDetail", [
            'title' => 'Bank Sampah Gen 3',
            'milestone' => Milestone::where('id', '3')->first()
        ]);
    }

    public function fourthGenBS()
    {
        return view("cms.page.milestone.milestoneDetail", [
            'title' => 'Bank Sampah Gen 4',
            'milestone' => Milestone::where('id', '4')->first()
        ]);
    }

    public function fifthGenBS()
    {
        return view("cms.page.milestone.milestoneDetail", [
            'title' => 'Bank Sampah Gen 5',
            'milestone' => Milestone::where('id', '5')->first()
        ]);
    }

    public function firstGenEco()
    {
        return view("cms.page.milestone.milestoneDetail", [
            'title' => 'UMN ECO Gen 1',
            'milestone' => Milestone::where('id', '6')->first()
        ]);
    }

    public function secGenEco()
    {
        return view("cms.page.milestone.milestoneDetail", [
            'title' => 'UMN ECO Gen 2',
            'milestone' => Milestone::where('id', '7')->first()
        ]);
    }
    public function thirdGenECO()
    {
        return view("cms.page.milestone.milestoneDetail", [
            'title' => 'UMN ECO Gen 3',
            'milestone' => Milestone::where('id', '8')->first()
        ]);
    }
}

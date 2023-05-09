<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Drought_bingo;
use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DroughtBingoController extends Controller {
  public function bingo() {
    $userBingo = [
      Auth::guard("drought")->user()->bingo_1,
      Auth::guard("drought")->user()->bingo_2,
      Auth::guard("drought")->user()->bingo_3,
      Auth::guard("drought")->user()->bingo_4,
      Auth::guard("drought")->user()->bingo_5,
      Auth::guard("drought")->user()->bingo_6,
      Auth::guard("drought")->user()->bingo_7,
      Auth::guard("drought")->user()->bingo_8,
      Auth::guard("drought")->user()->bingo_9,
    ];
    return view('cms.page.droughtBingo', [
      "title" => "Drought Bingo",
      "bingos" => Drought_bingo::all(),
      "bingo" => Drought_bingo::first(),
      "userBingo" => $userBingo
    ]);
  }

  public function submitBingoVerification(Request $request) {
    $validRequest = $request->validate([
      'link' => "required",
      'bingo_number' => "required"
    ]);

    $bingoNumber = $validRequest["bingo_number"];
    $bingoNumber = "bingo_".$bingoNumber;

    DB::table('drought_registrations')
        ->where('id', Auth::user()->id)
        ->update([$bingoNumber => $validRequest["link"]]);

    return redirect()->route("bingoDrought")->with('submit','ada');
  }
}

<?php

namespace App\Http\Controllers;

use App\Models\DownpourUser;
use Illuminate\Http\Request;

class DownpourAdminController extends Controller {
  public function downpourStudentTickets() {
    return view('admin.page.downpour.StudentTickets', [
      "users" => DownpourUser::all()
    ]);
  }

  public function toggleSeminar(Request $request) {
    $validated = $request->validate([
      "id" => "numeric|required"
    ]);

    $targetUser = DownpourUser::findOrFail($validated["id"]);
    
    //null means the person dont have any ticket for the booth
    //0 means the person have ticket but doesnt complete the activity booth yet.
    //1 means the person have ticket and have completed the activity booth.
    if($targetUser->seminar_ticket === null) {
      return redirect(route("student.ticket"));
    }

    $targetUser->seminar_ticket = !$targetUser->seminar_ticket;
    $targetUser->save();
    return redirect(route("student.ticket"));
  }

  public function toggleActivityBooth(Request $request) {
    $validated = $request->validate([
      "activity_booth_number" => "string|required",
      "username_student_email" => "string|required"
    ]);
    $activityBoothNumber = $validated["activity_booth_number"];
    $studentEmail = $validated["username_student_email"];

    $targetUser = DownpourUser::where("username_student_email", $studentEmail)->get()->firstOrFail();
    
    //null means the person dont have any ticket for the booth
    //0 means the person have ticket but doesnt complete the activity booth yet.
    //1 means the person have ticket and have completed the activity booth.
    if($targetUser["activity_booth_{$activityBoothNumber}"] === null) {
      return redirect(route("student.ticket"));
    }
    
    $targetUser["activity_booth_{$activityBoothNumber}"] = !$targetUser["activity_booth_{$activityBoothNumber}"];
    $targetUser->save();
    
    return redirect(route("student.ticket"));
  }
}

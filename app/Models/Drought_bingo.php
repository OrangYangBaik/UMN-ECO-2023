<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Drought_bingo extends Model {
  use HasFactory;

  public function regulations() {
    return $this->hasMany(Drought_bingo_regulation::class);
  }

  protected $guarded = ["id"];
}

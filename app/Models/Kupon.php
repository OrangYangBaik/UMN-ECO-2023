<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kupon extends Model
{
    use HasFactory;
    protected $table = 'kupons';
    protected $primaryKey = 'id';
    protected $keyType = 'string';

    protected $guarded = [
        'id', 'timestamps'
    ];

    public function siswa(){
        return $this->belongsTo(User::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nawasena extends Model
{
    use HasFactory;

    protected $fillable = [
        'Name', 'NIM', 'Email', 'Angkatan', 'Jurusan',
        'Instagram_account', 'Line_id', 'image'
    ];
    
    protected $guarded = [
        'id', 'timestamps'
    ];
}

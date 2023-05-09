<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\This;

class Recruitment extends Model
{
    use HasFactory;

    protected $guarded = [
        'id', 'timestamps'
    ];

    public function getAll(){
        return $this->All();
    }
}

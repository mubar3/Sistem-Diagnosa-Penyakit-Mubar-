<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pakar extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'asal',
        'foto',
        'profesi'
    ];
}

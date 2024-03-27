<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admisbacc extends Model
{
    use HasFactory;

    protected $fillable = [
        'firstName',
        'lastName',
        'dateNaissance',
        'lieuNaissance',
        'numBacc',
        'lieu',
        'sessionBacc',
        'serieBacc',
        'neVers',
    ];
}

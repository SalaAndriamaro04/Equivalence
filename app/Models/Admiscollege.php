<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admiscollege extends Model
{
    use HasFactory;

    protected $fillable = [
        'firstName',
        'lastName',
        'dateNaissance',
        'lieuNaissance',
        'numInscription',
        'lieu',
        'session',
        'neVers',
    ];
}

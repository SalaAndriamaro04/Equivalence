<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admislangue extends Model
{
    use HasFactory;

    protected $fillable = [
        'firstName',
        'lastName',
        'dateNaissance',
        'lieuNaissance',
        'numCandidat',
        'centreExam',
        'anneeExam',
        'neVers',
    ];
}

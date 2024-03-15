<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admis extends Model
{
    use HasFactory;

    protected $fillable = [
        'matricule',
        'firstName',
        'lastName',
        'dateNaissance',
        'lieuNaissance',
        'universite',
        'annee',
        'parcours',
        'niveau',
        'neVers',
    ];
}

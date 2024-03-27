<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admiscrinfp extends Model
{
    use HasFactory;

    protected $fillable = [
        'firstName',
        'lastName',
        'dateNaissance',
        'lieuNaissance',
        'numFormation',
        'centreFormation',
        'anneeFormation',
        'neVers',
    ];
}

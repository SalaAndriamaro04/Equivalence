<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Terminers extends Model
{
    use HasFactory;

    protected $fillable = [
        'firstName',
        'lastName',
        'dateNaissance',
        'neVers',
        'lieuNaissance',
        'adresse',
        'numPhone',
        'cni',
        'dateDelivrance',
        'lieuDelivrance',
        'photocopieCni',
        'universite',
        'parcours',
        'niveau',
        'matricule',
        'diplomeOriginal',
        'diplomeCertifie',
        'motif',
        'slug',
    ];
}

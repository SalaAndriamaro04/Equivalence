<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Errors extends Model
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
        'niveau',
        'titreOriginal',
        'motif',
        'slug',

        'universite',
        'mention',
        'parcours',
        'matricule',
        'anneeUniv',

        'numBacc',
        'sessionBacc',
        'serieBacc',
        'centreBacc',
        'mentionBacc',

        'numInscription',
        'session',
        'centre',

        'numFormation',
        'anneeFormation',
        'centreFormation',
        'diplomeAssorti',

        'numCandidat',
        'centreExam',
        'anneeExam',
        
        'motifErreur',
    ];
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admis;
use App\Models\Terminers;
//Pour utiliser DB::
use Illuminate\Support\Facades\DB;

class PromotionController extends Controller
{
    //
    public function promotion(){
        /*Admis::create([
            'matricule'=>'015',
            'firstName'=>'JOLIA',
            'lastName'=> 'Falissé',
            'neVers'=>'1994',
            'lieuNaissance'=>'Manombo',
            'universite'=>'Ecole Nationale d\'Informatique',
            'annee'=>'2020',
            'parcours'=>'Informatique Général',
            'niveau'=>'L3',
        ]);*/
        $listAdmis = DB::table('admis')->get();
        return view('promotion', compact('listAdmis'));
    }

    public function verifPromotion(Request $request){
        $person= $request ->all();
        //var_dump($param);
        $firstName=$person['firstName'];
        $lastName=$person['lastName'];
        $dateNaissance=$person['dateNaissance'];
        $neVers=$person['neVers'];
        $lieuNaissance=$person['lieuNaissance'];
        $adresse=$person['adresse'];
        $numPhone=$person['numPhone'];
        $cni=$person['cni'];
        $dateDelivrance=$person['dateDelivrance'];
        $lieuDelivrance=$person['lieuDelivrance'];
        $universite=$person['universite'];
        $parcours=$person['parcours'];
        $niveau=$person['niveau'];
        $matricule=$person['matricule'];
        $motif=$person['motif'];
        $photocopieCni=$person['photocopieCni'];
        $diplomeOriginal=$person['diplomeOriginal'];
        $diplomeCertifie=$person['diplomeCertifie'];
        $slug=$person['slug'];

        $valid=DB::table('admis')
                ->where('matricule', '=', $person['matricule'])
                ->where('universite', '=', $person['universite'])
                ->where('parcours', '=', $person['parcours'])
                ->where('niveau', '=', $person['niveau'])
                ->get();
       // var_dump($valid);
        return view('promotionValid', compact('valid','slug','diplomeCertifie',
        'diplomeOriginal','photocopieCni','motif','matricule',
        'niveau','parcours','universite','lieuDelivrance','dateDelivrance',
        'cni','numPhone','adresse','lieuNaissance','neVers','dateNaissance',
        'lastName','firstName'));
    }
    
    public function terminer(Request $request){
        $param= $request ->all();
        //var_dump($param);

        $listTerminer= new Terminers();
        //$listTerminer->id = $param['id'];
          $listTerminer->firstName = $param['firstName'];
          $listTerminer->lastName= $param['lastName'];
          $listTerminer->dateNaissance= $param['dateNaissance'];
          $listTerminer->neVers= $param['neVers'];
          $listTerminer->lieuNaissance= $param['lieuNaissance'];
          $listTerminer->universite= $param['universite'];
          $listTerminer->parcours= $param['parcours'];
          $listTerminer->niveau= $param['niveau'];
          $listTerminer->matricule= $param['matricule'];
          $listTerminer->numPhone= $param['numPhone'];
          $listTerminer->adresse= $param['adresse'];
          $listTerminer->cni= $param['cni'];
          $listTerminer->dateDelivrance= $param['dateDelivrance'];
          $listTerminer->lieuDelivrance= $param['lieuDelivrance'];
          $listTerminer->photocopieCni= $param['photocopieCni'];
          $listTerminer->diplomeOriginal= $param['diplomeOriginal'];
          $listTerminer->diplomeCertifie= $param['diplomeCertifie'];
          $listTerminer->motif= $param['motif'];
          $listTerminer->slug= $param['slug'];

          $listTerminer->save();

          return view('confirmTerminer', compact('listTerminer'));
    }
    
    public function envoiTerminer($slug){

        $deleted = DB::table('demandes')->where('slug', '=', $slug)->delete();
        return redirect()->route('home')->with('status', 'La demande a été traité');
    }
}

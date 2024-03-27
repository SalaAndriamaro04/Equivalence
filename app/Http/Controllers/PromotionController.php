<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Demande;
use App\Models\Admis;
use App\Models\Admisbacc;
use App\Models\Admiscollege;
use App\Models\Admiscrinfp;
use App\Models\Admislangue;
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
            'mention'=>'Science de l\'ingénieur',
            'anneeUniv'=>'2020',
            'parcours'=>'Informatique Général',
            'niveau'=>'L3',
        ]);*/
        /*
        Admisbacc::create([
            'numBacc'=>'4500613',
            'firstName'=>'MAHAVIARISOA',
            'lastName'=> 'Sitraka Emma',
            'neVers'=> null,
            'lieuNaissance'=>'Tambohobe',
            'dateNaissance'=>'1998-10-20',
            'serieBacc'=>'C',
            'sessionBacc'=>'2018',
            'lieu'=>'Fianarantsoa',
        ]);*/
        /*
        Admiscollege::create([
            'numInscription'=>'141LR/00346',
            'firstName'=>'HERITIANA',
            'lastName'=> 'Ronaldo William',
            'neVers'=> '1999',
            'lieuNaissance'=>'Lacaisse',
            'dateNaissance'=> null,
            'session'=>'2010',
            'lieu'=>'Fianarantsoa',
        ]);*/
      /*
        Admiscrinfp::create([
            'numFormation'=>'20100-00314',
            'firstName'=>'ANDRIANANTENAINA',
            'lastName'=> 'Angelo',
            'neVers'=> null,
            'lieuNaissance'=>'Betafo',
            'dateNaissance'=> '1999-03-22',
            'anneeFormation'=>'2013',
            'centreFormation'=>'Ihosy',
        ]);*/
        /*
        Admislangue::create([
            'numCandidat'=>'20200-00337',
            'firstName'=>'MAHATODY',
            'lastName'=> 'Tomy Kevin',
            'neVers'=> null,
            'lieuNaissance'=>'Antsolaitra',
            'dateNaissance'=> '1999-05-22',
            'anneeExam'=>'2015',
            'centreExam'=>'Fianarantsoa',
        ]);*/
        
        $listAdmis = DB::table('admis')->get();
        return view('promotion', compact('listAdmis'));
    }

    public function verifPromotion(Request $request){
        $param= $request ->all();
        //var_dump($person);
        $person= Demande::where('slug','=',$param['slug'])->first();

       
        $firstName=$person['firstName'];
        $lastName=$person['lastName'];
        $dateNaissance=$person['dateNaissance'];
        $neVers=$person['neVers'];
        $lieuNaissance=$person['lieuNaissance'];
        $niveau=$person['niveau'];

        $anneeUniv=$person['anneeUniv'];
        $universite=$person['universite'];
        $mention=$person['mention'];
        $parcours=$person['parcours'];
        $matricule=$person['matricule'];

        $numBacc=$person['numBacc'];
        $sessionBacc=$person['sessionBacc'];
        $serieBacc=$person['serieBacc'];
        $mentionBacc=$person['mentionBacc'];
        $lieu=$person['centreBacc'];

        $numInscription=$person['numInscription'];
        $session=$person['session'];
        $centre=$person['centre'];

        $numFormation=$person['numFormation'];
        $anneeFormation=$person['anneeFormation'];
        $centreFormation=$person['centreFormation'];

        $numCandidat=$person['numCandidat'];
        $anneeExam=$person['anneeExam'];
        $centreExam=$person['centreExam'];
        
        $slug=$person['slug'];
        if($niveau === 'Licence 3' || $niveau === 'Licence 2' || $niveau === 'Master 2' || $niveau === 'Master 1'){
            $valid=DB::table('admis')
            ->where('anneeUniv', '=', $anneeUniv)
            ->where('universite', '=', $universite)
            ->where('niveau', '=', $niveau)
            ->where('matricule', '=', $matricule)
            ->get();

            return view('promotionValid', compact('valid','slug','anneeUniv',
            'matricule','niveau','parcours','universite','mention','lieuNaissance',
            'neVers','dateNaissance','lastName','firstName'));
        } elseif ($niveau === 'BACC'){
            $valid=DB::table('admisbaccs')
            ->where('sessionBacc', '=', $sessionBacc)
            ->where('numBacc', '=', $numBacc)
            ->get();
            return view('promotionValidBacc', compact('valid','slug','niveau','lieuNaissance',
            'neVers','dateNaissance','lastName','firstName', 'sessionBacc', 'numBacc',
            'serieBacc','mentionBacc','lieu'   ));
      
        }elseif ($niveau === 'BEPC' || $niveau === 'CEPE'){
            $valid=DB::table('admiscolleges')
            ->where('session', '=', $session)
            ->where('numInscription', '=', $numInscription)
            ->get();
            return view('promotionValidCollege', compact('valid','slug','niveau','lieuNaissance',
            'neVers','dateNaissance','lastName','firstName', 'session', 'numInscription'
             ));
      
        }elseif ($niveau === 'CRINFP' || $niveau === 'CAP' || $niveau === 'CAE'){
            $valid=DB::table('admiscrinfps')
            ->where('anneeFormation', '=', $anneeFormation)
            ->where('numFormation', '=', $numFormation)
            ->get();
            return view('promotionValidFormation', compact('valid','slug','niveau','lieuNaissance',
            'neVers','dateNaissance','lastName','firstName', 'anneeFormation', 'numFormation'
             ));
      
        }elseif ($niveau === 'ITP' || $niveau === 'DELF B1' || $niveau === 'DELF B2' || $niveau === 'DALF C1' || $niveau === 'DALF C2'){
            $valid=DB::table('admislangues')
            ->where('anneeExam', '=', $anneeExam)
            ->where('numCandidat', '=', $numCandidat)
            ->get();
            return view('promotionValidLangue', compact('valid','slug','niveau','lieuNaissance',
            'neVers','dateNaissance','lastName','firstName', 'anneeExam', 'numCandidat'
             ));
      
        }
        else{
            echo "nothing";
        }
   
    }
    
    public function terminer(Request $request){
        $param= $request ->all();
        //var_dump($param);
        $person= Demande::where('slug','=',$param['slug'])->first();

        $listTerminer= new Terminers();
          $listTerminer->firstName = $person['firstName'];
          $listTerminer->lastName= $person['lastName'];
          $listTerminer->dateNaissance= $person['dateNaissance'];
          $listTerminer->neVers= $person['neVers'];
          $listTerminer->lieuNaissance= $person['lieuNaissance'];
          $listTerminer->cni= $person['cni'];
          $listTerminer->dateDelivrance= $person['dateDelivrance'];
          $listTerminer->lieuDelivrance= $person['lieuDelivrance'];
          $listTerminer->photocopieCni= $person['photocopieCni'];
          $listTerminer->numPhone= $person['numPhone'];
          $listTerminer->adresse= $person['adresse'];
          $listTerminer->titreOriginal= $person['titreOriginal']; 
          $listTerminer->niveau=$person['niveau'];
            
            $listTerminer->anneeUniv=$person['anneeUniv'];
            $listTerminer->universite=$person['universite'];
            $listTerminer->mention=$person['mention'];
            $listTerminer->parcours=$person['parcours'];
            $listTerminer->matricule=$person['matricule'];

            $listTerminer->numBacc=$person['numBacc'];
            $listTerminer->sessionBacc=$person['sessionBacc'];
            $listTerminer->serieBacc=$person['serieBacc'];
            $listTerminer->mentionBacc=$person['mentionBacc'];
            $listTerminer->centreBacc=$person['centreBacc'];

            $listTerminer->numInscription=$person['numInscription'];
            $listTerminer->session=$person['session'];
            $listTerminer->centre=$person['centre'];

            $listTerminer->numFormation=$person['numFormation'];
            $listTerminer->anneeFormation=$person['anneeFormation'];
            $listTerminer->centreFormation=$person['centreFormation'];
            $listTerminer->diplomeAssorti= $person['diplomeAssorti'];

            $listTerminer->numCandidat=$person['numCandidat'];
            $listTerminer->anneeExam=$person['anneeExam'];
            $listTerminer->centreExam=$person['centreExam'];

            $listTerminer->motif= $person['motif'];
            $listTerminer->slug= $person['slug'];

            $listTerminer->save();

          return view('confirmTerminer', compact('listTerminer'));
    }
    
    public function envoiTerminer($slug){

        //$deleted = DB::table('demandes')->where('slug', '=', $slug)->delete();
        return redirect()->route('home')->with('status', 'La demande a été traité');
    }
}

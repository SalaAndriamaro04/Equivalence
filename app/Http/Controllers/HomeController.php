<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Demande;
use App\Models\Errors;
use App\Models\Terminers;
//use pour la création utilisateur et utilisation de Hash
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //
    public function listDemande(){
        /*
        User::create([
            'name'=>'SALA',
            'email'=>'test@test.mg',
            'password'=>Hash::make('1234')
        ]);*/
        //dd(Auth::user());
        $listDemande = DB::table('demandes')->get();
        $nbTerminer= Terminers::count();
        $nbDemandes= Demande::count();
        $nbErreurs = Errors::count();
        return view('home', compact('listDemande','nbDemandes','nbErreurs','nbTerminer'));
    }

    public function voirDemande($slug){
        $params= Demande::where('slug','=',$slug)->first();
        return view('voirDemande', compact('params'));
    }

    public function listErreur(){
        $listErreurs = DB::table('errors')->get();
        $nbTerminer= Terminers::count();
        $nbDemandes= Demande::count();
        $nbErreurs = Errors::count();
        return view('erreur', compact('listErreurs','nbErreurs','nbDemandes','nbTerminer'));
    }

    public function voirErreur($slug){
        $params= Errors::where('slug','=',$slug)->first();
        return view('voirErreur', compact('params'));
    }

    public function envoiErreur(Request $request){
        $params= $request ->all();
        //var_dump($param);
        $param= Demande::where('slug','=',$params['slug'])->first();

        $listErreurs= new Errors();
          $listErreurs->firstName = $param['firstName'];
          $listErreurs->lastName= $param['lastName'];
          $listErreurs->dateNaissance= $param['dateNaissance'];
          $listErreurs->neVers= $param['neVers'];
          $listErreurs->lieuNaissance= $param['lieuNaissance'];
          $listErreurs->adresse= $param['adresse'];
          $listErreurs->numPhone= $param['numPhone'];
          $listErreurs->cni= $param['cni'];
          $listErreurs->dateDelivrance= $param['dateDelivrance'];
          $listErreurs->lieuDelivrance= $param['lieuDelivrance'];
          $listErreurs->motif= $param['motif'];
          $listErreurs->photocopieCni=$param['photocopieCni'];
          $listErreurs->titreOriginal=$param['titreOriginal'];
          $listErreurs->slug=$param['slug'];

          if ($param['niveau'] === 'Licence 2' || $param['niveau'] === 'Licence 3' || $param['niveau'] === 'Master 1' || $param['niveau'] === 'Master 2') {
            $listErreurs->universite= $param['universite'];
            $listErreurs->mention= $param['mention'];
            $listErreurs->parcours= $param['parcours'];
            $listErreurs->matricule= $param['matricule'];
            $listErreurs->anneeUniv= $param['anneeUniv'];
          } else
          if ($param['niveau'] === 'BACC') {
            $listErreurs->numBacc= $param['numBacc'];
            $listErreurs->sessionBacc= $param['sessionBacc'];
            $listErreurs->serieBacc= $param['serieBacc'];
            $listErreurs->mentionBacc= $param['mentionBacc'];
            $listErreurs->centreBacc= $param['centreBacc'];
          } else
          if ($param['niveau'] === 'BEPC' || $param['niveau'] === 'CEPE') {
            $listErreurs->numInscription= $param['numInscription'];
            $listErreurs->session= $param['session'];
            $listErreurs->centre= $param['centre'];
          } else
          if ($param['niveau'] === 'ITP' || $param['niveau'] === 'DELF B1' || $param['niveau'] === 'DELF B2' || $param['niveau'] === 'DALF C1' || $param['niveau'] === 'DALF C2') {
            $listErreurs->numCandidat= $param['numCandidat'];
            $listErreurs->centreExam= $param['centreExam'];
            $listErreurs->anneeExam= $param['anneeExam'];
          } else
          if ($param['niveau'] === 'CRINFP' || $param['niveau'] === 'CAP' || $param['niveau'] === 'CAE') {
            $listErreurs->numFormation= $param['numFormation'];
            $listErreurs->anneeFormation= $param['anneeFormation'];
            $listErreurs->centreFormation= $param['centreFormation'];
            $listErreurs->diplomeAssorti=$param['diplomeAssorti'];
          }

          $listErreurs->niveau= $param['niveau'];
          
          $listErreurs->save();

          return view('confirmErreur', compact('listErreurs'));
    }
    public function deleteDemande(Request $request, $slug){
        //$params= Demande::where('slug','=',$slug);
       
        $param= $request ->only('motifErreur');

        $errors= Errors::where('slug','=',$slug)->first();
        $errors->motifErreur=$param['motifErreur'];
        $errors->save();

        $deleted = DB::table('demandes')->where('slug', '=', $slug)->delete();

        return redirect()->route('home')->with('status', 'La demande a été envoyé dans la liste des erreurs');
    }

    public function listTerminer(){
        $listTerminer = DB::table('terminers')->get();
        $nbTerminer= Terminers::count();
        $nbDemandes= Demande::count();
        $nbErreurs = Errors::count();
        return view('terminer', compact('listTerminer','nbErreurs','nbDemandes','nbTerminer'));
    }

    public function voirTerminer($slug){
        $params= Terminers::where('slug','=',$slug)->first();
        return view('voirTerminer', compact('params'));
    }

}

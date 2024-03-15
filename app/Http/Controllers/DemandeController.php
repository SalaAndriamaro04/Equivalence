<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Demande;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class DemandeController extends Controller
{
    //
    public function create(){
        return view('demande');
    }
    
    public function envoiDemande (Request $request){
         $param= $request ->all();
         //var_dump($request);
          
          $request ->validate([
              'firstName' => 'required_without:lastName',
              'lastName' => '',
              'dateNaissance'=> 'required_without:neVers',
              'neVers'=> 'required_without:dateNaissance',
              'lieuNaissance' => 'required',
              'adresse' => 'required',
              'numPhone' => 'required|digits:10',
              'cni' => 'required|digits:12',
              'dateDelivrance' => 'required',
              'lieuDelivrance' => 'required',
              'photocopieCni' => 'required',
              'niveau' => 'required',
              'titreOriginal' => 'required',
              'motif' => 'required',
              
              'universite' => 'required_if:niveau,Licence 2,Licence 3,Master 1,Master 2',
              'mention' => 'required_if:niveau,Licence 2,Licence 3,Master 1,Master 2',
              'parcours' => 'required_if:niveau,Licence 2,Licence 3,Master 1,Master 2',
              'matricule' => 'required_if:niveau,Licence 2,Licence 3,Master 1,Master 2',
              'anneeUniv' => 'required_if:niveau,Licence 2,Licence 3,Master 1,Master 2',
              
              'numBacc' => 'required_if:niveau,BACC',
              'sessionBacc' => 'required_if:niveau,BACC',
              'serieBacc' => 'required_if:niveau,BACC',
              'mentionBacc' => 'required_if:niveau,BACC',
              'centreBacc' => 'required_if:niveau,BACC',
              
              'numInscription' => 'required_if:niveau,BEPC,CEPE',
              'session' => 'required_if:niveau,BEPC,CEPE',
              'centre' => 'required_if:niveau,BEPC,CEPE',
              
              'numCandidat' => 'required_if:niveau,DELF B1,DELF B2,DALF C1,DALF C2,ITP',
              'centreExam' => 'required_if:niveau,DELF B1,DELF B2,DALF C1,DALF C2,ITP',
              'anneeExam' => 'required_if:niveau,DELF B1,DELF B2,DALF C1,DALF C2,ITP',
              
              'numFormation' => 'required_if:niveau,CRINFP,CAP,CAE',
              'anneeFormation' => 'required_if:niveau,CRINFP,CAP,CAE',
              'centreFormation' => 'required_if:niveau,CRINFP,CAP,CAE',
              'diplomeAssorti' => 'required_if:niveau,CRINFP,CAP,CAE',
          ],[
            'firstName.required_without' => 'Entrer votre nom',
            'dateNaissance.required_without' => 'La date de naissance est obligatoire',
            'neVers.required_without' => 'Né vers quelle année',
            'lieuNaissance.required' => 'Le lieu de Naissance est obligatoire',
            'adresse.required' => 'L\'adresse est obligatoire',
            'numPhone.required' => 'Le numéro téléphone est obligatoire',
            'numPhone.digits' => 'Le numéro téléphone est de 10 chiffres',
            'cni.required' => 'Le numéro CNI est obligatoire',
            'cni.digits' => 'CNI est de 12 chiffres',
            'dateDelivrance.required' => 'La Date de délivrance est obligatoire',
            'lieuDelivrance.required' => 'La lieu de délivrance est obligatoire',
            'photocopieCni.required' => 'Insérer le fichier image de votre photocopie CNI',
            'niveau.required' => 'Choisir le niveau',
            'titreOriginal.required' => 'Insérer le fichier image de votre Diplome Original',
            'motif.required' => 'Entrer le motif de demande',

            'universite.required_if' => 'Choisir l\'Université',
            'mention.required_if' => 'Choisir la mention',
            'parcours.required_if' => 'Choisir le parcours',
            'matricule.required_if' => 'Le numéro matricule est obligatoire',
            'anneeUniv.required_if' => 'L\'année est obligatoire',

            'numBacc.required_if' => 'Obligatoire',
            'sessionBacc.required_if' => 'Obligatoire',
            'serieBacc.required_if' => 'Obligatoire',
            'mentionBacc.required_if' => 'Obligatoire',
            'centreBacc.required_if' => 'Obligatoire',
            
            'numInscription.required_if' => 'Obligatoire',
            'session.required_if' => 'Obligatoire',
            'centre.required_if' => 'Obligatoire',
            
            'numCandidat.required_if' => 'Obligatoire',
            'centreExam.required_if' => 'Obligatoire',
            'anneeExam.required_if' => 'Obligatoire',
            
            'numFormation.required_if' => 'Obligatoire',
            'anneeFormation.required_if' => 'Obligatoire',
            'centreFormation.required_if' => 'Obligatoire',
            'diplomeAssorti.required_if' => 'Insérer le fichier image de votre Diplôme Assorti',

          ]);
          
          $date= new \DateTime(null);

          $demande= new Demande();
          $demande->firstName = $param['firstName'];
          $demande->lastName= $param['lastName'];
          $demande->dateNaissance= $param['dateNaissance'];
          $demande->neVers= $param['neVers'];
          $demande->lieuNaissance= $param['lieuNaissance'];
          $demande->adresse= $param['adresse'];
          $demande->numPhone= $param['numPhone'];
          $demande->cni= $param['cni'];
          $demande->dateDelivrance= $param['dateDelivrance'];
          $demande->lieuDelivrance= $param['lieuDelivrance'];
          $demande->niveau= $param['niveau'];
          $demande->motif= $param['motif'];
          $demande->slug= Str::slug($param['firstName'].$date->format('dmYhis'));
          if ($request->niveau === 'Licence 2' || $request->niveau === 'Licence 3' || $request->niveau === 'Master 1' || $request->niveau === 'Master 2') {
            $demande->universite= $param['universite'];
            $demande->mention= $param['mention'];
            $demande->parcours= $param['parcours'];
            $demande->matricule= $param['matricule'];
            $demande->anneeUniv= $param['anneeUniv'];
          } else
          if ($request->niveau === 'BACC') {
            $demande->numBacc= $param['numBacc'];
            $demande->sessionBacc= $param['sessionBacc'];
            $demande->serieBacc= $param['serieBacc'];
            $demande->mentionBacc= $param['mentionBacc'];
            $demande->centreBacc= $param['centreBacc'];
          } else
          if ($request->niveau === 'BEPC' || $request->niveau === 'CEPE') {
            $demande->numInscription= $param['numInscription'];
            $demande->session= $param['session'];
            $demande->centre= $param['centre'];
          } else
          if ($request->niveau === 'ITP' || $request->niveau === 'DELF B1' || $request->niveau === 'DELF B2' || $request->niveau === 'DALF C1' || $request->niveau === 'DALF C2') {
            $demande->numCandidat= $param['numCandidat'];
            $demande->centreExam= $param['centreExam'];
            $demande->anneeExam= $param['anneeExam'];
          } else
          if ($request->niveau === 'CRINFP' || $request->niveau === 'CAP' || $request->niveau === 'CAE') {
            $demande->numFormation= $param['numFormation'];
            $demande->anneeFormation= $param['anneeFormation'];
            $demande->centreFormation= $param['centreFormation'];

            $diplomeAssorti= $request->file('diplomeAssorti')->store('diplomeAssorti');
            $demande->diplomeAssorti=$diplomeAssorti;
          }

          //récupération lien de l'image, et stockage dans le dossier storage/app/public
          
          $photocopieCni= $request->file('photocopieCni')->store('photocopieCni');
          $demande->photocopieCni=$photocopieCni;

          $titreOriginal= $request->file('titreOriginal')->store('titreOriginal');
          $demande->titreOriginal=$titreOriginal;
          
          $demande->save();
          
          return redirect('/')->with('status', 'formulaire envoyée');
      }
      
}

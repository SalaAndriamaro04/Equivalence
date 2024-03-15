<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Terminers;
//use for html to pdf
use Elibyy\TCPDF\Facades\TCPDF;
use Illuminate\Support\Facades\Response;

require_once '../vendor/dompdf/autoload.inc.php';
use Dompdf\Dompdf;
use Dompdf\Options;

class PDFController extends Controller
{
    //
    /*
    public function index(){
        $filename= 'demo.pdf';

        $data= [
            'title' => 'Generator pdf file',
        ];

        $html = view()->make('pdfEquivalence',$data)->render();

        $pdf= new TCPDF;

        $pdf::SetTitle('Hello Word');
        $pdf::AddPage();
        $pdf::WriteHTML($html,true,false,true,false,"");
        $pdf::Output(public_path($filename),"F");

        return response()->download(public_path($filename));
        
    }*/
    

    public function index(){
        /*
        $filename= 'demo.pdf';

        $data= [
            'title' => 'Generator pdf file',
        ];

        $html = view()->make('cntemad', $data)->render();

        $pdf = new TCPDF;

        $pdf::SetTitle('Hello Word');
        $pdf::AddPage();
        $pdf::WriteHTML($html,true,false,true,false,"");

        // Générer le PDF dans un répertoire temporaire
        $filePath = storage_path('app/public' . $filename);
        $pdf::Output($filePath, "F");

        // Envoyer le PDF au navigateur avec l'en-tête Content-Disposition pour l'ouvrir directement
        return response()->file($filePath, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="' . $filename . '"'
        ]);*/
        
        // Configuration de Dompdf
        $options = new Options();
        $options->set('isHtml5ParserEnabled', true);

        // Création d'une nouvelle instance de Dompdf
        $dompdf = new Dompdf($options);

        // Récupération du contenu HTML à partir de la vue
        $html = view()->make('cntemad')->render();

        // Chargement du contenu HTML dans Dompdf
        $dompdf->loadHtml($html);

        // Rendu du PDF
        $dompdf->render();

        // Nom du fichier PDF
        //$filename = $slug . '.pdf';

        // Envoi du PDF au navigateur ou sauvegarde du fichier
        return $dompdf->stream('filename.pdf');

    }


    public function affichePrint($slug){
        $params= Terminers::where('slug','=',$slug)->first();
        if($params->universite === 'CNTEMAD'){
            return view('cntemad',compact('params'));
        } else if($params->universite === 'Ecole Nationale d\'Informatique'){
            return view('eni',compact('params'));
        } else if($params->universite === 'Ecole de Management et de l\'Innovation Technologique'){
            return view('emit',compact('params'));
        } else {
            return view('ift',compact('params'));
        }
        
    }
}

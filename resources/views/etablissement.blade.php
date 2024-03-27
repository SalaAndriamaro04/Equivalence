<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Equivalence</title>
    
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../resources/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../resources/dist/css/adminlte.min.css">
  <!-- Pdf Css -->
  <link rel="stylesheet" href="../resources/dist/css/pdf.css">
<style>
    .container{
    margin-left: 0px;
}
    .wrapper{
    margin-left: 150px;
    margin-right: 180px;
    
}
    .tablePadding{
    padding-top: 20px;
    padding-bottom: 20px;
    padding-left: 80px;
    padding-right: 80px;
}
</style>
</head>
<body>
<div class="container">
    <div>
        <img src="../resources/img/repoblika.jpg" alt="repoblika">
      
    </div> 

    
        <div class="row d-flex justify-content-center align-items-center">
            <div style="font-size: 12px">
                <b> MINISTERE DE LA FONCTION PUBLIQUE,
                  DE LA REFORME DE L'ADMINISTRATION, 
                  <br>DU TRAVAIL ET DES LOIS SOCIALES
                 <br> ----------------------------------------------------------   <br>
                 <b> DECRET N°79-363 du 22 Décembre 1979</b> 
                portant classement hiérarchique 
                <br>des corps de fonctionnaires
                </b>
            </div>
            <div style="font-size: 12px">
                 </div>
        </div>
        <div class="titre">
            <br> ----------------------------------------------------------   <br>
            <span style="font-size: 12px"> <b> CLASSEMENT DES CORPS DE FONCTIONNAIRES</b></span>
            <br> ----------------------------------------------------------   <br>
        </div>
    </div>
    
    <div>
        <table border="1" cellpadding="8" style="font-size:12px;font-weight:bold;text-align: center; margin-left:100px; margin-top:4px; margin-bottom:4px">
            <tr>
                <th >Catégorie</th>
                <th >Niveau de référence</th>
                <th >Diplôme Equivalents</th>
                <th >Corps des fonctionnaires</th>
                <th >Indices</th>
            </tr>
            
            
            <tr >
                <td align="left" class="tablePadding">
                    <p style="text-align:center"> I</p>
                   
                </td>
                <td class="tablePadding">
                    -
                    @if($params->niveau === 'CEPE')
                    CEPE
                    @elseif($params->niveau === 'BEPC')
                    BEPC
                    @elseif($params->niveau === 'BACC')
                    BACC
                    @endif
                    -
                </td>
                <td class="tablePadding">
                    @if($params->niveau === 'CEPE')
                    I, sans bonification
                    @elseif($params->niveau === 'BEPC')
                    II, sans bonification
                    @elseif($params->niveau === 'BACC')
                    III, sans bonification
                    @endif
                </td>
                <td class="tablePadding">
                    -
                </td>
                <td class="tablePadding">
                    .... 
                </td>
            </tr>
        </table>
    </div>
    
    <div class="wrapper">
    
    <span><b> ----------------------------------------------------------------------------------- 
        -----------------------------------
    </b></span> 
    </div>
    </div>

    <div class="container">
    <div class="row1">
        <div class="col1" style="font-size: 12px">
            <b> MINISTERE DU TRAVAIL, DE L'EMPLOI 
                <br> ET DE LA FONCTION PUBLIQUE
                <br>-----------------
                <br>SECRETARIAT GENERAL
                <br>-----------------
                <br>DIRECTION GENERALE 
                <br> DE LA FONCTION PUBLIQUE
                <br>-----------------
                <br>DIRECTION DE LA FORMATION 
                <br> ET DU PERFECTIONNEMENT 
                <br> DES AGENTS DE L'ETAT
                <br>-----------------
                
        
        </div>
        <div class="col2">
            <br>
            <p style="font-size: 12px"><b> Antananarivo, le</b></p>
        </div>
        
    </div>
    </div>
    <div class="wrapper" style="font-size: 12px">
        N°{{$params->slug}} /{{\Carbon\Carbon::parse($params->created_at)->format('Y')}}-MTEFOP/SG/DGFOP/DFPAE
                <br>Délivré à M/Mr: {{$params->firstName}} {{$params->lastName}}
                <br>
                Titulaire du: DIPLOME DE {{$params->niveau}}
                <div>
                    www.dgfop.gov.mg
                </div>
    </div>
    

</body>
</html>
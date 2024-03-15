<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Equivalence Diplome </title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../resources/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../resources/dist/css/adminlte.min.css">
</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
      <a href="#" class="navbar-brand">
        <img src="../resources/img/logo_mtefop.jpg" alt="logo_mtefop" class="brand-image img-circle elevation-3" style="opacity: .8">
      </a>
      <a href="{{route('create')}}">
        Demande
      </a>
      <a href="{{route('login')}}">
        Administrateur
      </a>

  </nav>
  <!-- /.navbar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">  </h1>
          </div><!-- /.col -->
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container">
      

<h2 class="text-center">FORMULAIRE DE DEMANDE D'EQUIVALENCE</h2>

@if(Session('status'))
  <div class="alert alert-success"> {{ Session('status')}}</div>
@endif 


<form method="POST" action="{{ route('envoiDemande') }}" enctype="multipart/form-data">
<div class="card-body">
  @csrf
  
  <label> Nom </label>
  <div class="form-group">
  <input type="text" name="firstName" class="form-control" id="firstName" placeholder="Nom" value="{{old('firstName')}}">
  @if($errors->has('firstName'))
          <p class="text-danger">{{ $errors->first('firstName') }}</p>
        @endif
  </div> 

  <label> Prénom </label>
  <div class="form-group">
  <input type="text" name="lastName" class="form-control" id="lastName" placeholder="Prénom" value="{{old('lastName')}}">
  </div>

  <div class="row">
    <div class="col-sm">
    <label> Date de Naissance </label>
      <div class="form-group">
        <input type="date" name="dateNaissance" class="form-control" id="dateNaissance" value="{{old('dateNaissance')}}">
        @if($errors->has('dateNaissance'))
        <p class="text-danger">{{ $errors->first('dateNaissance') }}</p>
       @endif
      </div>
      </div> 
    <div class="col-sm">

  <label> Lieu de Naissance </label>
  <div class="form-group">
  <input type="text" name="lieuNaissance" class="form-control" id="lieuNaissance" placeholder="Lieu" value="{{old('lieuNaissance')}}">
  @if($errors->has('lieuNaissance'))
      <p class="text-danger">{{ $errors->first('lieuNaissance') }}</p>
  @endif
  </div>
    </div> 
    
   </div> 

   <div  class="m-2">
   <input type="checkbox" id="neVers"><span> Né vers</span>
   <div class="row">
    <div id="inputYear" class="col-sm">
      <input type="hidden" name="neVers" value="">
    </div>
    <div class="col-sm">
      
    </div>
    <div class="col-sm">
    </div>
   </div>
    
  </div>

  <div>
  <label> Adresse </label>
  <div class="form-group">
  <input type="text" name="adresse" class="form-control" id="adresse" placeholder="Adresse" value="{{old('adresse')}}">
  @if($errors->has('adresse'))
      <p class="text-danger">{{ $errors->first('adresse') }}</p>
  @endif
  </div>
</div>
  <div class="row">
    <div class="col-sm">
      <label> Numéro Téléphone (*)</label>
      <div class="form-group">
      <input type="number" name="numPhone" class="form-control" id="numPhone" onkeypress="return limiterLongueur(this, 10);" placeholder="Numéro" value="{{old('numPhone')}}"> (Ex: 034xxxxxxx ou 032xxxxxxx ou 033xxxxxxx)
      @if($errors->has('numPhone'))
          <p class="text-danger">{{ $errors->first('numPhone') }}</p>
      @endif
      </div>
    </div>
    <div class="col-sm">
    </div>
  </div>

  <div class="row">
    <div class="col-sm">
      <label> Carte National Identité (*)</label>
      <div class="form-group">
      <input type="number" name="cni" class="form-control" onkeypress="return limiterLongueur(this, 12);" id="inputSuccess" placeholder="N°CNI" value="{{old('cni')}}">
      @if($errors->has('cni'))
          <p class="text-danger">{{ $errors->first('cni') }}</p>
      @endif
    </div>
     
    </label>
    </div>  
    <div class="col-sm">
      <label> Date de délivrance (*)</label>
      <div class="form-group">
        <input type="date" name="dateDelivrance" class="form-control" id="dateDelivrance" value="{{old('dateDelivrance')}}">
        @if($errors->has('dateDelivrance'))
          <p class="text-danger">{{ $errors->first('dateDelivrance') }}</p>
        @endif
      </div>
    </div> 
  </div>  
  <div class="row">
    <div class="col-sm">
      <label> Lieu de délivrance (*)</label>
      <div class="form-group">
      <input type="text" name="lieuDelivrance" class="form-control" id="lieuDelivrance" placeholder="Lieu" value="{{old('lieuDelivrance')}}">
      @if($errors->has('lieuDelivrance'))
          <p class="text-danger">{{ $errors->first('lieuDelivrance') }}</p>
        @endif
      </div>
    </div>
    <div class="col-sm">
    </div>
  </div>

  <div class="row">
    <div class="col-sm">
    <label> Photocopie CNI</label> <br>
    <input type="file" name="photocopieCni" id="photo">
    <div class="mt-2 mb-3">
      (format: jpeg, png, jpg)
      </div>
    @if($errors->has('photocopieCni'))
      <p class="text-danger">{{ $errors->first('photocopieCni') }}</p>
    @endif
    
    </div>
    <div class="col-sm">
    </div> 

   </div>  

  <div class="row">
   <div class="col-sm">
    <label> Equivalence de niveau (*)</label>
    <div class="form-group">
    <select name="niveau" id="mySelect" class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true">
      <option selected="selected" value="" disabled>-- Niveau --</option>
      <option id="1" value="CEPE" @if(old('niveau') == 'CEPE') selected @endif>CEPE</option>
      <option id="2" value="BEPC" @if(old('niveau') == 'BEPC') selected @endif>BEPC</option>
      <option id="3" value="BACC" @if(old('niveau') == 'BACC') selected @endif>BACC</option>
      <option id="4" value="Licence 2" @if(old('niveau') == 'Licence 2') selected @endif>Licence 2</option>
      <option id="5" value="Licence 3" @if(old('niveau') == 'Licence 3') selected @endif>Licence 3</option>
      <option id="6" value="Master 1" @if(old('niveau') == 'Master 1') selected @endif>Master 1</option>
      <option id="7" value="Master 2" @if(old('niveau') == 'Master 2') selected @endif>Master 2</option>
      <option id="8" value="DELF B1" @if(old('niveau') == 'DELF B1') selected @endif>DELF B1</option>
      <option id="9" value="DELF B2" @if(old('niveau') == 'DELF B2') selected @endif>DELF B2</option>
      <option id="10" value="DALF C1" @if(old('niveau') == 'DALF C1') selected @endif>DALF C1</option>
      <option id="11" value="DALF C2" @if(old('niveau') == 'DALF C2') selected @endif>DALF C2</option>
      <option id="12" value="CRINFP" @if(old('niveau') == 'CRINFP') selected @endif>CRINFP</option>
      <option id="13" value="ITP" @if(old('niveau') == 'ITP') selected @endif>ITP</option>
      <option id="14" value="CAP" @if(old('niveau') == 'CAP') selected @endif>CAP</option>
      <option id="15" value="CAE" @if(old('niveau') == 'CAE') selected @endif>CAE</option>
    </select>
      @if($errors->has('niveau'))
        <p class="text-danger">{{ $errors->first('niveau') }}</p>
      @endif
    </div>
  </div>
  <div class="col-sm">
  </div>
  </div>
  <!-- §§§§§-->
<!-- Pour les L2 L3 M1 M2-->
  <div id="universitaire" display="none">
    <div class="row" >
      <div class="col-sm">
        <label> Université (*)</label>
        <div class="form-group">
        <select name="universite" class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true">
          <option selected="selected" value="" disabled>-- Université --</option>
          <option data-select2-id="1" value="Ecole de Management et de l'Innovation Technologique" @if(old('universite') == 'Ecole de Management et de l\'Innovation Technologique') selected @endif>Ecole de Management et de l'Innovation Technologique</option>
          <option data-select2-id="2" value="Ecole Nationale d'Informatique" @if(old('universite') == 'Ecole Nationale d\'Informatique') selected @endif>Ecole Nationale d'Informatique</option>
          <option data-select2-id="3" value="Institut de Formation Technique" @if(old('universite') == 'Institut de Formation Technique') selected @endif>Institut de Formation Technique</option>
          <option data-select2-id="4" value="CNTEMAD" @if(old('universite') == 'CNTEMAD') selected @endif>CNTEMAD</option>
        </select>  
        @if($errors->has('universite'))
            <p class="text-danger">{{ $errors->first('universite') }}</p>
          @endif
        </div>
      </div>
      <div class="col-sm">
        <label> Mention (*)</label>
        <div class="form-group">
        <select name="mention" class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true">
          <option selected="selected" value="" disabled>-- Mention --</option>
          <option data-select2-id="1" value="Sciences et Technologie" @if(old('mention') == 'Sciences et Technologie') selected @endif>Sciences et Technologie</option>
          <option data-select2-id="2" value="Sciences de l'ingénieur" @if(old('mention') == 'Sciences de l\'ingénieur') selected @endif>Sciences de l'ingénieur</option>
          <option data-select2-id="3" value="Sciences de la société" @if(old('mention') == 'Sciences de la société') selected @endif>Sciences de la société</option>
        </select>
          @if($errors->has('mention'))
            <p class="text-danger">{{ $errors->first('mention') }}</p>
          @endif
        </div>
      </div>
    </div> 
    <div class="row">
      <div class="col-sm">
        <label> Parcours (*)</label>
        <div class="form-group">
        <select name="parcours" class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true">
          <option selected="selected" value="" disabled>-- Parcours --</option>
          <option data-select2-id="1" value="Informatique Général" @if(old('parcours') == 'Informatique Général') selected @endif>Informatique Général</option>
          <option data-select2-id="2" value="Systèmes et Réseaux" @if(old('parcours') == 'Systèmes et Réseaux') selected @endif>Systèmes et Réseaux</option>
          <option data-select2-id="3" value="Gestion Base de Donnée" @if(old('parcours') == 'Gestion Base de Donnée') selected @endif>Gestion Base de Donnée</option>
          <option data-select2-id="4" value="Développement Application Informatique" @if(old('parcours') == 'Développement Application Informatique') selected @endif>Développement Application Informatique</option>
          <option data-select2-id="4" value="Administration Economique et Social" @if(old('parcours') == 'Administration Economique et Social') selected @endif>Administration Economique et Social</option>
          <option data-select2-id="4" value="Relation Publique et Multimédia" @if(old('parcours') == 'Relation Publique et Multimédia') selected @endif>Relation Publique et Multimédia</option>
        </select>
          @if($errors->has('parcours'))
            <p class="text-danger">{{ $errors->first('parcours') }}</p>
          @endif
        </div>
      </div>
      <div class="col-sm">
        <label> Matricule (*)</label>
        <div class="form-group">
          <input type="text" name="matricule" class="form-control" id="inputSuccess" placeholder="N° Matricule" value="{{old('matricule')}}">
          @if($errors->has('matricule'))
            <p class="text-danger">{{ $errors->first('matricule') }}</p>
          @endif
        </div>
      </div>
    </div> 
    <div class="row">
      <div class="col-sm">
        <label> Année (*)</label>
      <div class="form-group">
      <input type="number" name="anneeUniv" class="form-control" id="anneeUniv" onkeypress="return limiterLongueur(this, 4);" placeholder="Année" value="{{old('anneeUniv')}}">
      @if($errors->has('anneeUniv'))
          <p class="text-danger">{{ $errors->first('anneeUniv') }}</p>
        @endif
      </div>
      </div>
      <div class="col-sm">
      </div>
    </div>

  </div> 
<!-- //-->

<!-- §§§§§-->
<!-- Pour les baccalauréat-->
<div id="lycee" display="none">
  <div class="row">
    
    <div class="col-sm">
      <label> Numéro d'inscription (*)</label>
      <div class="form-group">
      <input type="text" placeholder="N° Inscription" name="numBacc" class="form-control" id="" value="{{old('numBacc')}}">
      @if($errors->has('numBacc'))
            <p class="text-danger">{{ $errors->first('numBacc') }}</p>
          @endif
      </div>
    </div>
    
    <div class="col-sm">
      <label> Session (*)</label>
      <div class="form-group">
      <input type="number" placeholder="Session" name="sessionBacc" onkeypress="return limiterLongueur(this, 4);" class="form-control" id="" value="{{old('sessionBacc')}}">
      @if($errors->has('sessionBacc'))
            <p class="text-danger">{{ $errors->first('sessionBacc') }}</p>
          @endif
      </div>
    </div>
  </div>
  <div class="row">
    
    <div class="col-sm">
      <label> Série (*)</label>
      <div class="form-group">
      <input type="text" placeholder="Série" name="serieBacc" class="form-control" id="" value="{{old('serieBacc')}}">
      @if($errors->has('serieBacc'))
            <p class="text-danger">{{ $errors->first('serieBacc') }}</p>
          @endif
      </div>
    </div>
    
    <div class="col-sm">
      <label> Mention (*)</label>
      <div class="form-group">
      <input type="text" placeholder="Mention" name="mentionBacc" class="form-control" id="" value="{{old('mentionBacc')}}">
      @if($errors->has('mentionBacc'))
            <p class="text-danger">{{ $errors->first('mentionBacc') }}</p>
          @endif
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-sm">
      <label> Centre d'examen (*)</label>
      <div class="form-group">
      <input type="text" placeholder="Centre" class="form-control" name="centreBacc" id="" value="{{old('centreBacc')}}">
      @if($errors->has('centreBacc'))
            <p class="text-danger">{{ $errors->first('centreBacc') }}</p>
          @endif
      </div>
    </div>
  </div>
</div>
<!-- //-->

<!-- §§§§§-->
<!-- Pour les CEG et EPP-->
<div id="CegEpp" display="none">
  <div class="row">
    
    <div class="col-sm">
      <label> Numéro d'inscription (*)</label>
      <div class="form-group">
      <input type="text" placeholder="N° Inscription" name="numInscription" class="form-control" id="" value="{{old('numInscription')}}">
      @if($errors->has('numInscription'))
            <p class="text-danger">{{ $errors->first('numInscription') }}</p>
          @endif
      </div>
    </div>
    
    <div class="col-sm">
      <label> Session (*)</label>
      <div class="form-group">
      <input type="number" placeholder="Session" name="session" onkeypress="return limiterLongueur(this, 4);" class="form-control" id="" value="{{old('session')}}">
      @if($errors->has('session'))
            <p class="text-danger">{{ $errors->first('session') }}</p>
          @endif
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-sm">
      <label> Centre d'examen (*)</label>
      <div class="form-group">
      <input type="text" placeholder="Centre" class="form-control" name="centre" id="" value="{{old('centre')}}">
      @if($errors->has('centre'))
            <p class="text-danger">{{ $errors->first('centre') }}</p>
          @endif
      </div>
    </div>
  </div>
</div>
<!-- //-->

<!-- §§§§§-->
<!-- Pour les formations en éducation-->
<div id="Educateur" display="none">
  <div class="row">
    
    <div class="col-sm">
      <label> Numéro d'inscription (*)</label>
      <div class="form-group"> 
      <input type="text" placeholder="N° Inscription" name="numFormation" class="form-control" id="" value="{{old('numFormation')}}">
      @if($errors->has('numFormation'))
            <p class="text-danger">{{ $errors->first('numFormation') }}</p>
          @endif
      </div>
    </div>
    
    <div class="col-sm">
      <label> Année (*)</label>
      <div class="form-group">
      <input type="number" placeholder="Année" name="anneeFormation" onkeypress="return limiterLongueur(this, 4);" class="form-control" id="" value="{{old('anneeFormation')}}">
      @if($errors->has('anneeFormation'))
            <p class="text-danger">{{ $errors->first('anneeFormation') }}</p>
          @endif
      </div>
    </div>
  </div>



  <div class="row">
    <div class="col-sm">
      <label> Centre de formation (*)</label>
      <div class="form-group">
      <input type="text" placeholder="Centre Formation" class="form-control" name="centreFormation" id="" value="{{old('centreFormation')}}">
      @if($errors->has('centreFormation'))
            <p class="text-danger">{{ $errors->first('centreFormation') }}</p>
          @endif
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-sm">
    <label> Diplome Assorti</label> <br>
    <input type="file" name="diplomeAssorti" id="photo">
    <div class="mt-2 mb-3">
      (format: jpeg, png, jpg)
      </div>
    @if($errors->has('diplomeAssorti'))
      <p class="text-danger">{{ $errors->first('diplomeAssorti') }}</p>
    @endif
    </div>
    <div class="col-sm">
    </div> 
   </div> 
</div>
<!-- //-->

<!-- §§§§§-->
<!-- Pour les examens de langue-->
<div id="langue" display="none">
  <div class="row">
    
    <div class="col-sm">
      <label> Numéro de candidat (*)</label>
      <div class="form-group"> 
      <input type="text" placeholder="N° Candidat" name="numCandidat" class="form-control" id="" value="{{old('numCandidat')}}">
      @if($errors->has('numCandidat'))
            <p class="text-danger">{{ $errors->first('numCandidat') }}</p>
          @endif
      </div>
    </div>
    
    <div class="col-sm">
      <label> Centre d'examen (*)</label>
      <div class="form-group">
      <input type="text" placeholder="Centre" class="form-control" name="centreExam" id="" value="{{old('centreExam')}}">
      @if($errors->has('centreExam'))
            <p class="text-danger">{{ $errors->first('centreExam') }}</p>
          @endif
      </div>
    </div>
  </div>
  <div class="row">
    
    <div class="col-sm">
      <label> Année (*)</label>
      <div class="form-group">
      <input type="number" name="anneeExam" placeholder="Année" onkeypress="return limiterLongueur(this, 4);" class="form-control" id="" value="{{old('anneeExam')}}">
      @if($errors->has('anneeExam'))
            <p class="text-danger">{{ $errors->first('anneeExam') }}</p>
          @endif
      </div>
    </div>
    
    <div class="col-sm">
      
    </div>
  </div>
</div>
<!-- //-->


  <div class="row">
    <div class="col-sm">
    <label> Titre Original(*)</label> <br>
    <input type="file" name="titreOriginal" id="photo">
    <div class="mt-2 mb-3">
      (format: jpeg, png, jpg)
      </div>
    @if($errors->has('titreOriginal'))
      <p class="text-danger">{{ $errors->first('titreOriginal') }}</p>
    @endif
    </div>
    <div class="col-sm">
    </div> 
   </div>  

   
      
   <div class="row">
    <div class="col-sm">
      <label> Motif de demande (*)</label>
      <div class="form-group">
      <input type="text" name="motif" class="form-control" id="motif" placeholder="Motif" value="{{old('motif')}}">
      
      @if($errors->has('motif'))
        <p class="text-danger">{{ $errors->first('motif') }}</p>
      @endif
      </div>
    </div>
    <div class="col-sm">
    </div>
  </div>

  <br>
  <button type="submit" class="btn btn-info">Envoyer</button>
</form>



</div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2024 <a href="#">SALA</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="../resources/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../resources/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../resources/dist/js/adminlte.min.js"></script>

<script>
    function limiterLongueur(champ, longueurMax) {
        if (champ.value.length >= longueurMax) {
          
            return false;
        }
    }
</script>

<script>
  document.addEventListener('DOMContentLoaded', function() {
      var niveauSelect = document.getElementById('mySelect');
      var universitaireDiv = document.getElementById('universitaire');
      var cegEppDiv = document.getElementById('CegEpp');
      var lyceeDiv = document.getElementById('lycee');
      var educateurDiv = document.getElementById('Educateur');
      var langueDiv = document.getElementById('langue');
      
      niveauSelect.addEventListener('change', function() {
          if (niveauSelect.value === 'Licence 3' || niveauSelect.value === 'Licence 2' || niveauSelect.value === 'Master 1' || niveauSelect.value === 'Master 2') {
              universitaireDiv.style.display = 'block';
              cegEppDiv.style.display = 'none';
              lyceeDiv.style.display = 'none';
              educateurDiv.style.display = 'none';
              langueDiv.style.display = 'none';
          } else if (niveauSelect.value === 'CEPE' || niveauSelect.value === 'BEPC') {
              universitaireDiv.style.display = 'none'; 
              cegEppDiv.style.display = 'block';
              lyceeDiv.style.display = 'none';
              educateurDiv.style.display = 'none';
              langueDiv.style.display = 'none';
          } else if (niveauSelect.value === 'BACC'){
              universitaireDiv.style.display = 'none';
              cegEppDiv.style.display = 'none';
              lyceeDiv.style.display = 'block';
              educateurDiv.style.display = 'none';
              langueDiv.style.display = 'none';
          } else if (niveauSelect.value === 'CRINFP' || niveauSelect.value === 'CAP' || niveauSelect.value === 'CAE'){
              universitaireDiv.style.display = 'none';
              cegEppDiv.style.display = 'none';
              lyceeDiv.style.display = 'none';
              educateurDiv.style.display = 'block';
              langueDiv.style.display = 'none';
          } else if(niveauSelect.value === 'ITP' || niveauSelect.value === 'DELF B1' || niveauSelect.value === 'DELF B2' || niveauSelect.value === 'DALF C1' || niveauSelect.value === 'DALF C2'){
              universitaireDiv.style.display = 'none';
              cegEppDiv.style.display = 'none';
              lyceeDiv.style.display = 'none';
              educateurDiv.style.display = 'none';
              langueDiv.style.display = 'block';
          }
          else {
              universitaireDiv.style.display = 'none';
              cegEppDiv.style.display = 'none';
              lyceeDiv.style.display = 'none';
              educateurDiv.style.display = 'none';
              langueDiv.style.display = 'none';
          }
      });
  
      // Au chargement initial de la page, vérifiez le niveau sélectionné
      if (niveauSelect.value === 'Licence 3' || niveauSelect.value === 'Licence 2' || niveauSelect.value === 'Master 1' || niveauSelect.value === 'Master 2') {
          universitaireDiv.style.display = 'block';
          cegEppDiv.style.display = 'none';
          lyceeDiv.style.display = 'none';
          educateurDiv.style.display = 'none';
          langueDiv.style.display = 'none';
      } else if (niveauSelect.value === 'CEPE' || niveauSelect.value === 'BEPC') {
          universitaireDiv.style.display = 'none';
          cegEppDiv.style.display = 'block';
          lyceeDiv.style.display = 'none';
          educateurDiv.style.display = 'none';
          langueDiv.style.display = 'none';
      } else if(niveauSelect.value === 'BACC'){
          universitaireDiv.style.display = 'none';
          cegEppDiv.style.display = 'none';
          lyceeDiv.style.display = 'block';
          educateurDiv.style.display = 'none';
          langueDiv.style.display = 'none';
      } else if (niveauSelect.value === 'CRINFP'){
          universitaireDiv.style.display = 'none';
          cegEppDiv.style.display = 'none';
          lyceeDiv.style.display = 'none';
          educateurDiv.style.display = 'block';
          langueDiv.style.display = 'none';
      } else if (niveauSelect.value === 'ITP' || niveauSelect.value === 'DELF B1' || niveauSelect.value === 'DELF B2' || niveauSelect.value === 'DALF C1' || niveauSelect.value === 'DALF C2'){
          universitaireDiv.style.display = 'none';
          cegEppDiv.style.display = 'none';
          lyceeDiv.style.display = 'none';
          educateurDiv.style.display = 'none';
          langueDiv.style.display = 'block';
      }
      else {
          universitaireDiv.style.display = 'none';
          cegEppDiv.style.display = 'none';
          lyceeDiv.style.display = 'none';
          educateurDiv.style.display = 'none';
          langueDiv.style.display = 'none';
      }
  });
</script>

<script>
  document.addEventListener('DOMContentLoaded',function(){
    const checkbox= document.getElementById('neVers');
    const inputYear= document.getElementById('inputYear');
    
    checkbox.addEventListener('change',function(){
      const input = inputYear.querySelector('input[name="neVers"]');
      if(this.checked){
        const input= document.createElement('input');
        input.type='number';
        input.name='neVers';
        input.placeholder='Vers ...';
        input.classList.add('form-control');
        input.addEventListener('input', function(event){
            if(this.value.length>4){
              this.value= this.value.slice(0,4);
            }else if(this.value.length<4){
              this.setCustomValidity('La valeur doit être exactement de 4 chiffres')
            }else{
              this.setCustomValidity('');
            }
          });
        inputYear.appendChild(input);
      }else{
        inputYear.innerHTML='';
      }
    });
  });

</script>
</body>
</html>
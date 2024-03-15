<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Equivalence Diplome </title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../../resources/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../resources/dist/css/adminlte.min.css">
  <!-- fullscreen image style -->
  <style>
    #overlay-photocopieCni,
    #overlay-diplomeOriginal,
    #overlay-diplomeCertifie{
      display:none;
      position:fixed;
      top:0;
      left:0;
      width:100%;
      height:100%;
      background-color: rgba(0,0,0,0.7);
      justify-content: center;
      align-items: center;
      z-index: 9999; /*mise en premier plan en plein écran en 10000 la valeur*/
    }

    #fullscreen-image-photocopieCni,
    #fullscreen-image-diplomeOriginal,
    #fullscreen-image-diplomeCertifie{
      display: none;
      max-width: 100%;
      max-height: 100%;
      z-index: 10000;
      overflow: auto; /* Activer le défilement si l'image est trop grande */
      overflow-y: scroll; /* Afficher une barre de défilement seulement si nécessaire */
      scrollbar-width: none; /* Masquer la barre de défilement (pour Firefox) */
      -ms-overflow-style: none; /* Masquer la barre de défilement (pour IE et Edge) */
    }
    #fullscreen-image-photocopieCni::-webkit-scrollbar,
    #fullscreen-image-diplomeOriginal::-webkit-scrollbar,
    #fullscreen-image-diplomeCertifie::-webkit-scrollbar {
      display: none; /* Masquer la barre de défilement (pour Chrome, Safari et Opera) */
    }
    .close-btn-image-photocopieCni,
    .close-btn-image-diplomeOriginal,
    .close-btn-image-diplomeCertifie{
      position: absolute;
      top:10px;
      right:20px;
      color: white;
      font-size: 24px;
      cursor: pointer;
    }
    .img{
      display: flex;
      align-items: center;
      justify-content: center;
      width:20%;
      height: 20%;
      cursor: pointer;
    }
    .img-fullscreen{
      display: block;
      max-width: 100%;
      max-height: 100%;
      margin: auto; /* Centre l'image horizontalement */
    }
    

  </style>



</head>
<body class="hold-transition layout-top-nav">

 
<div class="wrapper">

  <!-- Navbar -->
<nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
  <div class="container">
    <a href="#" class="navbar-brand">
      <img src="../../resources/img/logo_mtefop.jpg" alt="logo_mtefop" class="brand-image img-circle elevation-3" style="opacity: .8">
    </a>
    <a href="{{route('home')}}">
      Tableau de bord
    </a>
    <a href="{{route('promotion')}}">
      Liste de promotion
    </a>
    <a href="#">
      Liste des arrêtés
    </a>

      @auth
      <div>
        <i class="fas fa-user-tie"></i>
        {{Auth::user()->name}}  
      </div>
        <form action="{{route('logout')}}" method="post">
          @method("delete")
          @csrf
          <button class="btn btn-primary">Deconnexion</button>
        </form>  
      @endauth

  </div>  
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
      

<h1 class="text-center">DEMANDE D'EQUIVALENCE</h1>
<form method="post" action="{{route('verifPromotion')}}">
  @csrf
<div class="container">
  <div class="row">
    <div class="col-sm">
        <label> Nom </label>
        
        <p class="form-control">{{ $params->firstName}}</p>
         
    </div>
    <div class="col-sm">
      <label> Prénom </label>
      <p class="form-control">{{ $params->lastName}}</p>
      
    </div>
  </div>

  <div class="row">
    <div class="col-sm">
        <label> Date de Naissance </label>
        @if($params->dateNaissance)
        <p class="form-control">{{ \Carbon\Carbon::parse($params->dateNaissance)->format('d/m/Y')}}</p>
        @else
        <p class="form-control">{{ $params->neVers}}</p>
        @endif
        
         
    </div>
    <div class="col-sm">
      <label> Lieu de Naissance </label>
      <p class="form-control">{{ $params->lieuNaissance}}</p>
      
    </div>
    </div>
  
    
  
  <label> Adresse</label>
  <div class="form-group">
    <p class="form-control">{{ $params->adresse}}</p>
  </div>

  <div class="row">
    <div class="col-sm">
        <label> Numéro Téléphone </label>
        <p class="form-control">{{ $params->numPhone}}</p>
         
    </div>
    <div class="col-sm">
      
    </div>
    </div>

  <div class="row">
    <div class="col-sm">
        <label> Carte National Identité </label>
        <p class="form-control">{{ $params->cni}}</p>
         
    </div>
    <div class="col-sm">
      <label> Date de délivrance </label>
      <p class="form-control">{{ \Carbon\Carbon::parse($params->dateDelivrance)->format('d/m/Y')}}</p>
      
    </div>
    
    </div>

    <div class="row">
      <div class="col-sm">
          <label> Lieu de délivrance </label>
          <p class="form-control">{{ $params->lieuDelivrance}}</p>
           
      </div>
      <div class="col-sm">
        
      </div>
      </div>
    
    <div>
      <div>
      <label> Photocopie CNI </label>
      <img src="{{asset( '/storage/'.$params->photocopieCni)}}" alt="photocopieCni" class="img" onclick="openFullscreen('photocopieCni')">
    </div>
      <div id="overlay-photocopieCni">
        <div id="fullscreen-image-photocopieCni">
          <span class="close-btn-image-photocopieCni" onclick="closeFullscreen('photocopieCni')">x</span>
          <img src="{{asset( '/storage/'.$params->photocopieCni)}}" alt="photocopieCni" class="img-fullscreen">
        </div>
    
      </div>
    </div>
    <div class="row">
      <div class="col-sm">
        <label> Equivalence de niveau </label>
        <p class="form-control">{{ $params->niveau}}</p>
           
      </div>
      <div class="col-sm">
      </div>
    </div>
<!-- §§§§§-->
<!-- Pour les L2 L3 M1 M2-->
    <div id="universitaire" style="{{ in_array($params->niveau, ['Licence 2', 'Licence 3', 'Master 1', 'Master 2']) ? 'display: block;' : 'display: none;' }}">
      <div class="row" >
        <div class="col-sm">
          <label> Université (*)</label>
          <p class="form-control">{{ $params->universite}}</p>
        </div>
        <div class="col-sm">
          <label> Mention (*)</label>
          <p class="form-control">{{ $params->mention}}</p>
        </div>
      </div> 
      <div class="row">
        <div class="col-sm">
          <label> Parcours (*)</label>
          <p class="form-control">{{ $params->parcours}}</p>
        </div>
        <div class="col-sm">
          <label> Matricule (*)</label>
          <p class="form-control">{{ $params->matricule}}</p>
        </div>
      </div> 
      <div class="row">
        <div class="col-sm">
          <label> Année (*)</label>
          <p class="form-control">{{ $params->anneeUniv}}</p>
        </div>
        <div class="col-sm">
        </div>
      </div>
  
    </div> 
 <!-- //-->  

 
<!-- §§§§§-->
<!-- Pour les baccalauréat-->
<div id="lycee" style="{{ $params->niveau === 'BACC' ? 'display: block;' : 'display: none;' }}">
  <div class="row">
    
    <div class="col-sm">
      <label> Numéro d'inscription (*)</label>
      <p class="form-control">{{ $params->numBacc}}</p>
    </div>
    
    <div class="col-sm">
      <label> Session (*)</label>
      <p class="form-control">{{ $params->sessionBacc}}</p>
    </div>
  </div>
  <div class="row">
    
    <div class="col-sm">
      <label> Série (*)</label>
      <p class="form-control">{{ $params->serieBacc}}</p>
    </div>
    
    <div class="col-sm">
      <label> Mention (*)</label>
      <p class="form-control">{{ $params->mentionBacc}}</p>
    </div>
  </div>
  <div class="row">
    <div class="col-sm">
      <label> Centre d'examen (*)</label>
      <p class="form-control">{{ $params->centreBacc}}</p>
    </div>
  </div>
</div>
<!-- //-->

<!-- §§§§§-->
<!-- Pour les CEG et EPP-->
<div id="CegEpp" style="{{ in_array($params->niveau, ['BEPC', 'CEPE']) ? 'display: block;' : 'display: none;' }}">
  <div class="row">
    
    <div class="col-sm">
      <label> Numéro d'inscription (*)</label>
      <p class="form-control">{{ $params->numInscription}}</p>
    </div>
    
    <div class="col-sm">
      <label> Session (*)</label>
      <p class="form-control">{{ $params->session}}</p>
    </div>
  </div>
  <div class="row">
    <div class="col-sm">
      <label> Centre d'examen (*)</label>
      <p class="form-control">{{ $params->centre}}</p>
    </div>
  </div>
</div>
<!-- //-->


<!-- §§§§§-->
<!-- Pour les examens de langue-->
<div id="langue" style="{{ in_array($params->niveau, ['ITP', 'DELF B1', 'DELF B2', 'DALF C1', 'DALF C2']) ? 'display: block;' : 'display: none;' }}">
  <div class="row">
    
    <div class="col-sm">
      <label> Numéro de candidat (*)</label>
      <p class="form-control">{{ $params->numCandidat}}</p>
    </div>
    
    <div class="col-sm">
      <label> Centre d'examen (*)</label>
      <p class="form-control">{{ $params->centreExam}}</p>
    </div>
  </div>
  <div class="row">
    
    <div class="col-sm">
      <label> Année (*)</label>
      <p class="form-control">{{ $params->anneeExam}}</p>
    </div>
    
    <div class="col-sm">
      
    </div>
  </div>
</div>
<!-- //-->

<!-- §§§§§-->
<!-- Pour les formations en éducation-->
<div id="Educateur" style="{{ in_array($params->niveau, ['CRINFP', 'CAP', 'CAE']) ? 'display: block;' : 'display: none;' }}">
  <div class="row">
    
    <div class="col-sm">
      <label> Numéro d'inscription (*)</label>
      <p class="form-control">{{ $params->numFormation}}</p>
    </div>
    
    <div class="col-sm">
      <label> Année (*)</label>
      <p class="form-control">{{ $params->anneeFormation}}</p>
    </div>
  </div>



  <div class="row">
    <div class="col-sm">
      <label> Centre de formation (*)</label>
      <p class="form-control">{{ $params->centreFormation}}</p>
    </div>
  </div>

  <div>
    <label> Diplôme Assorti </label>
    <img src="{{asset( '/storage/'.$params->diplomeAssorti)}}" alt="diplomeAssorti" class="img" onclick="openFullscreen('diplomeCertifie')">
    
    <div id="overlay-diplomeCertifie">
      <div id="fullscreen-image-diplomeCertifie">
        <span class="close-btn-image-diplomeCertifie" onclick="closeFullscreen('diplomeCertifie')">x</span>
        <img src="{{asset( '/storage/'.$params->diplomeAssorti)}}" alt="diplomeAssorti" class="img-fullscreen">
      </div>
  
    </div>
  </div>

</div>
<!-- //-->

      <div>
        <label> Titre Original </label>
        <img src="{{asset( '/storage/'.$params->titreOriginal)}}" alt="titreOriginal" class="img" onclick="openFullscreen('diplomeOriginal')">
        
        <div id="overlay-diplomeOriginal">
          <div id="fullscreen-image-diplomeOriginal">
            <span class="close-btn-image-diplomeOriginal" onclick="closeFullscreen('diplomeOriginal')">x</span>
            <img src="{{asset( '/storage/'.$params->titreOriginal)}}" alt="titreOriginal" class="img-fullscreen">
          </div>
      
        </div>
      </div>

      <div class="row">
        <div class="col-sm">
            <label> Motif de demande </label>
            <p class="form-control">{{ $params->motif}}</p>
             
        </div>
        <div class="col-sm">
          
        </div>
      </div>

      <!--Valeur à récupérer-->
<div id="recuperation">
      <div class="row">
        <div class="col-sm">
          <input type="hidden" name="slug" value="{{ $params->slug}}">
          <input type="hidden" name="firstName" value="{{ $params->firstName}}">
          
        </div>
        <div class="col-sm">
          <input type="hidden" name="lastName" value="{{ $params->lastName}}">
        </div>
        </div>
      <div class="row">
        <div class="col-sm">
          <input type="hidden" name="lieuNaissance" value="{{ $params->lieuNaissance}}">
            
        </div>
        <div class="col-sm">
          <input type="hidden" name="dateNaissance" value="{{ $params->dateNaissance}}">
          <input type="hidden" name="neVers" value="{{ $params->neVers}}">
        </div>
        </div>
      <div class="row">
        <div class="col-sm">
          <input type="hidden" name="numPhone" value="{{ $params->numPhone}}">
            
        </div>
        <div class="col-sm">
          <input type="hidden" name="adresse" value="{{ $params->adresse}}">
        </div>
        </div>
      <div class="row">
        <div class="col-sm">
          <input type="hidden" name="cni" value="{{ $params->cni}}">
            
        </div>
        <div class="col-sm">
          <input type="hidden" name="dateDelivrance" value="{{ $params->dateDelivrance}}">
        </div>
        </div>
      <div class="row">
        <div class="col-sm">
          <input type="hidden" name="photocopieCni" value="{{ $params->photocopieCni}}">
            
        </div>
        <div class="col-sm">
          <input type="hidden" name="lieuDelivrance" value="{{ $params->lieuDelivrance}}">
        </div>
        </div>

      <div class="row">
        <div class="col-sm">
          <input type="hidden" name="universite" value="{{ $params->universite}}">
            
        </div>
        <div class="col-sm">
          <input type="hidden" name="parcours" value="{{ $params->parcours}}">
        </div>
        <div class="col-sm">
          <input type="hidden" name="niveau" value="{{ $params->niveau}}">
        </div>
        </div>
      
      <div class="row">
        <div class="col-sm">
          <input type="hidden" name="motif" value="{{ $params->motif}}">
            
        </div>
        <div class="col-sm">
          <input type="hidden" name="diplomeCertifie" value="{{ $params->diplomeCertifie}}">
        </div>
        </div>
      
      <div>

        <div class="row">
          <div class="col-sm">
            <input type="hidden" name="diplomeOriginal" value="{{ $params->diplomeOriginal}}">
              
          </div>
          <div class="col-sm">
            <input type="hidden" name="matricule" value="{{ $params->matricule}}">
          </div>
        </div>
</div>
         <!-- §§§§§§ -->

      <div>
    
  <div class="row mb-3">
    
    <div class="col-sm">
      
    </div>
    
    <div class="col-sm ">
      <a href="{{route('home')}}" class=" btn btn-primary float-right">Retour</a>
    </div>
    <div class="col-sm">
      <button type="submit" class="btn btn-warning float-right">Vérifier dans la liste de promotion</button>
    </div>
      
    
  </div>
</form>

<div class="mb-3">
<form action="{{route('envoiErreur')}}" method="post">
  @csrf
  
  <div>
    <input type="hidden" name="slug" value="{{ $params->slug}}">
     
  </div>
  
  <button type="submit" class="btn btn-danger">En cas d'erreur</button>
</form>

</div>


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
<script src="../../resources/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../resources/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../resources/dist/js/adminlte.min.js"></script>
<script>
  function openFullscreen(identifier){
    $("#overlay-"+identifier).fadeIn();
    $("#fullscreen-image-"+identifier).fadeIn();
  }

  function closeFullscreen(identifier){
    $("#overlay-"+identifier).fadeOut();
    $("#fullscreen-image-"+identifier).fadeOut();
  }
</script>
</body>
</html>



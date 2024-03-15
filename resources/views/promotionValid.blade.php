@extends('standard')

@section('menu')
<body class="hold-transition layout-top-nav">
  <div class="wrapper">
    
<!-- Navbar -->
<nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
  <div class="container">
    <a href="#" class="navbar-brand">
      <img src="../resources/img/logo_mtefop.jpg" alt="logo_mtefop" class="brand-image img-circle elevation-3" style="opacity: .8">
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

@endsection

@section('content')


<div class="col-12">
  <div class="card">
    <div class="card-header">
      <h3 class="card-title bg-success">Listes de Promotion Valide</h3>

    </div>

    @if($valid->isEmpty())
    
    <div class="alert alert-danger text-center m-5 p-5 text-uppercase font-weight-bold" style="font-size:50px" role="alert">
        Pas Trouvés
      </div>
      <div class="row">
        <div class="col">
       
        </div>
        <div class="col">
       
        </div>
        <div class="col">
          <a href="{{route('home')}}" class="btn btn-primary "> &lt&lt Retour à la Dashboard</a>
          </div>
      </div>
    @else
    
    <form action="{{route('terminer')}}" method="post">
      @csrf
    <!-- /.card-header -->
    <div class="card-body table-responsive p-0">
      
      <table class="table table-hover text-nowrap">
        <thead>
          <tr>
            
            <th>Matricule</th>
            <th>Universite</th>
            <th>Parcours</th>
            <th>Niveau</th>
            <th>Année de sortie</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Date de Naissance</th>
            <th>Lieu de Naissance</th>
          </tr>
        </thead>
        
        <tbody>
          

            @foreach($valid as $list)
            <tr>
            <td >{{ $list->matricule}}</td>
            <td >{{ $list->universite}}</td>
            <td >{{ $list->parcours}}</td>
            <td >{{ $list->niveau}}</td>
            <td >{{ $list->annee}}</td>
            <td >{{ $list->firstName}}</td>
            <td >{{ $list->lastName}}</td>
            <td >
              @if($list->dateNaissance)
              {{ \Carbon\Carbon::parse($list->dateNaissance)->format('d/m/Y')}}
              @else
              {{ $list->neVers}}
              @endif
              </td>
            <td >{{$list->lieuNaissance}}</td>
            </tr>
            @endforeach
           
            
        
        </tbody>
      </table>
      <div class="alert alert-success text-center m-5 text-uppercase font-weight-bold" style="font-size:50px" role="alert">
        Promotion Trouvée
      </div>

    
      
    </div>
      <!--Valeur à récupérer-->
            <input type="hidden" name="slug" value="{{ $slug}}">
            <input type="hidden" name="diplomeCertifie" value="{{$diplomeCertifie}}">
            
            <input type="hidden" name="diplomeOriginal" value="{{$diplomeOriginal}}">
            <input type="hidden" name="photocopieCni" value="{{$photocopieCni}}">
            <input type="hidden" name="motif" value="{{$motif}}">
            <input type="hidden" name="matricule" value="{{$matricule}}">
            <input type="hidden" name="niveau" value="{{$niveau}}">
            <input type="hidden" name="parcours" value="{{$parcours}}">
            <input type="hidden" name="universite" value="{{$universite}}">
            <input type="hidden" name="lieuDelivrance" value="{{$lieuDelivrance}}">
            <input type="hidden" name="dateDelivrance" value="{{$dateDelivrance}}">
            <input type="hidden" name="cni" value="{{$cni}}">
            <input type="hidden" name="numPhone" value="{{$numPhone}}">
            <input type="hidden" name="adresse" value="{{$adresse}}">
            <input type="hidden" name="lieuNaissance" value="{{$lieuNaissance}}">
            <input type="hidden" name="neVers" value="{{$neVers}}">
            <input type="hidden" name="dateNaissance" value="{{$dateNaissance}}">
            <input type="hidden" name="lastName" value="{{$lastName}}">
            <input type="hidden" name="firstName" value="{{$firstName}}">
      <!-- -->
    <button type="submit" class="btn btn-success float-right mt-5 mr-5">Terminer</button>
    </form>

    @endif

    
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>

</div><!-- /.container-fluid -->
@endsection

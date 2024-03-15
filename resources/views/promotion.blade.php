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
      <h3 class="card-title">Listes de Promotion</h3>

      <div class="card-tools">
        <div class="input-group input-group-sm" style="width: 150px;">
          <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

          <div class="input-group-append">
            <button type="submit" class="btn btn-default">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
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

        @foreach($listAdmis as $list)
        <tr>
        <td>{{ $list->matricule}}</td>
        <td>{{ $list->universite}}</td>
        <td>{{ $list->parcours}}</td>
        <td>{{ $list->niveau}}</td>
        <td>{{ $list->annee}}</td>
        <td>{{ $list->firstName}}</td>
        <td>{{ $list->lastName}}</td>
        <td>
          @if($list->dateNaissance)
          {{ \Carbon\Carbon::parse($list->dateNaissance)->format('d/m/Y')}}
          @else
          {{ $list->neVers}}
          @endif
          </td>
        <td>{{$list->lieuNaissance}}</td>
        </tr>
        @endforeach
          
        </tbody>
      </table>
      
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>

</div><!-- /.container-fluid -->
@endsection
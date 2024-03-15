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
  <!-- /.row -->
  <div class="row">
      <div class="col-12">
          <div class="card">
          <div class="row">
          <div class="col">
            <!-- small box -->
            <a href="{{route('home')}}">
              <div class="small-box bg-info">
                <div class="inner">
                  <h3>{{$nbDemandes}}</h3>

                  <p>Demande</p>
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
                <!--
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
  -->
              </div>
            </a>
          </div>
          <!-- ./col -->
          <div class="col">
            <!-- small box -->
            <a href="{{route('listTerminer')}}">
              <div class="small-box bg-success">
                <div class="inner">
                  <h3>{{$nbTerminer}}</h3>

                  <p>Terminé</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
              </div>
            </a>
          </div>

          <!-- ./col -->
          <div class="col">
            <!-- small box -->
            <a href="{{route('erreur')}}">
              <div class="small-box bg-danger">
                <div class="inner">
                  <h3>{{$nbErreurs}}</h3>

                  <p>Erreur</p>
                </div>
                <div class="icon">
                  <i class="ion ion-pie-graph"></i>
                </div>
              </div>
            </a>
          </div>
          <!-- ./col -->
        </div> 
            </div>
        </div>  
      </div>
  
      @if(Session('status'))
        <div class="alert alert-success"> {{ Session('status')}}</div>
      @endif 
      <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title bg-info">Liste de demande</h3>

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
                      <th>ID</th>
                      <th>Nom</th>
                      <th>Prénom</th>
                      <th>Date</th>
                      <th>Motif</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>

                  @foreach($listDemande as $list)
                  <tr>
                  <td>{{ $list->id}}</td>
                  <td>{{ $list->firstName}}</td>
                  <td>{{ $list->lastName}}</td>
                  <td>{{ \Carbon\Carbon::parse($list->created_at)->format('d/m/Y | H:i:s')}}</td>
                  <td>{{$list->motif}}</td>
                  <td><a class="nav-link" href="{{route('home')}}/{{ $list->slug}}">Voir</a></td>
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

@endsection    
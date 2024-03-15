@extends('standard')

@section('content')
<body class="login-page" style="min-height: 466px;">
    <div class="login-box">
      <!-- /.login-logo -->
      <div class="card card-outline card-primary">
        <div class="card-header text-center">
          <a href="#" class="h1"><b>MTEFOP</b></a>
        </div>
        <div class="card-body">
          <p class="login-box-msg">Se connecter pour administrer</p>
    
          <form action="{{route('doLogin')}}" method="post">
            @csrf
            <div class="input-group mb-3">
              <input type="email" name="email" class="form-control" placeholder="Email" value="{{old('email')}}">
              
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-envelope"></span>
                </div>
              </div>
             
            </div>
            @if($errors->has('email'))
            <p class="text-danger">{{ $errors->first('email') }}</p>
            @endif 
            <div class="input-group mb-3">
              <input type="password" name="password" class="form-control" placeholder="Password">
             
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
              
            </div>
            @if($errors->has('password'))
              <p class="text-danger">{{ $errors->first('password') }}</p>
              @endif 
            <div class="row">
                <button type="submit" class="btn btn-primary btn-block">Se Connecter</button>
              <!-- /.col -->
            </div>
            <a href="{{route('create')}}">Retour</a>
          </form>
    
          
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- /.login-box -->
    
<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="../resources/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../resources/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../resources/dist/js/adminlte.min.js"></script>
@endsection
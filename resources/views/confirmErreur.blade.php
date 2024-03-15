@extends('standard')
@section('content')
<div >
    <!-- Smile, breathe, and go slowly. - Thich Nhat Hanh -->
    <h4 class="ml-5">MOTIF DE CONSIDERATION ERREUR</h4>
    <form action="{{route('envoiErreur')}}/{{ $listErreurs->slug}}" method="post">
        @csrf
        <div class="row m-2">
            <div class="col-sm">
            <input type="text" name="motifErreur" id="motifErreur" class="form-control">
            </div>
            <div class="col-sm">
                
            </div>
        </div>
        <button class="btn btn-primary ml-5">Delete</button>
    </form> 
</div>
@endsection


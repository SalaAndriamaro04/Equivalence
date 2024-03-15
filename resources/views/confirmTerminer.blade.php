@extends('standard')
@section('content')
<div>
    <!-- Smile, breathe, and go slowly. - Thich Nhat Hanh -->
    <h4>CONFIRMER LA DEMANDE</h4>
    <a class="btn btn-primary ml-5" href="{{route('terminer')}}/{{ $listTerminer->slug}}">Terminer</a>
</div>
@endsection


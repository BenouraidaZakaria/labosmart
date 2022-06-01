@extends('layouts.app')

@section('content')

<div class="container pt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <!-- @include('flash-message') -->
            <div class="card">
                <div class="card-header">CHANGER LES INFOS </div>

                <div class="card-body">
<div class="max-w-6xl mx-auto sm: px-6 lg:px-8">
<form class="form bg-white p-6 border-1" method="POST" action="{{ route('doctors.update',['doctor'=> $doctor->id])}}">
    @csrf
    @method('PUT')
<div>
   
<label class="text-sm" for="name">name</label>
<input class="text-lg border-1 form-control" type="text" id="name" name="name" value="{{$doctor->user->name}}">
<label class="text-sm" for="sexe">sexe</label>
<input class="text-lg border-1 form-control" type="text" id="sexe" name="sexe" value="{{$doctor->sexe}}">
</div>
<div>
<label class="text-sm" for="specialite">specialite</label>
<input class="text-lg border-1 form-control" type="text" id="specialite" name="specialite" value="{{$doctor->specialite}}">
</div>
<div>
<label class="text-sm" for="telephone">telephone</label>
<input class="text-lg_border-1 form-control" type="text" id="telephone" name="telephone" value="{{$doctor->telephone}}">
</div>
<div>
<button class=" border-1 btn btn-primary mt-3" type="submit">Submit</button>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
@endsection
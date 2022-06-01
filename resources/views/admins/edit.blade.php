@extends('layout')
@section('content')
<div class="max-w-6xl mx-auto sm: px-6 lg:px-8">
<form class="form bg-white p-6 border-1" method="POST" action="{{ route('admins.update',['admin'=> $admin->id])}}">
    @csrf
    @method('PUT')
<div>
   
<!-- <label class="text-sm" for="name">name</label>
<input class="text-lg border-1" type="text" id="name" name="name" value="{{$admin->user->name}}">
<label class="text-sm" for="sexe">sexe</label>
<input class="text-lg border-1" type="text" id="sexe" name="sexe" value="{{$admin->sexe}}">
</div>
<div>
<label class="text-sm" for="specialite">specialite</label>
<input class="text-lg border-1" type="text" id="specialite" name="specialite" value="{{$admin->specialite}}">
</div>
<div>
<label class="text-sm" for="telephone">telephone</label>
<input class="text-lg_border-1" type="text" id="telephone" name="telephone" value="{{$admin->telephone}}">
</div>
<div>
<button class=" border-1" type="submit">Submit</button> -->
</div>
</form>
</div>
@endsection
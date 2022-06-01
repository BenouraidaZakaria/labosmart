@extends('layouts.app')
@section('content')
<div class="container pt-5" >
    <div class="row justify-content-center">
        <div class="col-md-8">
        <div class="card">
                <div class="card-header">ENTRER INFORMATION DU DOCTEUR </div>
                <div class="card-body">

<form class="form bg-white p-6 border-1" method="POST" action="{{ route('doctors.store') }}">
    @csrf
<div>
    <label class="text-sm" for="user_id">select user</label>
    <select type="text" class="form-control" name="user_id">
        @foreach($users as $user)
            <option value="{{$user->id}}">{{$user->name}}</option>
        @endforeach
    </select>
<label class="text-sm mt-3" for="sexe">sexe</label>
<input class="text-lg border-1 form-control" type="text" id="sexe" name="sexe">
</div>
<div>
<label class="text-sm mt-3" for="specialite">specialite</label>
<input class="text-lg border-1 form-control" type="text" id="specialite" name="specialite">
</div>
<div>
<label class="text-sm mt-3" for="telephone">telephone</label>
<input class="text-lg_border-1 form-control" type="text" id="telephone" name="telephone">
</div>
<div>
<button class=" btn btn-primary mt-3" type="submit">Submit</button>
</div>
</form>
</div></div></div></div></div>
@endsection
@extends('layouts.app')
@section('content')
<div class="container pt-5" >
    <div class="row justify-content-center">
        <div class="col-md-8">
        <div class="card">
                <div class="card-header">ENTRER INFORMATION DU TEST </div>
                <div class="card-body">
<div class="max-w-6xl mx-auto sm: px-6 lg:px-8">
<form class="form bg-white p-6 border-1" method="POST" action="{{ route('tests.store') }}">
    @csrf
<div>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<label class="text-sm" for="libele">libele</label>
<input class="text-lg border-1 form-control" type="text" id="libele" name="libele"value="{{old('libele')}}">
</div>
<div>
<label class="text-sm" for="unite">unite</label>
<input class="text-lg border-1 form-control" type="text" id="unite" name="unite" value="{{old('libele')}}">
</div>
<div>
<label class="text-sm" for="valmin">valmin</label>
<input class="text-lg border-1 form-control" type="text" id="valmin" name="valmin"value="{{old('valmin')}}">
</div>
<div>
<label class="text-sm" for="valmax">valmax</label>
<input class="text-lg_border-1 form-control" type="text" id="valmax" name="valmax"value="{{old('valmax')}}">
</div>
<div>
<label class="text-sm" for="commentaire">commentaire</label>
<input class="text-lg_border-1 form-control" type="text" id="commentaire" name="commentaire"value="{{old('commentaire')}}">
</div><div>
<label class="text-sm" for="commentairesimin">commentairesimin</label>
<input class="text-lg_border-1 form-control" type="text" id="commentairesimin" name="commentairesimin"value="{{old('commentairesimin')}}">
</div><div>
<label class="text-sm" for="commentairesimax">commentairesimax</label>
<input class="text-lg_border-1 form-control" type="text" id="commentairesimax" name="commentairesimax"value="{{old('commentairesimax')}}">
</div>
<div>
<button class=" border-1 btn btn-primary mt-3" type="submit">Submit</button>
</div>
</form>
</div>
@endsection
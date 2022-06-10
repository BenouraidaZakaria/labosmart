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
<form class="form bg-white p-6 border-1" method="POST" action="{{ route('tests.update',['test'=> $test->id])}} }}">
    @csrf
    @method('PUT')
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
<input class="text-lg border-1 form-control" type="text" id="libele" name="libele" value="{{$test->libele}}">
</div>
<div>
<label class="text-sm" for="unite">unite</label>
<input class="text-lg border-1 form-control" type="text" id="unite" name="unite" value="{{$test->unite}}">
</div>
<div>
<label class="text-sm" for="valmin">valmin</label>
<input class="text-lg border-1 form-control" type="text" id="valmin" name="valmin" value="{{$test->valmin}}">
</div>
<div>
<label class="text-sm" for="valmax">valmax</label>
<input class="text-lg_border-1 form-control" type="text" id="valmax" name="valmax" value="{{$test->valmax}}">
</div>
<div>
<label class="text-sm" for="commentaire">commentaire</label>
<input class="text-lg_border-1 form-control" type="text" id="commentaire" name="commentaire" value="{{$test->commentaire}}">
</div><div>
<label class="text-sm" for="commentairesimin">commentairesimin</label>
<input class="text-lg_border-1 form-control" type="text" id="commentairesimin" name="commentairesimin" value="{{$test->commentairesimin}}">
</div><div>
<label class="text-sm" for="commentairesimax">commentairesimax</label>
<input class="text-lg_border-1 form-control" type="text" id="commentairesimax" name="commentairesimax" value="{{$test->commentairesimax}}">
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
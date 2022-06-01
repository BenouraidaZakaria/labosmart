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
<form class="form bg-white p-6 border-1" method="POST" action="{{ route('results.update',['result'=>$result->id]) }}">
    @csrf
    @method('PUT')
<div>
    <label class="text-sm" for="patient_id">select patient</label>
    <select type="text" class="form-control" name="patient_id">>
        @foreach($patients as $patient)
            <option value="{{$patient->id}}">{{$patient->user->name}}</option>
        @endforeach
    </select>
    
    <label class="text-sm" for="test_id">select test</label>
    <select type="text" class="form-control" name="test_id">
        @foreach($tests as $test)
            <option value="{{$test->id}}">{{$test->libele}}</option>
        @endforeach
    </select>
    <div>
    <label class="text-sm" for="valeur">valeur</label>
    <input class="text-lg_border-1 form-control" type="text" id="valeur" name="valeur" value="{{$result->valeur}}">
</div>
<div>
    <label class="text-sm" for="dateresult">dateresult</label>
    <input class="text-lg border-1 form-control" type="date" id="dateresult" name="dateresult" value="{{$result->dateresult}}">
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
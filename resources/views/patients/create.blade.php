@extends('layouts.app')
@section('content')
<div class="container pt-5" >
    <div class="row justify-content-center">
        <div class="col-md-8">
        <div class="card">
                <div class="card-header">ENTRER INFORMATION DU PATIENT </div>
                <div class="card-body">
<div class="max-w-6xl mx-auto sm: px-6 lg:px-8">
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form class="form bg-white p-6 border-1" method="POST" action="{{ route('patients.store') }}">
    @csrf
<div>
    <label class="text-sm" for="user_id">select user</label>
    <select type="text" class="form-control" name="user_id" value="{{old('user_id')}}">
        @foreach($patients as $patient)
            <option value="{{$patient->id}}">{{$patient->name}}</option>
        @endforeach
    </select>
    
    <label class="text-sm" for="doctor_id">select doctor</label>
    <select type="text" class="form-control" name="doctor_id"value="{{old('doctor_id')}}">
        @foreach($doctors as $doctor)
            <option value="{{$doctor->doctor->id}}">{{$doctor->name}}</option>
        @endforeach
    </select>
    <div>
    <label class="text-sm" for="cin">cin</label>
    <input class="text-lg_border-1 form-control" type="text" id="cin" name="cin"value="{{old('cin')}}">
</div>
<div>
    <label class="text-sm" for="sexe">sexe</label>
    <input class="text-lg border-1 form-control" type="text" id="sexe" name="sexe"value="{{old('sexe')}}">
</div>
<div>
<button class="btn btn-primary mt-3" type="submit">Submit</button>
</div>
</form>
</div></div></div></div></div></div></div>
@endsection
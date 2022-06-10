@extends('layouts.app')
@section('content')
<div class="container pt-5">
  <div class="row justify-content-center">
    <div class="col-md-8">
      @include('flash-message')
        <div class="card">
          <div class="card-header">LISTE DES PATIENTS </div>
            <div class="card-body">
              @if (session('status'))
                <div class="alert alert-success" role="alert">
                  {{ session('status') }}
                </div>
              @endif
              <button type="button" class="btn btn-primary mb-3"><a class="text-white" href="{{route('patients.create')}}">Ajouter patient</button>
              <table class="table table-striped">
                <thead>
                  <tr>
                    <td>ID</td>
                    <td>user_ID</td>
                    <td>Nom Complet</td>
                    <td>Nom Docteur</td>
                    <td>cin</td>
                    <td>sexe</td>
                  </tr>
                </thead>
                <tbody>
                  @foreach($patients as $patient)
                  <tr>
                  <td>{{$patient->id}}</td>
                  <td>{{$patient->user->id}}</td>
                  <td>{{$patient->user->name}}</td>
                  <td>{{$patient->doctor->user->name}}</td>
                  <td>{{strtoupper($patient->cin)}}</td>
                  <td>{{$patient->sexe}}</td>
                  <td><a href="{{ route('patients.edit',$patient->id)}}" class="btn btn-primary">Edit</a></td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
          </div>
      </div>
    </div>
  </div>
</div>
      @endsection
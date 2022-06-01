@extends('layouts.app')

@section('content')
<div class="container pt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <!-- @include('flash-message') -->
            <div class="card">
                <div class="card-header">LISTE DES RESULTATS</div>

                <div class="card-body">
                    <!-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif -->
                    <button type="button" class="btn btn-primary mb-3"><a class="text-white" href="{{route('results.create')}}">Add result</button>
  
  <table class="table table-striped">
    <thead>
      <tr>
        <td>ID</td>
        <td>test_ID</td>
        <td>patient_ID</td>
        <td>valeur</td>
        <td>date</td>
      </tr>
    </thead>
    <tbody>
      @foreach($results as $result)
      <tr>
      <td>{{$result->id}}</td>
      <td>{{$result->test->id}}</td>
      <td>{{$result->patient->id}}</td>
      <td>{{$result->valeur}}</td>
      <td>{{$result->dateresult}}</td>
       
      <td><a href="{{ route('results.edit',$result->id)}}" class="btn btn-primary">Edit</a></td>
      </tr>
      @endforeach
    </tbody>
     
 
      @endsection




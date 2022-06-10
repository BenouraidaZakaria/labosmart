@extends('layouts.app')

@section('content')
<div class="container pt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
        @include('flash-message')
            <div class="card">
                <div class="card-header">LISTE DES RESULTATS</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="flex justify-content-between">
                    <button type="button" class="btn btn-primary mb-3"><a class="text-white" href="{{route('results.create')}}">Add result</button>
                    {{$results->links()}}
                    </div>    
  <table class="table table-striped">
    <thead>
      <tr>
        <td>ID resultat</td>
        <td>test ID | libele</td>
        <td>patient ID | nom</td>
        <td>valeur</td>
        <td>date</td>
      </tr>
    </thead>
    <tbody>
      @foreach($results as $result)
      <tr>
      <td>{{$result->id}}</td>
      <td>{{$result->test->id}} | {{$result->test->libele}}</td>
      <td>{{$result->patient->id}} | {{$result->patient->user->name}}</td>
      <td>{{$result->valeur}} {{$result->test->unite}}</td>
      <td>{{$result->dateresult}}</td>
       
      <td><a href="{{ route('results.edit',$result->id)}}" class="btn btn-primary">Edit</a></td>
      <td>
            <form action="{{ route('deleteresult',$result->id)}}" method="post">
              @csrf
              @method('DELETE')
              <button class="btn btn-danger" type="submit">Delete</button>
            </form>
          </td>
      </tr>
      @endforeach
    </tbody>
    
    @endsection




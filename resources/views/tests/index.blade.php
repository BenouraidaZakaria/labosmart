@extends('layouts.app')

@section('content')
<div class="container pt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <!-- @include('flash-message') -->
            <div class="card">
                <div class="card-header">LISTE DES TESTS </div>

                <div class="card-body">
                    <!-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif -->
                    <button type="button" class="btn btn-primary "><a class="text-white" href="{{route('tests.create')}}">Add test</button>
    <table class="table table-striped">
      <thead>
        <tr>
          <td>ID</td>
          <td>libele</td>
          <td>val min</td>
          <td>val max</td>
          <td>comm</td>
          <td>commmin</td>
          <td>commmax</td>
        </tr>
      </thead>
      <tbody>
        @foreach($tests as $test)
        <tr>
          <td>{{$test->id}}</td>
          <td>{{$test->libele}}</td>
          <td>{{$test->valmin}}</td>
          <td>{{$test->valmax}}</td>
          <td>{{$test->commentaire}}</td>
          <td>{{$test->commentairesimin}}</td>
          <td>{{$test->commentairesimax}}</td>
          <td><a href="{{ route('tests.edit',$test->id)}}" class="btn btn-primary">Edit</a></td>
        </tr>
        @endforeach
      </tbody>
     
 
      @endsection


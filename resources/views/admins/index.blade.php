@extends('layouts.app')

@section('content')

<div class="container pt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <!-- @include('flash-message') -->
            <div class="card">
                <div class="card-header">LISTE DES ADMINS </div>

                <div class="card-body">
<div class="container-fluid">
<button type="button" class="btn btn-primary "><a class="text-white" href="{{route('admins.create')}}">Add admin</button>
 
    <table class="table table-striped">
      <thead>
        <tr>
          <td>ID</td>
          <td>user_ID</td>
          <td>Name</td>
        </tr>
      </thead>
      <tbody>
        @foreach($admins as $admin)
        <tr>
          <td>{{$admin->id}}</td>
          <td>{{$admin->user_id}}</td>
          <td>{{$admin->user->name}}</td>
        </tr>
        @endforeach
      </tbody>
   
    </div>
    </table>
    <div>
    <div>
    <div>
    <div>
    <div>
    <div>
    <div>
      @endsection
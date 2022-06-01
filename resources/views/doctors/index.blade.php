@extends('layouts.app')

@section('content')

<div class="container pt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <!-- @include('flash-message') -->
            <div class="card">
                <div class="card-header">LISTE DES DOCTEURS </div>

                <div class="card-body">
                    <!-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif -->
                    <button type="button" class="btn btn-primary mb-3"><a class="text-white" href="{{route('doctors.create')}}">Add Doctor</button>
    <table class="table table-striped">
      <thead>
        <tr>
          <td>ID</td>
          <td>userid</td>
          <td>name</td>
          <td>email</td>
          <td>sexe</td>
          <td>specialite</td>
        </tr>
      </thead>
      <tbody>
        @foreach($doctors as $doctor)
        <tr>
          <td>{{$doctor->id}}</td>
          <td>{{$doctor->user_id}}</td>
          <td>{{$doctor->user->name}}</td>
          <td>{{$doctor->user->email}}</td>
          <td>{{$doctor->sexe}}</td>
          <td>{{$doctor->specialite}}</td>
          <td><a href="{{ route('doctors.edit',$doctor->id)}}" class="btn btn-primary">Edit</a></td>
        </tr>
        @endforeach
      </tbody>
     
    </div>
    </table>
                  </div>    
               </div>
            </div>
        </div>
    </div>
</div>


      @endsection
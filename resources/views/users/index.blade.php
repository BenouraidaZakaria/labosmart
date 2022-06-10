@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="container pt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
        @include('flash-message')
            <div class="card">
                <div class="card-header">LISTE DES UTILISATEURS </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
    <table class="table table-striped">
      <thead>
        <tr>
          <td>ID</td>
          <td>Name</td>
          <td>role</td>
        </tr>
      </thead>
      <tbody>
        @foreach($users as $user)
        <tr>
          <td>{{$user->id}}</td>
          <td>{{$user->name}}</td>
          <td>{{$user->role}}</td>
          <td>
            <form action="{{ route('deleteuser',$user->id)}}" method="post">
              @csrf
              @method('DELETE')
              <button class="btn btn-danger" type="submit">Delete</button>
            </form>
          </td>
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
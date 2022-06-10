@extends('layouts.app')

@section('content')

<div class="container pt-5" >
    <div class="row justify-content-center">
        <div class="col-md-8">
        @include('flash-message')
            <div class="card">
            @if (Auth::user()->role == 'admin')
                <h3 class="card-header">Utilisateurs</h3>
            @endif
            @if (Auth::user()->role == 'patient')
                <h3 class="card-header">
                  Historique des resultats
                </h3>
            @endif
            @if (Auth::user()->role == 'doctor')
                <h3 class="card-header">Patients </h3>
            @endif
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if (Auth::user()->role == 'admin')
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
        <td>  <form action="{{ route('deleteuser',$user->id)}}" method="post">
              @csrf
              @method('DELETE')
              <button class="btn btn-danger" type="submit">Delete</button>
            </form></td>
        </tr>
        @endforeach
      </tbody>
     
    </div>
    </table>
    @endif
    @if (Auth::user()->role == 'patient')

    @foreach ($dates as $date )
    <table class="table table-striped">
      <h4 class="card-header d-flex justify-content-between">Bilan du : {{$date->dateresult}} 
      <a href="{{route('showresults',[$user->id,$date->dateresult])}}" class="btn btn-primary">voir bilan </a>
      <a href="{{url('generate-invoice-pdf',[$user->id,$date->dateresult])}}" class="btn btn-primary">telecharger </a></h4>
      <thead>
        <tr>
          <td>Test</td>
          <td>valeur</td>
          <td>commentaire</td>
        </tr>
      </thead>
      <tbody>
        @foreach($results as $result)
        @if($result->dateresult == $date->dateresult)
        <tr>
          <td>{{$result->test->libele}}</td>
          <td>{{$result->valeur}} {{$result->test->unite}}</td>
          @if($result->valeur < $result->test->valmin)
        <td class="text-danger">{{$result->test->commentairesimin}}</td>
        @elseif($result->valeur > $result->test->valmax)
        <td class="text-danger">{{$result->test->commentairesimax}}</td>
        @else
        <td class="text-success">{{$result->test->commentaire}}</td>
        @endif
        </tr>
        @endif
        @endforeach
      </tbody>
    @endforeach
    @endif
    
    @if(Auth::user()->role == 'doctor')
    <table class="table table-striped">
    <thead>
      <tr>
        <td>Name</td>
        <td>cin</td>
        <td>sexe</td>
      </tr>
    </thead>
    <tbody>
      @foreach($patients as $patient)
      <tr>
      <td>{{$patient->user->name}}</td>
      <td>{{$patient->cin}}</td>
      <td>{{$patient->sexe}}</td>

          <td><a href="{{url('showresults/patient',$patient->id)}}" class="btn btn-primary">results </a></td>

      </tr>
      @endforeach
    </tbody>
    @endif
    @if (Auth::user()->role == 'none')
<div class="alert alert-warning alert-block">
        <strong>Votre compte est toujous pas categorise</strong>
</div>
@endif
                  </div>    
               </div>
            </div>
        </div>
    </div>
</div>
@endsection

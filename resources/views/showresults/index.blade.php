@extends('layouts.app')

@section('content')
<div class="container pt-5" >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <h3 class="card-header">Historique du patient : {{ $patient->user->name }} </h3>
            @foreach ($dates as $date )
            <table class="table table-striped ">
                  <div class="card-header d-flex justify-content-between"><h4>Bilan du : {{$date->dateresult}}</h4>
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

    </div>    
               </div>
            </div>
        </div>
    </div>
    @endsection
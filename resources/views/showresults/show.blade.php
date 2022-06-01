@extends('layout')

@section('content')
<div class="head-title">
    <h1 class="text-center mt-5">Bilan Du {{$date}}</h1>
</div>
<div class="add-detail mt-10">
    <div class="w-50 float-left mt-10">
        <p class="m-0 pt-2 text-bold w-100">Nom du patient:  <span class="gray-color">{{$patient->user->name}}</span></p>
        <p class="m-0 pt-2 text-bold w-100">Nom du docteur: <span class="gray-color">{{$patient->doctor->user->name}}</span></p>
        <p class="m-0 pt-2 text-bold w-100">Date du bilan: <span class="gray-color">{{$date}}</span></p>
    </div>
   
    <div style="clear: both;"></div>
</div>

<div class="table-section bill-tbl w-100 mt-10">
    <table class="table w-100 mt-10">
        <tr>
          <td>Test</td>
          <td>valeur</td>
          <td>commentaire</td>
        </tr>
        @foreach($results as $result)
        <tr>
          <td>{{$result->test->libele}}</td>
          <td>{{$result->valeur}}</td>
          @if($result->valeur < $result->test->valmin)
        <td class="text-danger">{{$result->test->commentairesimin}}</td>
        @elseif($result->valeur > $result->test->valmax)
        <td class="text-danger">{{$result->test->commentairesimax}}</td>
        @else
        <td class="text-success">{{$result->test->commentaire}}</td>
        @endif
        </tr>
        @endforeach
    </table>
</div>
@endsection
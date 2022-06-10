<!DOCTYPE html>
<html>
<head>
    <title>Bilan</title>
</head>
<style type="text/css">
    body{
        font-family: 'Roboto Condensed', sans-serif;
    }
    .m-0{
        margin: 0px;
    }
    .p-0{
        padding: 0px;
    }
    .pt-5{
        padding-top:5px;
    }
    .mt-10{
        margin-top:10px;
    }
    .text-center{
        text-align:center !important;
    }
    .w-100{
        width: 100%;
    }
    .w-50{
        width:50%;   
    }
    .w-85{
        width:85%;   
    }
    .w-15{
        width:15%;   
    }
    .logo img{
        width:45px;
        height:45px;
        padding-top:30px;
    }
    .logo span{
        margin-left:8px;
        top:19px;
        position: absolute;
        font-weight: bold;
        font-size:25px;
    }
    .gray-color{
        color:#5D5D5D;
    }
    .text-bold{
        font-weight: bold;
    }
    .border{
        border:1px solid black;
    }
    table tr,th,td{
        border: 1px solid #d2d2d2;
        border-collapse:collapse;
        padding:7px 8px;
    }
    table tr th{
        background: #F4F4F4;
        font-size:15px;
    }
    table tr td{
        font-size:13px;
    }
    table{
        border-collapse:collapse;
    }
    .box-text p{
        line-height:10px;
    }
    .float-left{
        float:left;
    }
    .total-part{
        font-size:16px;
        line-height:12px;
    }
    .total-right p{
        padding-right:20px;
    }
</style>
<body>
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
          <td>valeur minimun</td>
          <td>valeur maximum</td>
          <td>commentaire</td>
        </tr>
        @foreach($results as $result)
        <tr>
          <td>{{$result->test->libele}}</td>
          <td>{{$result->test->valmin}} {{$result->test->unite}}</td>
          <td>{{$result->test->valmax}} {{$result->test->unite}}</td>
          <td>{{$result->valeur}} {{$result->test->unite}}</td>
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
</body>
</html>

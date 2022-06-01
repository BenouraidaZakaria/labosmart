@extends('layouts.app')
@section('content')
<div class="container pt-5" >
    <div class="row justify-content-center">
        <div class="col-md-8">
        <div class="card">
                <div class="card-header">ENTRER INFORMATION DE L'ADMIN </div>
                <div class="card-body">
<div class="max-w-6xl mx-auto sm: px-6 lg:px-8">
<form class="form bg-white p-6 border-1" method="POST" action="{{ route('admins.store') }}">
    @csrf
<div>
    <label class="text-sm" for="user_id">select user</label>
    <select type="text" class="form-control" name="user_id">
        @foreach($users as $user)
            <option value="{{$user->id}}">{{$user->name}}</option>
        @endforeach
    </select>
    <div>
<button class=" border-1 btn btn-primary mt-3" type="submit">Submit</button>
</div>
</form>
</div>
@endsection
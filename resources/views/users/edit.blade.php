@extends('layout')
@section('content')
<div class="max-w-6xl mx-auto sm: px-6 lg:px-8">
<form class="form bg-white p-6 border-1" method="POST" action="{{ route('users.update',['user'=>$user->id]) }}">
    @csrf
    @method('PUT')
<div>
    <label class="text-sm" for="user_id">select patient</label>
    
    <select type="text" class="form-control" name="user_id">>
        @foreach($users as $user)
            <option value="{{$user->id}}">{{$user->name}}</option>
        @endforeach
    </select>
    
<button class=" border-1" type="submit">Submit</button>
</div>
</form>
</div>
@endsection
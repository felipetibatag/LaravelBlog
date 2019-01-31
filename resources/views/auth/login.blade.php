@extends('master')
@section('content')
<div>
@if ($errors->any)
@foreach ($errors->all() as $error )
    {{$error}}
@endforeach
    
@endif
</div>
<div class='d-flex border border-danger flex-grow-1 align-items-center justify-content-center'>
    <form class="mb-4" action="{{route('login')}}" method='Post'>
        @csrf
        <input type='text' class='form-control' name="email" id="email" placeholder="email">
        <input type='password' class='form-control' name="password" id="password" placeholder="password">
        <small class="text-danger">{{$errors->first('password')}}</small>
        <input type='submit' class="form-control btn btn-info" value="Enviar">
    </form>
</div>
@endsection
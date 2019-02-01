@extends('master')
@section('titulo','Registro Usuario')
@section('content')
<p class="text-center display-1">Registro usuario</p>
<div class="muted justify-content-center">
    @if ($errors->any())
    Errores:<ul>
        @foreach ($errors->all() as $error )
            <li>{{$error}}</li>
        @endforeach
        </ul>
    @endif
</div>
<div class="align-self-center">
    <form action="{{route('register')}}" method="POST">
        @csrf
        <div class="form-group row">
            <label for="name" class="form-label">Nombre</label>
            <input type="text" name="name" placeholder="Nombre"class="form-control" />
        </div>
        <div class="form-group row">
            <label for="name" class="form-label" >Password</label>
            <input type="password" name="password" placeholder="clave" class="form-control"/>
        </div>
        <div class="form-group row">
            <label for="name" class="form-label" >Password Confirmation</label>
            <input type="password" name="password_confirmation" placeholder="clave confirmada" class="form-control"/>
        </div>
        <div class="form-group row">
            <label for="name">Email</label>
            <input type="text"placeholder="email"class="form-control" name="email"/>
        </div>
        <div class="form-group row">
            <input type="submit" value="enviar" class="form-control btn btn-info"/>
        </div>
    </form>
</div>


@endsection
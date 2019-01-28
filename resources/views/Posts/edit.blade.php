@extends('master')
@section('content')
<form class="form mt-3" action="{{route('posts.update',$post->id)}}" method="post">
  @csrf
  @method("PUT")
  @include('includes.formEditCreate')
</form>
@endsection
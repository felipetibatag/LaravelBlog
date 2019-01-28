@extends('master')
@section('content')
<form class="form mt-3" action="{{route('posts.store')}}" method="post">
  @csrf
  @include('includes.formEditCreate')
</form>
@endsection
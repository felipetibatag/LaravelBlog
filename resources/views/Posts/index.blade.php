@extends('master')
@section('titulo','Listado POSTS')
@section('content')
    <div class="d-flex flex-column">
            @if(session()->has('status'))
               <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{session('status')}}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            <table class="table pt-3">
                <thead class="thead-dark">
                    <tr class="text-center">
                        <th>#</th>
                        <th>Author</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th colspan="2">
                            <a href={{route('posts.create')}}><i class="fas fa-plus-circle"></i></a>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post )
                        <tr>
                            <td>{{$post->id}}</td>
                            <td>{{$post->author}}</td>
                            <td>{{$post->name}}<p class="text-muted" style="font-size:0.6em">Creado {{$post->created_at}}</p></td>
                            <td>{{$post->description}}</td>
                            <td>
                                <form id="frmDelete" action="{{route('posts.destroy',$post->id)}}" method="POST">
                                    @csrf
                                    @method("DELETE")
                                    <button onClick="$('form:first').submit();">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </form>
                            </td>
                            <td><a href={{route('posts.edit',$post->id)}}>
                                <i class="fas fa-edit"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
    </div>
@endsection
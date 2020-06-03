@extends('layouts.app')
@section('content')
    <a href="/posts" class="btn btn-default btn-lg" >Go back</a> <hr> <br>
    <h3>{{$post->title}}</h3>
<a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Mise à Jour Place</a>
{!! Form::open(['action' => ['PostsController@destroy',$post->id],'method' => 'POST', 'class' => 'pull-right']) !!}
{{ Form::hidden('_method', 'DELETE') }}
{{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
{!! Form::close() !!}
<a href="/posts/create" class="btn btn-default btn-lg"> Create new Place</a>
@endsection

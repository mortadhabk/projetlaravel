@extends('layouts.app')
@section('content')
    <a href="/users" class="btn btn-default btn-lg" >Go back</a> <hr> <br>
    <h3>{{$post->title}}</h3>
<a href="/users/{{$post->id}}/edit" class="btn btn-primary">Mise à Jour Place</a>
{!! Form::open(['action' => ['UsersController@destroy',$post->id],'method' => 'POST', 'class' => 'pull-right']) !!}
{{ Form::hidden('_method', 'DELETE') }}
{{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
{!! Form::close() !!}
<a href="/users/create" class="btn btn-default btn-lg"> Create new Place</a>
@endsection

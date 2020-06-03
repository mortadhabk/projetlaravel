@extends('layouts.app')
@section('content')
<h1>Mise à Jour Parking-place</h1>

{!! Form::open(['action'=> ['PostsController@update',$post->id], 'method' => 'POST']) !!}
    <div class="form-group">
{{Form::label('title', 'Nom de Parking') }}
{{ Form::text('title', $post->title,['class'=>'form-control' ,'placeholder'=>'Nom de Parking'])}}
    </div>
    <div class="form-group">
        {{Form::label('etat', 'Etat') }}
        {{ Form::text('etat', $post->etat,['class'=>'form-control' ,'placeholder'=>'Etat Text'])}}
    </div>
    {{ Form::hidden('_method','PUT') }}
    {{ Form::submit('Submit', ['class' =>'btn btn-primary']) }}
{!! Form::close() !!}
@endsection

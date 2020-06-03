@extends('layouts.app')
@section('content')
<h1>Reserver la</h1>
<h3>{{$post->title}}</h3>
{!! Form::open(['action'=> ['UsersController@update',$post->id], 'method' => 'POST']) !!}
    <div class="form-group" style="opacity:0;">
{{Form::label('title', 'Nom de Parking') }}
{{ Form::text('title', $post->title,['class'=>'form-control' ,'placeholder'=>'Nom de Parking'])}}
    </div>
    <div class="form-group"style="opacity:0;">
        {{Form::label('etat', 'Etat') }}
        {{ Form::text('etat', 1,['class'=>'form-control' ,'placeholder'=>'Etat Text'])}}
    </div>
    {{ Form::hidden('_method','PUT') }}
    {{ Form::submit('Confirm', ['class' =>'btn btn-primary']) }}
{!! Form::close() !!}
@endsection

@extends('layouts.app')
@section('content')
<h1>Create Post</h1>

{!! Form::open(['action'=> 'UsersController@store', 'method' => 'POST']) !!}
    <div class="form-group">
{{Form::label('title', 'Nom de Parking') }}
{{ Form::text('title', '',['class'=>'form-control' ,'placeholder'=>'Nom de Parking'])}}
    </div>
    <div class="form-group">
        {{Form::label('etat', 'Etat') }}
        {{ Form::text('etat', '',['class'=>'form-control' ,'placeholder'=>'Etat Text'])}}
    </div>
    {{ Form::submit('Submit', ['class' =>'btn btn-primary']) }}
{!! Form::close() !!}
@endsection

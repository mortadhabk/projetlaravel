@extends('layouts.app')
@section('content')
<div class="well">
    @if(count($posts)>0)

    {{$i=0}}
    @foreach ($posts as $post)
    @if ($i == 0)
    @if ($post->etat == 0)
    <a href="/users/{{$post->id}}/edit">demandait une place de parking</a>
     {{$i=$i+1}}
    @endif
    @endif

    @endforeach
    @endif
   </div>

@if(count($posts)>0)

@foreach ($posts as $post)





    <div class="well">

    <h3>{{$post->title}}</h3>
    <h5>{{$post->etat}} Voiture</h5>




    </div>


@endforeach

@else
    <p>NO posts found</p>
@endif
@endsection

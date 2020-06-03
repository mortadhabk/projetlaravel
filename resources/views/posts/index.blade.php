@extends('layouts.app')
@section('content')
<a href="/posts/create" class="btn btn-default btn-lg"> Create new Place</a>
@if(count($posts)>0)
@foreach ($posts as $post)

    <div class="well">

    <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
    <h5>{{$post->etat}} Voiture</h5>




    </div>


@endforeach

@else
    <p>NO posts found</p>
@endif
@endsection

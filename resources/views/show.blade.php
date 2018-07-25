@extends('layouts.app')


@section('content')


    <H1>{{$post->title}}</H1>

    <div>
        <p>
            {{$post->body}}
        </p>
    </div>
    <a href="{{route('posts.index')}}" class="btn btn-primary">back</a>
    @endsection
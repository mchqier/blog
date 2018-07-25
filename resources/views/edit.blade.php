@extends('layouts.app')


@section('content')

    <h1>Edit Post</h1>
    @if($errors->any())
        <div class="alert alert-success">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
dsf        </div>>
    @endif

    <div class="row">
        <div class="col-lg-10">
            <form action="{{route('posts.update',$post->post_id)}}" method="post">
                {{ csrf_field() }}
                {!! method_field('PUT') !!}
                <div class="form-group">
                    <lable for="title_input">Title</lable>
                    <input type="text" class="form-control" name="title" value="{{$post->title}}">
                </div>
                <div class="form-group">
                    <lable for="content_input">Body</lable>
                    <textarea raw="4" class="form-control" name="body">{{$post->body}}</textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">save</button>

                </div>
            </form>
            <a href="{{route('posts.index')}}" class="btn btn-primary">back</a>
        </div>
    </div>
@endsection

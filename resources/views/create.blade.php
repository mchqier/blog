@extends('layouts.app')


@section('content')
    <h1>create new post</h1>
    @if($errors->any())
        <div class="alert alert-success">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>

                @endforeach
            </ul>
        </div>
        @endif
    <div class="row">
        <div class="col-lg-10">
            {!! Form::open(['route'=>'posts.store','method'=>'post']) !!}
            {{ csrf_field() }}
                <div class="form-group">
                    {!! Form::label('title','Title :') !!}
                    {!! Form::text('title',null,['placeholder'=>'Enter Title','class'=>'form-control']) !!}
                    </div>
                <div class="form-group">
                <lable for="content_input">Title</lable>
                    <textarea raw="4" class="form-control" name="body"></textarea>
                    </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">save</button>
                    <a href="{{route('posts.index')}}" class="btn btn-primary">back</a>
                    </div>
                {!! Form::close() !!}

        </div>
    </div>
@endsection('content')

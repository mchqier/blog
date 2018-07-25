@extends('layouts.app')

@section('content')

<h1>All Posts</h1>

@if($errors->any())
    <div class="alert alert-success">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>

            @endforeach
        </ul>
    </div>
@endif
<a href="{{route('posts.create')}}" class="btn btn-sm btn-primary"> create new post </a><br>
<div class="row">
    <div class="col-lg-10">
    <table class="table table-bordered">
    <tr>
    <th>ID</th>
    <th>Title</th>
    <th>Content</th>
        <th></th>
        <th></th>
</tr>
@foreach ($posts as $rs)
 <tr>
     <td>{{ $rs->post_id}}</td>
     <td><a href="{{route('posts.show',$rs->post_id)}}">{{ $rs->title}}</a></td>
     <td>{{ substr($rs->body,0,30)}}   ........</td>
     <td><a class="btn-sm btn-primary" href="{{route('posts.edit',$rs->post_id)}}">edit</a></td>
     <td>
         <form action="{{route('posts.destroy',$rs->post_id)}}" method="post">
             {{ csrf_field() }}
             <input type="hidden" name="_method" value="DELETE">
             <input type="submit" class="btn-xs btn-primary" value="Delete">
         </form>
     </td>
   </tr>
 @endforeach
 </table>
 </div>
 </div>

 @endsection
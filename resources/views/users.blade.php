@extends('layouts.app')


all users


<table>
<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
</tr>
@if(isset($users))

 @foreach($users as $user)
 <tr>
<td>{{$user->id}}</td> 
 <td>{{$user->name}} </td>
 <td >{{$user->email}}</td>
 <td><a href="delete/{{$user->id}}">delete</a></td>
 <td><a href="edit/{{$user->id}}">edit</a></td>
 </tr>
 @endforeach
 
@endif

</table>
@extends('layouts.admin')

@section('content')

<h1 class="">Posts</h1>

<table class="table">
	<thead>
		<tr>
			<th>id</th>
			<th>user</th>
			<th>category</th>
			<th>photo </th>
			<th>Title</th>
			<th>Body</th>
			<th>Created</th>
			<th>Updated</th>
		</tr>
	</thead>
	<tbody>	
		@if($posts)
		@foreach($posts as $post)
		<tr>
			<td>{{$post->id}} </td>
			<td>{{$post->user->name}}</td>
			<td>{{$post->category? $post->category->name :'uncategorised post'}}</td>
			<td><img height="70" width="100" src="{{$post->photo ? $post->photo->file : 'images/defaultuser.png'}}" alt=""></td>
			<td>{{$post->title}}</td>
			<td>{{$post->body}}</td>
			<td>{{$post->created_at->diffForHumans()}}</td>
			<td>{{$post->updated_at->diffForHumans()}}</td>
		</tr>
		
		@endforeach
		@endif
	</tbody>	
</table>


@stop
@extends('layouts.admin')
@section('content')

<table id="blogPostTable">
	<thead>
		<tr>
			<th>ID</th>
			<th>Title</th>
			<th>Description</th>
			<th>Tags</th>
			<th>Image</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		@foreach($blog as $post)
		<tr>
			<td>{{$post->id}}</td>
			<td>{{$post->title}}</td>
			<td>{{$post->description}}</td>
			<td>{{$post->tags}}</td>
			<td>{{$post->blog_image}}</td>
			<td>Edit | Delete | Publish</td>
		</tr>
		@endforeach	

	</tbody>
</table>

@endsection


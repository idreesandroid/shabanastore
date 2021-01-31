@extends('layouts.master')
@section('content')
<table>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Post Title</th>
    </tr>
    @foreach($users as $user)
    <tr>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        @if(isset($user->getPostRelation))
            <td><ul>
            @foreach($user->getPostRelation as $post)
            <li>{{$post->title}}</li>
            @endforeach
            </ul></td>
        @endif
    </tr>

    @endforeach
</table>
@endsection

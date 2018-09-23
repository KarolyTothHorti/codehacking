@extends('layouts.admin')


@section('content')

    <h1>Posts</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Photo</th>
                <th>User</th>
                <th>Category</th>
                <th>Title</th>
                <th>Body</th>
                <th>Created_at</th>
                <th>Updated_at</th>
            </tr>
        </thead>
        <tbody>
            @if($posts)
                @foreach($posts as $post)    
                    <tr>
                        <td scope="row">{{$post->id}}</td>
                        <td><img height="100" src="{{$post->photo_id ? $post->photo->file : 'http://placehold.it/100x100'}}" alt=""> </td>
                        <td>{{$post->user->name}}</td>
                        <td>{{$post->category ? $post->category->name : 'Uncategorized'}}</td>
                        <td>{{$post->title}}</td>
                        <td>{{$post->body}}</td>
                        <td>{{$post->created_at->diffForHumans()}}</td>
                        <td>{{$post->updated_at->diffForHumans()}}</td>
                    </tr>
                @endforeach    
            @endif
        </tbody>
    </table>

@endsection

@extends('layouts.admin')


@section('content')
    
    <h1>Replies</h1>

    @if (count($replies) > 0)
        
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Author</th>
                    <th>Email</th>
                    <th>Body</th>
                    <th>Post</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($replies as $reply)
                    
                    <tr>
                        <td scope="row">{{$reply->id}}</td>
                        <td>{{$reply->author}}</td>
                        <td>{{$reply->email}}</td>
                        <td>{{$reply->body}}</td>
                        <td><a href="{{route('home.post',$comment->post_id)}}">View Post</a></td>
                        <td>
                            @if ($reply->is_active == 1)
                                
                                {!! Form::open(['method'=>'patch','action'=> ['CommentRepliesController@update',$reply->id]]) !!}
                                
                                {!! Form::hidden('is_active', 0) !!}

                                {!! Form::submit('Un-approve', ['class'=>'btn btn-success']) !!}

                                
                                {!! Form::close() !!}
                                

                            @else

                                {!! Form::open(['method'=>'patch','action'=> ['CommentRepliesController@update',$reply->id]]) !!}
                                    
                                {!! Form::hidden('is_active', 1) !!}

                                {!! Form::submit('Upprove', ['class'=>'btn btn-info']) !!}
                                
                                {!! Form::close() !!}
                                

                            @endif
                        </td>
                        <td>

                                {!! Form::open(['method'=>'delete','action'=> ['CommentRepliesController@destroy',$reply->id]]) !!}
                                    
                                {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}
                                
                                {!! Form::close() !!}

                        </td>
                    </tr>

                @endforeach
            </tbody>
        </table>
    
    @else

        <h1 class="text-center">No replies</h1>

    @endif

@endsection
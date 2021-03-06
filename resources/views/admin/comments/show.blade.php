
@extends('layouts.admin')


@section('content')
    
    <h1>Comments</h1>

    @if (count($comments) > 0)
        
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
                @foreach ($comments as $comment)
                    
                    <tr>
                        <td scope="row">{{$comment->id}}</td>
                        <td>{{$comment->author}}</td>
                        <td>{{$comment->email}}</td>
                        <td>{{$comment->body}}</td>
                        <td><a href="{{route('home.post',$comment->post_id)}}">View Post</a></td>
                        <td>
                            @if ($comment->is_active == 1)
                                
                                {!! Form::open(['method'=>'patch','action'=> ['PostCommentsController@update',$comment->id]]) !!}
                                
                                {!! Form::hidden('is_active', 0) !!}

                                {!! Form::submit('Un-approve', ['class'=>'btn btn-success']) !!}

                                
                                {!! Form::close() !!}
                                

                            @else

                                {!! Form::open(['method'=>'patch','action'=> ['PostCommentsController@update',$comment->id]]) !!}
                                    
                                {!! Form::hidden('is_active', 1) !!}

                                {!! Form::submit('Upprove', ['class'=>'btn btn-info']) !!}
                                
                                {!! Form::close() !!}
                                

                            @endif
                        </td>
                        <td>

                                {!! Form::open(['method'=>'delete','action'=> ['PostCommentsController@destroy',$comment->id]]) !!}
                                    
                                {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}
                                
                                {!! Form::close() !!}

                        </td>
                    </tr>

                @endforeach
            </tbody>
        </table>
    
    @else

        <h1 class="text-center">No comments</h1>

    @endif

@endsection
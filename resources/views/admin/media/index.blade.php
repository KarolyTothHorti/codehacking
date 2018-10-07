
@extends('layouts.admin')


@section('content')
    
    <h1>Media</h1>

    @if ($photos)  
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Created date</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($photos as $photo)
                    <tr>
                        <td scope="row">{{$photo->id}}</td>
                        <td><img height="50" src="{{$photo->file}}" alt=""></td>
                        <td>{{$photo->created_at ? $photo->created_at->diffForHumans() : 'No date'}}</td>
                        <td>{!!Form::model($photo,['method'=>'delete','action'=>['AdminMediasController@destroy',$photo->id]])!!}
                                <div class="form-group">
                                    {!!Form::submit('Delete Photo',['class'=>'btn btn-danger'])!!}
                                </div>
                            {!!Form::close()!!}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif

@endsection


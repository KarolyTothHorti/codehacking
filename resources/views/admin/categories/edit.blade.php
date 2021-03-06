@extends('layouts.admin')



@section('content')

    <h1>Categories</h1>

    <div class="col-sm-6">
        {!!Form::model($categories,['method'=>'patch','action'=>['AdminCategoriesController@update',$categories->id]])!!}
            <div class="form-group">
                {!!Form::label('name','Name:')!!}
                {!!Form::text('name',null,['class'=>'form-control'])!!}
            </div>
            <div class="form-group">
                {!!Form::submit('Update Category',['class'=>'btn btn-primary col-sm-6'])!!}
            </div>
        {!!Form::close()!!}

        {!!Form::model($categories,['method'=>'delete','action'=>['AdminCategoriesController@destroy',$categories->id]])!!}
            <div class="form-group">
                {!!Form::submit('Delete Category',['class'=>'btn btn-danger col-sm-6'])!!}
            </div>
        {!!Form::close()!!}
    </div>
@endsection
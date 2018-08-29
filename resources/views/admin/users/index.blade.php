@extends('layouts/admin')


@section('content')

 <table class="table">
   <thead>
     <tr>
       <th>Id</th>
       <th>Photo</th>
       <th>Name</th>
       <th>Email</th>
       <th>Role</th>
       <th>Status</th>
       <th>Created</th>
       <th>Updated</th>
     </tr>
   </thead>
   <tbody>
     @if($users)
        @foreach($users as $user) 
          <tr>
            <td scope="row">{{$user->id}}</td>
            <td><img height='50' width='50' src="{{$user->photo ? $user->photo->file : 'http://placehold.it/50x50'}}" alt="" class="img-responsive img-rounded"></td>
            <td><a href="{{route('admin.users.edit',$user->id)}}">{{$user->name}}</a></td>
            <td>{{$user->email}}</td>
            <td>{{$user->role ? $user->role->name : "User has no role" }}</td>
            <td>{{$user->is_active == 1 ? "Active" : "Inactive"}}</td>
            <td>{{$user->created_at->diffForHumans()}}</td>
            <td>{{$user->updated_at->diffForHumans()}}</td>
          </tr>
        @endforeach
     @endif
   </tbody>
 </table>

@endsection()
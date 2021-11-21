@extends('layouts.app')


@section('content')   

<div class="container">
  @if ($info = Session::get('info'))
<div class='card mt-4 '>
  <div class="card-body bg-success text-white">
    {{$info}}
  </div>
</div>   
@endif
  <div class="mt-4 float-right">
    <a href="{{url('/users/create')}}" class="btn btn-secondary">Add New User</a>
  </div>
    <h1 class="mt-5">Users</h1>
    <table class="table table-bordered table-striped table-sm">
    <thead class="bg-dark">
      <tr>
        <th class="text-primary">User ID</th>
        <th class="text-primary">Last name</th>
        <th class="text-primary">First name</th>
        <th class="text-primary">Address</th>
      </tr>
    </thead>
    <tbody>
    <thead class="bg-secondary">
        @foreach ($users as $user)
          <tr>
            <td>{{$user->id}}</td>  
            <td>{{$user->lname}}</td>  
            <td>{{$user->fname}}</td>  
            <td>{{$user->address}}</td>  
        </tr>  
          
        @endforeach
    </thead>
      
    </tbody>
  </table>
</div>   
@endsection
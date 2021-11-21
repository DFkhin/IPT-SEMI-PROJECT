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
    <a href="{{url('/investors/create')}}" class="btn btn-secondary">Add New Investors</a>
  </div>
    <h1 class="mt-4">Investors</h1>
    <table class="table table-bordered">
    <thead class="bg-dark">
      <tr>
        <th class="text-primary">ID</th>
        <th class="text-primary">Name</th>
        <th class="text-primary">Address</th>
        <th class="text-primary">Phone</th>
        <th class="text-primary">Investment</th>
      </tr>
    </thead>
    <tbody>
    <thead class="bg-secondary">
        @foreach ($investors as $investor)
          <tr>
            <td>{{$investor->id}}</td>  
            <td>{{$investor->name}}</td>  
            <td>{{$investor->address}}</td>  
            <td>{{$investor->phone}}</td>  
            <td>{{$investor->investment}}</td> 
        </tr>  
          
        @endforeach
    </thead>
      
    </tbody>
  </table>
</div>   
    
@endsection
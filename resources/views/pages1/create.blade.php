@extends('layouts.app')

@section('content')
    <div class="container">
    <h1>Create New User</h1>

    <div class="row" >
        <div class="col-md-5">
        {!! Form::open(['url'=>'/users','method'=>'post']) !!}

        <div class="form-group">

            {{ Form::label('id','id')}}
            {{Form::text('id',null,['class'=>'form-control'])}}

        </div>

        <div class="form-group">

            {{ Form::label('lname','Last name')}}
            {{Form::text('lname',null,['class'=>'form-control'])}}

        </div>
        <div class="form-group">

            {{ Form::label('fname','First name')}}
            {{Form::text('fname',null,['class'=>'form-control'])}}

        </div>
        <div class="form-group">

            {{ Form::label('address','Address')}}
            {{Form::text('address',null,['class'=>'form-control'])}}

        </div>
        <div class="form-group">

            {{ Form::label('phone','Phone')}}
            {{Form::text('phone',null,['class'=>'form-control'])}}

        </div>
        <div class="form-group">

            {{ Form::label('email','Email')}}
            {{Form::text('email',null,['class'=>'form-control'])}}

        </div>
        <div class="form-group">

            {{ Form::label('password','Password')}}
            {{Form::password('password',['class'=>'form-control'])}}

        </div>
        <div class="form-group">
            <button class="btn btn-secondary float right">
                Create User
            </button>
        </div> 

        {!! Form::close() !!}
        </div>
        <div class="card" style="height: 25%">
            <div class="card-body bg-danger text-warning">
                Please fix the ff:
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div> 
    </div>
@endsection
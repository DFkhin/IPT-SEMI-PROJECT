@extends('layouts.app')

@section('content')

    <div class="container">
        <h1>Create New Investor</h1>
        <div class="row">
            <div class="col-md-5">
            {!! Form::open(['url'=>'/investors','method'=>'post']) !!}

            <div class="form-group">
                {{Form::label('id','ID')}}
                {{Form::text('id', null, ['class'=>'form-control'])}}
            </div>

            <div class="form-group">
                {{Form::label('user_id','Select User')}}
                {{Form::select('user_id', \App\User::list(), null, ['class' => 'form-control', 'placeholder' =>'Select user'])}}
            </div>
            <div class="form-group">
                {{Form::label('name','Name')}}
                {{Form::text('name', null, ['class'=>'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('address','Address')}}
                {{Form::text('address', null, ['class'=>'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('phone','Phone')}}
                {{Form::text('phone', null, ['class'=>'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('investment','Investment')}}
                {{Form::text('investment', null ,['class'=>'form-control'])}}
            </div>
            <div class="from-group">
                <button class="btn btn-primary float-right">Create Intructor</button>
            </div>
            {!!Form::close()!!}
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
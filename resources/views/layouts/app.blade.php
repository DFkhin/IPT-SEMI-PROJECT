<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset('.\css\style.css')}}">
    </head>
    <body>

        <nav class="navbar navbar-expand-lg navbar-grey bg-dark">   
            <div class="container-fluid">
    
                <a class="navbar-brand" href="#">IPT-SEMI PORJECTS</a>
              
                <div class="collapse navbar-collapse d-flex align-items-center justify-content-end " id="navbarSupportedContent">
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item ">
                      <a class="nav-link active" area-current="page" href="{{url('/')}}">Home </a>
                    </li>
                    <li class="nav-item ">
                      <a class="nav-link active" area-current="page" href="{{url('/users')}}">Users </a>
                      </li>
                    <li class="nav-item ">
                      <a class="nav-link active" area-current="page" href="{{url('/investors')}}">Investors </a>
                    </li>   
                  </ul>
                </div>
            </div>
        </nav>

        <div class="container d-flex algin-items-center justify-content-center">
          @yield('content')
        </div>
       
        
    </body>
</html>

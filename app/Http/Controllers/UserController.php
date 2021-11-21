<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index() {

        $users = User::all();   

        return view ('pages1.user',['users' => $users]);
    }

    public function create(){
        return view('pages1.create');
    }
    public function store(Request $request) {
        $this->validate($request, [
            'id'=>'required',
            'lname' => 'required',
            'fname'=> 'required',
            'address'=>'required',
            'phone'=>'required',
            'email'=>'required|email',
            'password'=> 'required' 

        ]);
        User::create([
            'id'=>$request['id'],
            'lname'=>$request['lname'],
            'fname'=>$request['fname'],
            'address'=>$request['address'],
            'phone'=>$request['phone'],
            'email'=>$request['email'],
            'password'=> bcrypt($request['lname']),

        ]);

        return redirect('/users')->with('info','A new user has been created.');
    }
}

<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Investor;
use Symfony\Component\HttpKernel\DataCollector\DumpDataCollector;
class InvestorController extends Controller
{
    public function index() {

        $investors = Investor::all();
        return view('pages2.investor',['investors'=>$investors]);
    }
    public function create() {
        return view('pages2.create');
    }
    public function store(Request $request){
       // dd($request);
        $this->validate($request,[
            'id'=> 'required|numeric',
            'user_id'=>'required',
            'name'=>'required',
            'address'=>'required',
            'phone'=>'required|numeric',
            'investment'=>'required|numeric'
        ]);
       

        Investor::create($request->all());

        return redirect('/investors')->with('info', 'New Investors have been added.');
    }
}

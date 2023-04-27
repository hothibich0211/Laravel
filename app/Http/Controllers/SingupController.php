<?php

namespace App\Http\Controllers;

use App\Http\Requests\SingupReques;
use Illuminate\Http\Request;

class SingupController extends Controller
{
    //
    public function index(){
        return view('form');
    }

    public function displayInFor(SingupReques $request){
        $usre =[
            'name'=>$name=$request->input("name"),
            'age'=>$name=$request->input("age"),
            'date'=>$name=$request->input("date"),
            'phone'=>$name=$request->input("phone"),
            'web'=>$name=$request->input("web"),
            'address'=>$name=$request->input("address"),
        ];
        return view('form')->with('user',$usre);
    }

}

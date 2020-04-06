<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
class UsersController extends Controller
{
    public function index(){
        return view('users');
    }
    public function store(Request $request){
        $validator= Validator::make($request->all(),[
            'name'=>'required|min:3|max:50',
            'email'=> 'required|min:3|email',
            'pass1'=>'required|min:3|required_with:pass2|same:pass2',
            'pass2'=>'required|min:3'
        ]);
        if($validator->fails()){
            return back()
            ->withInput()
            ->with('ErrorInsert','Favor de llenar los datos')
            ->withErrors($validator);
        }else{
            dd('Todo va bien');
        }

    }
}

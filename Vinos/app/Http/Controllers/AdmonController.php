<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
class AdmonController extends Controller
{
    public function index(){
        return view('admon');
    }
    public function store(Request $request){
        $validator =Validator::make($request->all(),[
            'name'=>'required|min:3',
            'CPE'=>'required|min:3',
            'CPC'=>'required|min:3',
            'CPA'=>'required|min:3',
            'CPGA'=>'required|min:3'
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

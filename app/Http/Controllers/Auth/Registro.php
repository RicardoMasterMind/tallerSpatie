<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Registro extends Controller
{
    public function register(Request $request){
        $validacion=Validator::make($request->all(),[
            'nombre'=>'required',
            'password'=>'required',
            'email'=>'required'
        ]);
        if(!$validacion->fails()){
            $user=new User();
            $user->name=$request->nombre;
            $user->email=$request->email;
            $user->password=Hash::make($request->password);
            $user->save();
            return view('Admin.Dashboard');
        }
        else {
            
        }
    }
}

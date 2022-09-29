<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;

class logueo extends Controller
{
    public function login(Request $request){
        $email=$request->email;
        $password=$request->password;
        Validator::make($request->all(),[
            'email'=>'required',
            'password'=>'required'
        ]);
        if ($validar->fails()){
            $usuarioemail-User::where('email',$email)->get();
            if(Hash::check($password, $usuarioemail->password)){
                return view('Admin.Dashboard');
                Session::put('id',$usuarioemail->id);
                Session::put('user',$usuarioemail->name);
                Session::put('email',$usuarioemail->email);
                return view('Admin.Dashboard');
            }
        }
    }

}

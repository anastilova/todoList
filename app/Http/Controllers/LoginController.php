<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;



class LoginController extends Controller
{
    public function index() {
        return view('login');
    }
    public function auth(Request $request) {
        $input = Validator::make($request->all(), [
            'name' => 'required',
            'password' => 'required'
        ]);

        if($input->fails()){
            return back()->withErrors($input);
        }
        if(!Auth::attempt([
            'name' => $request->name,
            'password' => $request->password])){
            return back()->withErrors('Такого пользователя не существует');
        }

        return redirect()->intended('dashboard');

}
public function logout (){
    Auth::logout();
    Session::flush();

    return redirect('/');
}
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index() {
        return view('register');
    }
    public function store(Request $request) {
        $input = Validator::make($request->all(), [
            'name' => 'required',
            'password' => 'required|min:8'
    ]);

        if($input->fails()){
            return back()->withErrors($input);
        }

        //dd($input);

        User::create([
            'name' => $request->name,
            'password' => Hash::make($request->password)
        ]);

        return redirect('/');
    }
}

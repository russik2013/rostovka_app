<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function login(){

        return view('login_register.login');

    }

    public function registerIndex(){

        return view('login_register.register');

    }

    public function auth(Request $request){

        if (Auth::attempt(['email' => $request->author, 'password' => $request->{'author-pass'}]))
        {
            return redirect()->intended('category');
        }

        return back()->withErrors(array('login_error' => 'Не верные данные'));

    }

    public function register(Request $request){

        $rules = ['first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|email|valid_email',
            'address' => 'required|string',
            'city' => 'required|string',
            'state' => 'required|string',
            'zip' => 'required|numeric',
            'phone' => 'required|numeric|valid_phone',
            'password' => 'required'];

        $validator = Validator::make($request->all(),$rules);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $client = new Client();

        $client -> fill($request -> all());

        $client -> password = bcrypt($request->password);

        $client -> save();

        return redirect('login');

    }
}

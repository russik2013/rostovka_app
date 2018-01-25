<?php

namespace App\Http\Controllers;

use App\Category;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function login(){

        return view('user.login_register.login');

    }

    public function registerIndex(){

        return view('user.login_register.register');

    }



    public function auth(Request $request){

        if (Auth::attempt(['email' => $request->author, 'password' => $request->{'author-pass'}]))
        {
            if(Auth::user()->type == 'user' )
                return redirect()->intended('userinfo');
            if(Auth::user()->type == 'admin' )
                return redirect()->intended('admin_index');
        }

        return back()->withErrors(array('login_error' => 'Не верные данные'));

    }

    public function register(Request $request){

        $rules = [
            'email' => 'required|email|valid_email',
            'phone' => 'required|numeric|valid_phone',
            'password' => 'required'];

        $validator = Validator::make($request->all(),$rules);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
            //return $validator->messages();
        }


        $client = new User();

        $client -> fill($request -> all());

        $client -> country = $request -> city;

        $client -> postal_code = 1;

        $client -> name = $request -> first_name;

        $client -> type = 'user';

        $client -> password = bcrypt($request->password);

        $client -> save();


    }

    public function categories($view){

        $categories = Category::all();

        $view->with('categories', $categories );

    }

    public function logout(){

        Auth::logout();

    }
}

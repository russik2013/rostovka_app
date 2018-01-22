<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ClientController extends Controller
{
    public function index(){

        $client = Auth::user();

        return view('user.userinfo', compact('client'));

    }

    public function update(Request $request){

        $rules = [
            'email' => 'required|email|valid_email',
            'phone' => 'required|numeric|valid_phone',
            'password' => 'required'];

        $validator = Validator::make($request->all(),$rules);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $client = User::find(Auth::user()->id);

        $client -> fill($request -> all());

        $client -> save();

    }
}

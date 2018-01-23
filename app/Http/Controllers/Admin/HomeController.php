<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function index(){

        $clients = User::all();

        return view('admin.all_user', compact('clients'));

    }

    public function editClient($id){

        $client = User::find($id);

        return view('admin.user_edit.edit', compact('client'));

    }

    public function deleteClient($id){

        User::find($id) -> delete();

    }

    public function updateClient(Request $request){

        $rules = [
            'email' => 'required|email|valid_email',
            'phone' => 'required|numeric|valid_phone',
            'password' => 'required'];

        $validator = Validator::make($request->all(),$rules);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $client = User::find($request -> id);

        $client -> fill($request -> all());

        $client -> save();

    }
}

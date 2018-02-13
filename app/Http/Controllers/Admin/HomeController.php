<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function index($name=""){

        if($name != "")
            $clients = User::where('first_name', 'like', '%'.$name.'%')
                -> where('last_name', 'like', '%'.$name.'%','or')
                ->  paginate(15);
        else
            $clients = User::paginate(15);

        return view('admin.all_user', compact('clients'));

    }

    public function supplier(){

        $client = User::find(2);

        return view('admin.product.supplier_edit', compact('client'));

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
            'email' => 'required|email'
            ];

        $validator = Validator::make($request->all(),$rules);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $client = User::find($request -> id);

        $client -> fill($request -> all());

        $client -> save();

        return redirect()->route("adminIndex");

    }

    public function personal(){

        $user = User::find(Auth::user()->id);

        return view('admin.user_edit.admin_edit', compact('user'));

    }

    public function personalUpdate(Request $request){

        $user = User::find($request -> id);

        $user->fill($request -> all());

        $user -> save();

        return redirect() ->route("adminIndex");

    }
}

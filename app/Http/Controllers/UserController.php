<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index(){
        $data = User::all();
        return view('users.index', compact('data'));
    }
    public function create(){
        return view('users.create');
    }
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('users.show',compact('user'));
    } 
    public function store(Request $request){
        $userData = new User;
        $userData = $request->except('_token');
        User::create($userData);
        return redirect()->route('Users.index');
    }

    public function edit($id){
        $user = User::findOrFail($id);
        return view('users.edit', compact('user'));
    }
    public function update(Request $request, $id){
        $user = User::findOrFail($id);
        $user->firstName = $request['firstName'];
        $user->lastName = $request['lastName'];                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    
        $user->dob = $request['dob'];
        $user->email = $request['email'];
        $user->password = $request['password'];
        $user->address1 = $request['address1'];
        $user->address2 = $request['address2'];
        $user->country = $request['state'];
        $user->state = $request['country'];
        $user->status = $request['status'];
        $user->save();
        return redirect()->route('Users.index');
    }
    public function destroy($id){
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('Users.index');
    }
}

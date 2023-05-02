<?php

namespace App\Http\Controllers;

use App\Models\NewUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class NewUserController extends Controller
{
    public function index()
    {
        $users = NewUser::all();
        return view('home', ['newusers' => $users]);
    }

    public function create(Request $request)
    {
        $user = new NewUser();
        $user->name = $request->name;
        $user->email = $request->name;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect('/')->with('message','User Info created Successfully');

    }

    public function edit($id)
    {
        $user = NewUser::find($id);
        return view('editform', ['newuser' => $user]);

    }

    public function update(Request $request, $id)
    {
        $user = NewUser::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect('/')->with('message','User Info Updated Successfully');

    }

    public function destroy($id)
    {
        NewUser::destroy($id);
        return redirect('/')->with('message','User Info deleted Successfully');
    }
}

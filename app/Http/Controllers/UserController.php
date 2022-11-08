<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){

        $user = user::all();
        return view('backend.user.index',compact('user'));
    }

    public function create(){
        return view('backend.user.create');
    }

    public function store(Request $request){

        $input = $request->all();

        if ($image = $request->file('picture')) {
            $destinationPath = 'images/';
            $adminImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $adminImage);
            $input['picture'] = $adminImage;
        }

        $user =  User::create([
            'name' => $input['name'],
            'picture' => $input['picture'],
            'address' => $input['address'],
            'contact' => $input['contact'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            'admin' => $input['admin'],
        ]);

        return redirect()->route('user.index');

    }

    public function destroy($id){

        $user = user::findOrFail($id);
        $user->delete();

        return redirect()->route('user.index');
    }
}

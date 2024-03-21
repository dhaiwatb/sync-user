<?php

namespace App\Http\Controllers;

use App\Models\User;
use Validator;
use Illuminate\Http\Request;

class UsersController extends Controller
{
	public function index(){
		return view('create_user');
	}
	public function createUser(Request $request){
		$validator = Validator::make($request->all(),[
		// $validator = $request->validate([

			'email' => 'required|email|unique:users,email',
			'username' => 'required',
			'contact_number' => 'required|max:10',
			'image' => 'required|mimes:jpg,png,jpeg|max:4000'
		]);
		
		if($validator->fails()){
			return back()->withInput()->withErrors($validator);
		}
		else{
			$file_name = '';
			if($request->hasFile('image')){
				$image = $request->file('image');
				$file_name = $image->getClientOriginalName();

				$image->storeAs('/public/users_image/', $file_name);
			}

			User::create([
				'name' => $request->input('username'),
				'email' => $request->input('email'),
				'contact_number' => $request->input('contact_number'),
				'image' => $file_name
			]);

			return redirect()->route('user.list')->with('success', 'User created!');

		}
	}
	public function listUsers(){
		$users = User::get()->toArray();
		return view('list_users', ['users' => $users]);
	}
}

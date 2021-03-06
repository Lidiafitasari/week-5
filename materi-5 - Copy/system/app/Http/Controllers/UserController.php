<?php 

namespace App\Http\Controllers;
use App\User;

class UserController extends controller{
	function index(){
		$data['list_user'] = User::all();
		return view('user.index', $data);
	}
	function create(){
		return view('user.create');
	}
	function store(){
		$user= new User;
		$user-> nama = request('nama');
		$user-> username= request('username');
		$user-> email = request('email');
		$user-> password = bcrypt(request('password'));
		$user->save();

		return redirect('user')->with('success','Data berhasil ditambahkan');
	}
	function show(User $user){
		$data['user'] = $user;
		return view('user.show', $data);
	}
	function edit(User $user){
		$data['user'] = $user;
		return view('user.edit', $data);
	}
	function update(User $user){
		$user= new User;
		$user-> nama = request('nama');
		$user-> username= request('username');
		$user-> email = request('email');
		$user-> password = bcrypt(request('password'));
		if(request('password')) $user->password = bcrypt(request('password'));
		$user->save();
	return redirect('user')->with('success','Data berhasil diedit');
		
	}
	function destroy(User $user){
		$user->delete();

		return redirect('user')->with('denger', 'Data berhasil ditambahkan');	
	}
}
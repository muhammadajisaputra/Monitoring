<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
	public function Index(){
		return view('admin.adminlte');
	}

	public function Table(){
		return view('tables.tables');
	}
}

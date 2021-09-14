<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function index()
    {
    	
    	$users = DB::table('users')
		->orderBy('updated_at','desc')
		->whereNotNull('message')
		->get();
 
    	
    	return view('welcome',['users' => $users]);
 
    }
}

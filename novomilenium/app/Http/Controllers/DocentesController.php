<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\MeuBlog;

class DocentesController extends Controller
{
    public function index(){

    	$posts = MeuBlog::orderBy('created_at', 'desc')->paginate(2);
    	return view('docentes',array('blogs' => $posts));
    }
}
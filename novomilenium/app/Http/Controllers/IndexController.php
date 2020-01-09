<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\MeuBlog;
use Mail;

class IndexController extends Controller
{
    public function index(){

    	$posts = MeuBlog::orderBy('created_at', 'desc')->paginate(2);
    	return view('index',array('blogs' => $posts));
    }

    public function enviar(Request $request){
    	$dadosEmail = array(
         	'nome' => $request->input('nome'),
         	'sobrenome' => $request->input('sobrenome'),
         	'serie' =>$request->input('serie'),
         	'fone' =>$request->input('fone'),
         	'msg' => $request->input('msg'),
         	 );

         Mail::send('email.contatoIndex', $dadosEmail, function($message){
         	$message->from('novomilenium@novomilenium.com', 'Milenium');
         	$message->subject('Mensagem Do Site');
         	$message->to('waltinhocalegari@hotmail.com');
         });

         return redirect('/')->with('success', 'Enviado com sucesso');
    }
}


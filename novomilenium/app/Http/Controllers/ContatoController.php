<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\MeuBlog;
use Mail;

class ContatoController extends Controller
{
    public function index(){

    	$posts = MeuBlog::orderBy('created_at', 'desc')->paginate(2);
    	return view('contato',array('blogs' => $posts));
    }

    public function enviar(Request $request){
         
         $dadosEmail = array(
         	'nome' => $request->input('nome'),
         	'email' => $request->input('email'),
         	'assunto' =>$request->input('assunto'),
         	'msg' => $request->input('msg'),
         	 );

         Mail::send('email.contato', $dadosEmail, function($message){
         	$message->from('formulario@waltinhocalegari.com', 'Walter Calegari');
         	$message->subject('Mensagem Do Site');
         	$message->to('waltinhocalegari@hotmail.com');
         });

         return redirect('contato')->with('success', 'Enviado com sucesso');
    	
    }

    
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\MeuBlog;

class BlogController extends Controller
{
    public function index(){
    	$posts = MeuBlog::orderBy('created_at', 'desc')->paginate(6);

    	return view('blog.blog',array('blogs' => $posts, 'buscar' => null));
    }

    public function show($id){
    	$post = MeuBlog::find($id);

    	return view('blog.show',array('blog' => $post));
    }

    public function create(){

        if (Auth::check()) {
            return view('blog.create');
        }else{
    	return redirect('login');
        }
    }

    public function store(Request $request){

        $this->validate($request,[
        	'titulo' => 'required|unique:meu_blogs|min:3',
        	'descricao' => 'required|unique:meu_blogs|min:3']);

    	$post = new MeuBlog();

    	$post->titulo = $request->input('titulo');
    	$post->descricao = $request->input('descricao');
        $post->descricao_1 = $request->input('descricao_1');

    	if ($post->save()) {
    		return redirect('blog/create')->with('success', 'Postado com sucesso');
    	}
    }

     public function edit($id){
        if (Auth::check()) {
            $post = MeuBlog::find($id);
            return view('blog.edit',compact('post' , 'id'));
        }else{
           return redirect('login');
        }
    	

    	
    }

    public function update(Request $request, $id){

    	$post = MeuBlog::find($id);


        $this->validate($request,[
        	'titulo' => 'required|unique:meu_blogs|min:3',
        	'descricao' => 'required|unique:meu_blogs|min:3'
        ]);

        if ($request->hasFile('imagem')) {
        	$imagem = $request->file('imagem');
        	$nomearquivo = md5($id).".".$imagem->getClientOriginalExtension();
        	$request->file('imagem')->move(public_path('images/blog/'),
        	$nomearquivo);
        }

        

    	

    	$post->titulo = $request->get('titulo');
    	$post->descricao = $request->get('descricao');
        $post->descricao_1 = $request->get('descricao_1');

    	if ($post->save()) {
    		return redirect('blog/'.$id.'/edit')->with('success', 'Atualizado com sucesso');
    	}
    }

    public function destroy($id){

           $post = MeuBlog::find($id);
           if (file_exists("images/blog/".md5($id).".jpg")) {
                 unlink("images/blog/".md5($id).".jpg");
             }  
           $post->delete();
           return redirect()->back()->with('success', 'Deletado com sucesso');
    }

    public function busca(Request $request){
        
        $buscaInput = $request->input('busca');

        $post = MeuBlog::where('titulo', 'LIKE', '%'.$buscaInput.'%')
                              ->orwhere('descricao', 'LIKE', '%'.$buscaInput.'%') 
                              ->paginate(6);
                return  view('blog.blog',array('blogs' => $post, 'buscar' => $buscaInput));             
    }

    
}

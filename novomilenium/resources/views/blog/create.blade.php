@extends('layout.app')
@section('title','Adicionar post')
@section('content')

<div>
<h1 class="mb-3">Adicionar um Post</h1>
@if($message = Session::get('success'))
  <div class="alert alert-success">
    {{$message}}
  </div>
@endif
@if(count($errors)  > 0)
  <div class="alert alert-danger"> 
   <ul>
     @foreach($errors->all() as $error)
     <li>{{$error}}</li>
     @endforeach
   </ul>
  </div>
@endif
  <form method="POST" action="{{url('blog')}}">
    @csrf
    <div class="form-group mb-3">
        <label for="titulo">Título</label>
        <input type="text" class="form-control"  name="titulo" placeholder="Digite o Título" required>
    </div>
    <div class="form-group mb-3">
        <label for="descricao">Descrição</label>
        <textarea class="form-control" id="descricao" name="descricao" rows="3" placeholder="Digite uma breve descrição " required></textarea>
    </div>
     <div class="form-group mb-3">
        <label for="descricao">Descrição topo</label>
        <textarea class="form-control" id="descricao" name="descricao_1" rows="3" placeholder="Digite uma breve descrição " required></textarea>
    </div>
    
    <button type="submit" class="btn btn-primary">Postar</button>
  </form>
 </div>   
    
		
@endsection    
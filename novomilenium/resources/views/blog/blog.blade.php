@extends('layout.app')
@section('title', 'Blog')
@section('content')
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/home/fundo11.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Nosso Blog</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Blog <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
		
		<section class="ftco-section bg-light">
			<div class="container">
        @if(Auth::check())
          @if(Auth::user()->name  == 'colegiomilenium')
           <a href="{{url('blog/create')}}" class="btn ">Criar Post</a>
          @endif
        @endif  
				<div class="row">

           
          <div class="sidebar-box">
              <form action="{{url('blog/busca')}}" class="search-form" method="POST">
                @csrf
                <div class="form-group">
                  <span class="icon icon-search"></span>
                  <input type="text" class="form-control" placeholder="Pesquisar" value="{{$buscar}}" name="busca">
                </div>
                <button class="btn btn-primary" type="submit">Busca</button>
              </form>
            </div> 
         
          

          @foreach ($blogs as $post)
          <div class="col-md-6 col-lg-4 ftco-animate">
            <div class="blog-entry">
              <a href="blog-single.html" class="block-20 d-flex align-items-end" style="background-image: url({{url('images/blog/'.md5($post->id).'.jpg')}});">
								<div class="meta-date text-center p-2">
                  <span class="day">{{date("d/m/y ",strtotime($post->created_at))}}</span>
                  
                </div>
              </a>
              <div class="text bg-white p-4">
                <h3 class="heading"><a href="{{URL::to('blog')}}/{{$post->id}}">{{$post->titulo}}</a></h3>
                <p>{{$post->descricao_1}}</p>
                <div class="d-flex align-items-center mt-4">
	                <p class="mb-0"><a href="{{URL::to('blog')}}/{{$post->id}}" class="btn btn-secondary">Saiba Mais <span class="ion-ios-arrow-round-forward"></span></a></p>
	                <p class="ml-auto mb-0">
	                	<a href="#" class="mr-2">Admin</a>
	                	<a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
	                </p>
                </div>
              </div>
            </div>

            @if(Auth::check())
             @if(Auth::user()->name  == 'colegiomilenium')
            <form method="POST"  action="{{action('BlogController@destroy',$post->id)}}">
              @csrf
              <input type="hidden" name="_method" value="DELETE">
              <a href="{{URL::to('blog/'.$post->id.'/edit')}}" class="btn btn-primary">Editar</a>
              <button class="btn btn-danger">Excluir</button>
            </form> 
              @endif
            @endif 
          </div>

          @endforeach

        </div>


        <div class="row  my-5">
          <div class="col text-center">
            <div class="">
              <div class="container">
                 <div class="row justify-content-sm-center">
                   <div class="col-sm-4">&nbsp</div>
                   <div class="col-md-auto">{{$blogs->links()}}</div>
                   <div class="col-sm-4">&nbsp</div>        
                </div>
            </div>
            </div>
          </div>
        </div>
		

    	</div>
		</section>


     
@endsection		
   
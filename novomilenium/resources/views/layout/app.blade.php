<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Colégio NM - @yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="{{URL::to('https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900')}}" rel="stylesheet">
    <link href="{{URL::to('https://fonts.googleapis.com/css?family=Fredericka+the+Great')}}" rel="stylesheet">

    <link rel="stylesheet" href="{{URL::to('css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::to('css/animate.css')}}">
    
    <link rel="stylesheet" href="{{URL::to('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{URL::to('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{URL::to('css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{URL::to('css/aos.css')}}">

    <link rel="stylesheet" href="{{URL::to('css/ionicons.min.css')}}">
    
    <link rel="stylesheet" href="{{URL::to('css/flaticon.css')}}">
    <link rel="stylesheet" href="{{URL::to('css/icomoon.css')}}">
    <link rel="stylesheet" href="{{URL::to('css/style.css')}}">
  </head>
  <body>
	  <div class="py-2 bg-primary">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-start align-items-center px-3 px-md-0">
	    		<div class="col-lg-12 d-block">
		    		<div class="row d-flex">
			    		<div class="col-md-5 pr-4 d-flex topper align-items-center">
			    			<div class="icon bg-fifth mr-2 d-flex justify-content-center align-items-center"><span class="icon-map"></span></div>
						    <span class="text">Rua Ricardo Fogaroli, 440 Vila S Paulo, 19280-000 Teodoro Sampaio, Sao Paulo, Brazil</span>
					    </div>
					    <div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon bg-secondary mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
						    <span class="text">colegionovomilenium@email.com</span>
					    </div>
					    <div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon bg-tertiary mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						    <span class="text">+55 (18) 3282-3339</span>
					    </div>
				    </div>
			    </div>
		    </div>
		  </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco_navbar ftco-navbar-light" id="ftco-navbar">
	    <div class="container d-flex align-items-center">
	    	<a class="navbar-brand" href="/"><img src="{{URL::to('images/home/logo2.jpg')}}"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	        	<li class="nav-item active"><a href="/" class="nav-link pl-0">Home</a></li>
	        	<li class="nav-item"><a href="{{url('sobre')}}" class="nav-link">Sobre</a></li>
	        	<li class="nav-item"><a href="docentes" class="nav-link">Docentes</a></li>
	        	<li class="nav-item"><a href="cursos" class="nav-link">Cursos</a></li>
	        	<li class="nav-item"><a href="pricing.html" class="nav-link">Responsaveis</a></li>
	        	<li class="nav-item"><a href="{{url('blog')}}" class="nav-link">Blog</a></li>
	          <li class="nav-item"><a href="contato" class="nav-link">Contato</a></li>

             @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Entrar') }}</a>
                            </li>
                           
                       <!-- @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registrar') }}</a>
                                </li>
                            @endif -->

                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Sair') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest

	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
   @yield('content')
		
    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5">
            	<h2 class="ftco-heading-2">Tem Uma Pergunta?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">Rua Ricardo Fogaroli, 440 Vila S Paulo, 19280-000 Teodoro Sampaio, Sao Paulo, Brazil</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+55 (18) 3282-3339</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">colegionovomilenium@email.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5">
              <h2 class="ftco-heading-2">Recentes Do Blog</h2>
              
              @foreach($blogs  as $blogs)
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url({{url('images/blog/'.md5($blogs->id).'.jpg')}});"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">{{$blogs->titulo}}</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> {{$blogs->created_at}}</a></div>
                    
                  </div>
                </div>
              </div>
              @endforeach

             
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5 ml-md-4">
              <h2 class="ftco-heading-2">Links</h2>
              <ul class="list-unstyled">
                <li><a href="/"><span class="ion-ios-arrow-round-forward mr-2"></span>Home</a></li>
                <li><a href="sobre"><span class="ion-ios-arrow-round-forward mr-2"></span>Sobre</a></li>
                <li><a href="cursos"><span class="ion-ios-arrow-round-forward mr-2"></span>Cursos</a></li>
                <li><a href="matriculas"><span class="ion-ios-arrow-round-forward mr-2"></span>Matriculas</a></li>
                <li><a href="contato"><span class="ion-ios-arrow-round-forward mr-2"></span>Contato</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5">
            	<h2 class="ftco-heading-2">Saiba Mais!</h2>
              <form action="#" class="subscribe-form">
                <div class="form-group">
                  <input type="text" class="form-control mb-2 text-center" placeholder="Entre com email ">
                  <input type="submit" value="Enviar" class="form-control submit px-3">
                </div>
              </form>
            </div>
            <div class="ftco-footer-widget mb-5">
            	<h2 class="ftco-heading-2 mb-0">Conecte - se Com Nós</h2>
            	<ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos os direitos reservados |  <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank"></a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="{{URL::to('js/jquery.min.js')}}"></script>
  <script src="{{URL::to('js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{URL::to('js/popper.min.js')}}"></script>
  <script src="{{URL::to('js/bootstrap.min.js')}}"></script>
  <script src="{{URL::to('js/jquery.easing.1.3.js')}}"></script>
  <script src="{{URL::to('js/jquery.waypoints.min.js')}}"></script>
  <script src="{{URL::to('js/jquery.stellar.min.js')}}"></script>
  <script src="{{URL::to('js/owl.carousel.min.js')}}"></script>
  <script src="{{URL::to('js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{URL::to('js/aos.js')}}"></script>
  <script src="{{URL::to('js/jquery.animateNumber.min.js')}}"></script>
  <script src="{{URL::to('js/scrollax.min.js')}}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{URL::to('js/google-map.js')}}"></script>
  <script src="{{URL::to('js/main.js')}}"></script>
    
  </body>
</html>
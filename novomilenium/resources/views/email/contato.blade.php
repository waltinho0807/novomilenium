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
     

<div class="row">
		<h4 class="mb-3">Contato pelo Site</h4>
		<table class="table table-bordered">
		  <tbody>
		    <tr>
		      <td><strong>Nome:</strong></td>
		      <td>{{$nome}}</td>
		    </tr>
		    <tr>
		      <td><strong>Email:</strong></td>
		      <td>{{$email}}</td>
		    </tr>
		    <tr>
		      <td><strong>Assunto:</strong></td>
		      <td>{{$assunto}}</td>
		    </tr>
		    <tr>
		      <td><strong>Mensagem:</strong></td>
		      <td>{{$msg}}</td>
		    </tr>
		    <tr>
		    </tr>
		  </tbody>
		</table>
	</div>


	
  </body>
</html>

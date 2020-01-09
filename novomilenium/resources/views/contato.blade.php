@extends('layout.app')
@section('title','Contato')
@section('content')
    

  
  <section class="hero-wrap hero-wrap-2" style="background-image: url('images/home/fundo12.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread"> Contato</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Contato <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section contact-section">
      <div class="container">
        <div class="row d-flex mb-5 contact-info">
          <div class="col-md-3 d-flex">
          	<div class="bg-light align-self-stretch box p-4 text-center">
          		<h3 class="mb-4">Endereço</h3>
	            <p>Rua Ricardo Fogaroli, 440 Vila S Paulo, 19280-000 Teodoro Sampaio, Sao Paulo, Brazil</p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="bg-light align-self-stretch box p-4 text-center">
          		<h3 class="mb-4">Telefone</h3>
	            <p><a href="tel://551832823339">+55 18 3282-3339</a></p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="bg-light align-self-stretch box p-4 text-center">
          		<h3 class="mb-4">Email </h3>
	            <p><a href="mailto:info@yoursite.com">Colegionovomilenium@hot.com</a></p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="bg-light align-self-stretch box p-4 text-center">
          		<h3 class="mb-4">Website</h3>
	            <p><a href="#">novomilenium.com.br</a></p>
	          </div>
          </div>
        </div>
      </div>
    </section>
		
		<section class="ftco-section ftco-no-pt ftco-no-pb contact-section">
			<div class="container">
				<div class="row d-flex align-items-stretch no-gutters">
					<div class="col-md-6 p-4 p-md-5 order-md-last bg-light">
						<form action="{{url('contato/enviar')}}" method="POST">
              @csrf
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Nome" name="nome">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Email" name="email">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Assunto" name="assunto">
              </div>
              <div class="form-group">
                <textarea name="msg"  cols="30" rows="7" class="form-control" placeholder="Mensagem" ></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Enviar Mensagem" class="btn btn-primary py-3 px-5">
              </div>
            </form>
					</div>
					<div class="col-md-6 d-flex align-items-stretch">
						<div id="map"></div>
					</div>
				</div>
			</div>
		</section>

@endsection

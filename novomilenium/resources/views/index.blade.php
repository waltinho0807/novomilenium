@extends('layout.app')
@section('title', 'Blog')
@section('content')


 <!--Section 1 -->
  <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image:url(images/home/fundo2.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-8 text-center ftco-animate">
            <h1 class="mb-4">Crianças são os melhores <span>Exploradores do Mundo</span></h1>
            <p><a href="sobre.php" class="btn btn-secondary px-4 py-3 mt-3">Saiba Mais</a></p>
          </div>
        </div>
        </div>
      </div>

      <div class="slider-item" style="background-image:url(images/home/fundo1.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-8 text-center ftco-animate">
            <h1 class="mb-4">Ensino Perfeito<span> Para Seus Filhos</span></h1>
            <p><a href="sobre.php" class="btn btn-secondary px-4 py-3 mt-3">Saiba Mais</a></p>
          </div>
        </div>
        </div>
      </div>
    </section>
  
  <!--Section 2-->

  <section class="ftco-services ftco-no-pb">
       <div class="container-wrap">
	<div class="row no-gutters">
          <div class="col-md-3 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-primary">
            <div class="media block-6 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-teacher"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Professores Qualificados</h3>
                <p>Nossos professores são experientes e qualificados com amplo curriculo academico .</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-tertiary">
            <div class="media block-6 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-reading"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Educação Especial</h3>
                <p>Temos varias ativides extra classe e promovemos sempre a integração dos pais.</p>
              </div>
            </div>    
          </div>
          <div class="col-md-3 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-fifth">
            <div class="media block-6 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-books"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Biblioteca &amp; Informatica</h3>
                <p>Alunos tem acesso a biblioteca e um amplo laboratorio de informatica.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-quarternary">
            <div class="media block-6 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-diploma"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Ensino Forte</h3>
                <p>Educação de qualidade comprovada, com aprovações nos melhores vestibulares.</p>
              </div>
            </div>      
          </div>
        </div>
      </div>
  </section>
  
  <!--Section 3 Sobre-->
  
  <section class="ftco-section ftco-no-pt ftc-no-pb">
			<div class="container">
				<div class="row">
					<div class="col-md-5 order-md-last wrap-about py-5 wrap-about bg-light">
						<div class="text px-4 ftco-animate">
	          	<h2 class="mb-4">Bem Vindo A Nossa Escola</h2>
                                                        <p>O Colégio Novo Milleniun está com as Matrículas Abertas para o ano letivo de 2020.A partir do ano que vem o Colégio tem turmas do Maternal I, com idade de 02 anos para a Educação Infantil.</p>
							<p>Faça-nos uma visita, venha conhecer a nossa infraestrutura, nosso material e a nossa política de descontos com os nossos convênios.</p>
                                                        <p>O futuro do seu filho começa aqui!</p>
							<p><a href="sobre.php" class="btn btn-secondary px-4 py-3">Saiba Mais</a></p>
						</div>
					</div>
					<div class="col-md-7 wrap-about py-5 pr-md-4 ftco-animate">
          	<h2 class="mb-4">O Que Nos Oferecemos</h2>
						<p>Um ensino forte e de qualidade, ampla infra estrutura, todo suporte para pais e alunos para um ensino eficaz  .</p>
						<div class="row mt-5">
							<div class="col-lg-6">
								<div class="services-2 d-flex">
									<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-security"></span></div>
									<div class="text">
										<h3>Segurança Primeiro</h3>
										<p>Nossa estrutura é preparada para os desafios acadêmicos e para o bem-estar de todo o núcleo escolar.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="services-2 d-flex">
									<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-reading"></span></div>
									<div class="text">
										<h3>Classes Regulares</h3>
										<p>Para atividades extra, e reforço.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="services-2 d-flex">
									<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-diploma"></span></div>
									<div class="text">
										<h3>Professores qualificados</h3>
										<p>Uma forte equipe de docentes, para um ensino de qualidade.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="services-2 d-flex">
									<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-education"></span></div>
									<div class="text">
										<h3>Classes Suficientes</h3>
										<p>Salas para todas as turmas, equipadas com todo conforto para os launos.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="services-2 d-flex">
									<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-jigsaw"></span></div>
									<div class="text">
										<h3>Atividades Criativas</h3>
										<p>Proporcionamos atividades extra classe, e sempre envolvendo familiares.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="services-2 d-flex">
									<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-kids"></span></div>
									<div class="text">
										<h3>Esportes e Diverção</h3>
										<p>Temos quadra coberta e playground na nossa estrutura.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
  
  
  <!--Section 4 -->
  
  <section class="ftco-intro" style="background-image: url(images/home/fundo4.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-9">
						<h2>Traga Seu Filho Para Estudar Com A Gente</h2>
						<p class="mb-0">Uma simples lembrança para guardar na memória os melhores amigos e os momentos que passamos juntos neste ano que se encerra.</p>
					</div>
					<div class="col-md-3 d-flex align-items-center">
						<p class="mb-0"><a href="#" class="btn btn-secondary px-4 py-3">Estude conosco</a></p>
					</div>
				</div>
			</div>	
  </section>
  
  <!--Section 4-->
  
  <section class="ftco-section ftco-no-pb">
			<div class="container">
				<div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section ftco-animate">
            <h2 class="mb-4"><span>Professores</span> Qualificados</h2>
            <p>Os melhores professores são aqueles que te mostram para onde olhar, mas não te dizem o que realmente se deve enxergar.</p>
          </div>
        </div>	
				<div class="row">
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url(images/home/prof3.jpg);"></div>
							</div>
							<div class="text pt-3 text-center">
								<h3>Lucas Jorge</h3>
								<span class="position mb-2">Prof. Matemática</span>
								<div class="faded">
									<p>Atualmente é aluno de mestrado em matemática pela Unesp.Professor efetivo da rede pública Estadual desde 2013.</p>
									<ul class="ftco-social text-center">
		                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
		              </ul>
	              </div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url(images/home/prof2.jpg);"></div>
							</div>
							<div class="text pt-3 text-center">
								<h3>Kallil Jorge</h3>
								<span class="position mb-2">Prof. Matematica</span>
								<div class="faded">
									<p>No Colégio ministra aulas  de Matemática, aulas de Informática e Física para o Ensino Médio, além de professoe também é Eng. Civil.</p>
									<ul class="ftco-social text-center">
		                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
		              </ul>
	              </div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url(images/home/prof1.jpg);"></div>
							</div>
							<div class="text pt-3 text-center">
								<h3>Mayara Caroline</h3>
								<span class="position mb-2">Prof. Artes</span>
								<div class="faded">
									<p>Cursou Arte pela Unoeste (Universidade do Oeste Paulista), graduando-se em 2009.</p>
									<ul class="ftco-social text-center">
		                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
		              </ul>
	              </div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url(images/home/prof4.jpg);"></div>
							</div>
							<div class="text pt-3 text-center">
								<h3>Renata Ellem</h3>
								<span class="position mb-2">Prof. Educação Física</span>
								<div class="faded">
									<p>graduou-se em Licenciatura Plena em Educação Física pela UNOESTE em 2009. Pós-graduada em Educação Física Escolar pela UCAM.</p>
									<ul class="ftco-social text-center">
		                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
		              </ul>
	              </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
  
  <!--Section 5 -->
  
  <section class="ftco-section">
			<div class="container">
				<div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section ftco-animate">
            <h2 class="mb-4"><span>Atividades</span> Extra</h2>
            <p>As atividades extracurriculares possuem o poder de fazer aflorar determinados aspectos nas crianças e até mesmo trabalhar dificuldades e fragilidades.</p>
          </div>
        </div>	
				<div class="row">
					<div class="col-md-6 course d-lg-flex ftco-animate">
						<div class="img" style="background-image: url(images/home/informatica.jpg);"></div>
						<div class="text bg-light p-4">
							<h3><a href="#">Informática</a></h3>
							<p class="subheading"><span>Periodo:</span> Ano Letivo</p>
							<p>As aulas de informática trazem inúmeros benefícios para os alunos. A tecnologia motiva os alunos e facilita a sua capacidade de atenção.</p>
						</div>
					</div>
					<div class="col-md-6 course d-lg-flex ftco-animate">
						<div class="img" style="background-image: url(images/home/baleaereo.jpg);"></div>
						<div class="text bg-light p-4">
							<h3><a href="http://milenium.test/blog/18">Balé Aereo</a></h3>
							<p class="subheading"><span>Periodo:</span> Ano Letivo</p>
							<p>O Balé Aéreo une a dança, pilates e acrobacias de circo em um só método. Aqui se aprende brincando.</p>
						</div>
					</div>
					<div class="col-md-6 course d-lg-flex ftco-animate">
						<div class="img" style="background-image: url(images/home/violao.jpg);"></div>
						<div class="text bg-light p-4">
							<h3><a href="#">Violão</a></h3>
							<p class="subheading"><span>Periodo:</span> Ano Letivo</p>
							<p>Ao tocar violão, a criança aprende a socializar, a expressar seus sentimentos e a enriquecer seu universo.</p>
						</div>
					</div>
					<div class="col-md-6 course d-lg-flex ftco-animate">
						<div class="img" style="background-image: url(images/home/judo.jpg);"></div>
						<div class="text bg-light p-4">
							<h3><a href="#">Judô</a></h3>
							<p class="subheading"><span>Class time:</span> Ano Letivo</p>
							<p>Os seus principais objetivos são fortalecer o físico, a mente e o espírito de forma integrada, além de desenvolver técnicas de defesa pessoal.</p>
						</div>
					</div>
				</div>
			</div>
		</section>
  
  <!--Section6-->
  
  <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/home/fundo7.jpg);" data-stellar-background-ratio="0.5">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section heading-section-black ftco-animate">
            <h2 class="mb-4"><span>Ha mais de </span> 20 anos</h2>
            <p>Seriedade e Competência em tudo o que faz!Ensino Infantil, Ensino Fundamental, Ensino Médio, Ensino Superior - EAD Unicesumar</p>
          </div>
        </div>	
    		<div class="row d-md-flex align-items-center justify-content-center">
    			<div class="col-lg-10">
    				<div class="row d-md-flex align-items-center">
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		            	<div class="icon"><span class="flaticon-doctor"></span></div>
		              <div class="text">
		                <strong class="number" data-number="25">0</strong>
		                <span>Professores</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		            	<div class="icon"><span class="flaticon-doctor"></span></div>
		              <div class="text">
		                <strong class="number" data-number="2000">0</strong>
		                <span>Alunos</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		            	<div class="icon"><span class="flaticon-doctor"></span></div>
		              <div class="text">
		                <strong class="number" data-number="564">0</strong>
		                <span>Pais Felizes</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		            	<div class="icon"><span class="flaticon-doctor"></span></div>
		              <div class="text">
		                <strong class="number" data-number="30">0</strong>
		                <span>Premios</span>
		              </div>
		            </div>
		          </div>
	          </div>
          </div>
        </div>
    	</div>
    </section>
  
  <!--Section 7 -->
  
  <section class="ftco-section testimony-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section ftco-animate">
            <h2 class="mb-4"><span>O Que Os Pais</span> Dizem Sobre Nós</h2>
            <p>Depoimento e recomendações de alguns pais cujo os filhos já estudm com a gente a algum tempo. Venha você também fazer parte desse time. </p>
          </div>
        </div>
        <div class="row ftco-animate justify-content-center">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel">
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img mr-4" style="background-image: url(images/home/pais1.jpg)">
                  </div>
                  <div class="text ml-2 bg-light">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                    <p>Meus filhos estudam lá. São três e estão super satisfeitos.Melhor escola da região.</p>
                    <p class="name">Emilio Cesar</p>
                    <span class="position">Pai</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img mr-4" style="background-image: url(images/home/pais2.jpg)">
                  </div>
                  <div class="text ml-2 bg-light">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                    <p>Simplesmente , maravilhosa . Muita gratidão por se preocuparem com o aprendizado dos meus filhos .</p>
                    <p class="name">Adriana Mussi</p>
                    <span class="position">Mãe</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img mr-4" style="background-image: url(images/home/pais3.jpg)">
                  </div>
                  <div class="text ml-2 bg-light">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                    <p>Ensino de qualidade, dedicação e cuidado com as nossas crianças! Professores muito capacitados.</p>
                    <p class="name">Andréa Soares Pires</p>
                    <span class="position">Mãe</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img mr-4" style="background-image: url(images/home/pais4.jpg)">
                  </div>
                  <div class="text ml-2 bg-light">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                    <p>Melhor escola com acolhimento, respeito e acessibilidade atitudinal e arquitetônica.</p>
                    <p class="name">Vilma Herling</p>
                    <span class="position">Mãe</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img mr-4" style="background-image: url(images/home/pais5.jpg)">
                  </div>
                  <div class="text ml-2 bg-light">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                    <p>Ensino de qualidade.professores excelentes.</p>
                    <p class="name">Lídia Cardoso</p>
                    <span class="position">Mother</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  
  <!--Section 8-->
  
  <section class="ftco-section ftco-consult ftco-no-pt ftco-no-pb" style="background-image: url(images/home/fundo9.jpg);" data-stellar-background-ratio="0.5">
    	<div class="container">
    		<div class="row justify-content-end">
    			<div class="col-md-6 py-5 px-md-5 bg-primary">
	          <div class="heading-section heading-section-white ftco-animate mb-5">
	            <h2 class="mb-4">Entre Em Contato</h2>
	            <p>Já pensou matricular seu filho em um dos melhores Colégios do Município, entre em contato e conheça nossos descontos.</p>
	          </div>
	          <form action="{{url('contatoIndex/enviar')}}" method="POST" class="appointment-form ftco-animate">
	          	@csrf
	    				<div class="d-md-flex">
		    				<div class="form-group">
		    					<input type="text" class="form-control" placeholder="Nome" name="nome">
		    				</div>
		    				<div class="form-group ml-md-4">
		    					<input type="text" class="form-control" placeholder="Sobrenome" name="sobrenome">
		    				</div>
	    				</div>
	    				<div class="d-md-flex">
	    					<div class="form-group">
		    					<div class="form-field">
          					<div class="select-wrap">
                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                      <select name="" id="" class="form-control" name="serie">
                      	<option value="">Selecione a Serie</option>
                        <option value="">Maternal</option>
                        <option value="">Infantil</option>
                        <option value="">Fundamental</option>
                        <option value="">Medio</option>
                        <option value="">Superior-EAD</option>
                      </select>
                    </div>
		              </div>
		    				</div>
	    					<div class="form-group ml-md-4">
		    					<input type="text" class="form-control" placeholder="Fone" name="fone">
		    				</div>
	    				</div>
	    				<div class="d-md-flex">
	    					<div class="form-group">
		              <textarea name="" id="" cols="30" rows="2" class="form-control" placeholder="Mensagem" name="msg"></textarea>
		            </div>
		            <div class="form-group ml-md-4">
		              <input type="submit" value="Enviar" class="btn btn-secondary py-3 px-4">
		            </div>
	    				</div>
	    			</form>
    			</div>
        </div>
    	</div>
    </section>
  
  <!--Section 9-->
  
  <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section ftco-animate">
            <h2 class="mb-4"><span>MATRÍCULAS </span> ABERTAS!!!</h2>
            <p>Nossos alunos têm aulas de Língua Inglesa a partir do Maternal e no 1 ano do Ensino Fundamental, além do Inglês é introduzido  Ensino de Língua Espanhola.</p>
          </div>
        </div>
    		<div class="row">
        	<div class="col-md-6 col-lg-3 ftco-animate">
        		<div class="pricing-entry bg-light pb-4 text-center">
        			<div>
	        			<h3 class="mb-3">Educação Infantil</h3>
	        			<p><span class="price"></span> <span class="per"></span></p>
	        		</div>
	        		<div class="img" style="background-image: url(images/home/preco6.jpg);"></div>
	        		<div class="px-4">
	        			<p>A partir do ano que vem o Colégio tem turmas do Maternal I, com idade de 02 anos.</p>
        			</div>
        			<p class="button text-center"><a href="http://milenium.test/blog/13" class="btn btn-primary px-4 py-3">Saiba Mais</a></p>
        		</div>
        	</div>
        	<div class="col-md-6 col-lg-3 ftco-animate">
        		<div class="pricing-entry bg-light pb-4 text-center">
        			<div>
	        			<h3 class="mb-3">Fundamental I e II</h3>
	        			<p><span class="price"></span> <span class="per"></span></p>
	        		</div>
	        		<div class="img" style="background-image: url(images/home/preco7.jpg);"></div>
        			<div class="px-4">
	        			<p>Nosso material do Ensino Fundamental do Ético propõe uma abordagem contextualizada.</p>
        			</div>
        			<p class="button text-center"><a href="http://milenium.test/blog/14" class="btn btn-secondary px-4 py-3">Saiba Mais</a></p>
        		</div>
        	</div>
        	<div class="col-md-6 col-lg-3 ftco-animate">
        		<div class="pricing-entry bg-light active pb-4 text-center">
        			<div>
	        			<h3 class="mb-3">Médio</h3>
	        			<p><span class="price"></span> <span class="per"></span></p>
	        		</div>
	        		<div class="img" style="background-image: url(images/home/preco4.jpg);"></div>
        			<div class="px-4">
	        			<p>E como Colégio nos incentivamos e apoiamos nossos alunos a realizarem seus sonhos.</p>
        			</div>
        			<p class="button text-center"><a href="http://milenium.test/blog/15" class="btn btn-tertiary px-4 py-3">Saiba Mais</a></p>
        		</div>
        	</div>
        	<div class="col-md-6 col-lg-3 ftco-animate">
        		<div class="pricing-entry bg-light pb-4 text-center">
        			<div>
	        			<h3 class="mb-3">Superior</h3>
	        			<p><span class="price"></span> <span class="per"></span></p>
	        		</div>
	        		<div class="img" style="background-image: url(images/home/preco5.jpg);"></div>
        			<div class="px-4">
	        			<p>Você sabia que o Colégio Novo Milleniun é polo Ead da UniCesumar? A graduação que você precisa.</p>
        			</div>
        			<p class="button text-center"><a href="http://milenium.test/blog/16" class="btn btn-quarternary px-4 py-3">Saiba Mais</a></p>
        		</div>
        	</div>
        </div>
    	</div>
    </section>
  
  <!--Section 10-->
  
  <section class="ftco-section bg-light">
			<div class="container">
				<div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section ftco-animate">
            <h2 class="mb-4"><span>Posts</span> Recentes</h2>
            <p>Acompanhe nosso Blog, e fique por dentro de tudo que acontece no colégio, e as novidades que nossa escola pode oferecer. </p>
          </div>
        </div>
				<div class="row">
          <div class="col-md-6 col-lg-4 ftco-animate">
            <div class="blog-entry">
              <a href="blog-single.html" class="block-20 d-flex align-items-end" style="background-image: url('images/home/blog1.jpg');">
								<div class="meta-date text-center p-2">
                  <span class="day">28</span>
                  <span class="mos">Dezembro</span>
                  <span class="yr">2019</span>
                </div>
              </a>
              <div class="text bg-white p-4">
                <h3 class="heading"><a href="#">Alunos Quinto Ano</a></h3>
                <p>Uma simples lembrança para guardar na memória os melhores amigos e os momentos que passamos juntos neste ano que se encerra. Nos vemos ano que vem!</p>
                <div class="d-flex align-items-center mt-4">
	                <p class="mb-0"><a href="#" class="btn btn-secondary">Saiba Mais <span class="ion-ios-arrow-round-forward"></span></a></p>
	                <p class="ml-auto mb-0">
	                	<a href="#" class="mr-2">Admin</a>
	                	<a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
	                </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 ftco-animate">
            <div class="blog-entry">
              <a href="blog-single.html" class="block-20 d-flex align-items-end" style="background-image: url('images/home/blog2.jpg');">
								<div class="meta-date text-center p-2">
                  <span class="day">23</span>
                  <span class="mos">Dezembro</span>
                  <span class="yr">2019</span>
                </div>
              </a>
              <div class="text bg-white p-4">
                <h3 class="heading"><a href="#">É REAL OFICIAL!!!!</a></h3>
                <p>Nosso aluno desde a Educação Infantil é 1º lugar na Universidade Estadual de Maringá, que é considerada pelo MEC como a melhor instituição de ensino entre as universidades do Paraná.</p>
                <div class="d-flex align-items-center mt-4">
	                <p class="mb-0"><a href="#" class="btn btn-secondary">Saiba Mais <span class="ion-ios-arrow-round-forward"></span></a></p>
	                <p class="ml-auto mb-0">
	                	<a href="#" class="mr-2">Admin</a>
	                	<a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
	                </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 ftco-animate">
            <div class="blog-entry">
              <a href="blog-single.html" class="block-20 d-flex align-items-end" style="background-image: url('images/home/blog3.jpg');">
								<div class="meta-date text-center p-2">
                  <span class="day">22</span>
                  <span class="mos">Dezembro</span>
                  <span class="yr">2019</span>
                </div>
              </a>
              <div class="text bg-white p-4">
                <h3 class="heading"><a href="#">Alunos Do Segundo Ano</a></h3>
                <p>Uma simples lembrança para guardar na memória os melhores amigos e os momentos que passamos juntos neste ano que se encerra. Nos vemos ano que vem!</p>
                <div class="d-flex align-items-center mt-4">
	                <p class="mb-0"><a href="#" class="btn btn-secondary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
	                <p class="ml-auto mb-0">
	                	<a href="#" class="mr-2">Admin</a>
	                	<a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
	                </p>
                </div>
              </div>
            </div>
          </div>
        </div>
			</div>
  </section>
  
  <!--Section 11-->
  
  <section class="ftco-gallery">
    	<div class="container-wrap">
    		<div class="row no-gutters">
					<div class="col-md-3 ftco-animate">
						<a href="images/home/amizade.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/home/amizade.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-instagram"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="images/home/amizade2.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/home/amizade2.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-instagram"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="images/home/amizade3.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/home/amizade3.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-instagram"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="images/home/amizade4.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/home/amizade4.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-instagram"></span>
    					</div>
						</a>
					</div>
        </div>
    	</div>
    </section>

@endsection
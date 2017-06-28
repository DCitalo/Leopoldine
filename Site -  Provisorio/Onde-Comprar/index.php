<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Leopoldine - Onde Comprar</title>
		<style>
			.carregando{
				color:#666;
				display:none;
			}
		</style>

		<link rel="shortcut icon" type="image/x-icon" href="../favicon.png" />

		<link href="../css/master.css" rel="stylesheet">
		<link href="../css/header1.css" rel="stylesheet">

		<!-- SWITCHER -->
		<link rel="stylesheet" id="switcher-css" type="text/css" href="../plugins/switcher/css/switcher.css" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="../plugins/switcher/css/color1.css" title="color1" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="../plugins/switcher/css/color2.css" title="color2" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="../plugins/switcher/css/color3.css" title="color3" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="../plugins/switcher/css/color4.css" title="color4" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="../plugins/switcher/css/color5.css" title="color5" media="all" />

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
		<script src="../js/jquery-ui.min.js"></script>
		<script src="../js/bootstrap.min.js"></script>

 		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	

		<!-- Hotjar Tracking Code for http://www.leopoldinebolsas.com.br -->
		<script>
		    (function(h,o,t,j,a,r){
		        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
		        h._hjSettings={hjid:517831,hjsv:5};
		        a=o.getElementsByTagName('head')[0];
		        r=o.createElement('script');r.async=1;
		        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
		        a.appendChild(r);
		    })(window,document,'//static.hotjar.com/c/hotjar-','.js?sv=');
		</script>
	</head>
	<body class="animated-css" data-scrolling-animations="false">
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
				var js, fjs = d.getElementsByTagName(s)[0];
				if (d.getElementById(id)) return;
				js = d.createElement(s); js.id = id;
				js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.9&appId=460585014293738";
				fjs.parentNode.insertBefore(js, fjs);
				}(document, 'script', 'facebook-jssdk'));
		</script>
		<div class="sp-body">
			<!-- Start Switcher
			<div class="switcher-wrapper">	
				<div class="demo_changer">
					<div class="demo-icon customBgColor"><i class="fa fa-cog fa-spin fa-2x"></i></div>
					<div class="form_holder">
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="predefined_styles">
									<div class="skin-theme-switcher">
										<h4>Cores</h4>
										<a href="#" data-switchcolor="color1" class="styleswitch" style="background-color:#382316;"> </a>
										<a href="#" data-switchcolor="color2" class="styleswitch" style="background-color:#4fb0fd;"> </a>
										<a href="#" data-switchcolor="color3" class="styleswitch" style="background-color:#ffc73c;"> </a>							
										<a href="#" data-switchcolor="color4" class="styleswitch" style="background-color:#dc2c2c;"> </a>
										<a href="#" data-switchcolor="color5" class="styleswitch" style="background-color:#02cc8b;"> </a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			End Switcher -->
			<header id="header">
				<div class="header-top">
					<div class="container">
						<ul class="pull-left contact-list">
							<li>
								<span class="sli icon-envelope-open" aria-hidden="true"></span>
								<span class="contact-list_label font-main font-weight-normal">Email:</span>
								<a href="mailto:atendimento@leopoldine.com.br?Subject=Contato" class="contact-list_value font-main font-weight-normal">atendimento@leopoldine.com.br</a>
							</li>
							<li>
								<span class="sli icon-call-out" aria-hidden="true"></span>
								<span class="contact-list_label font-main font-weight-normal">Telefone:</span>
								<span class="contact-list_value font-main font-weight-normal">(11) 4701-8206</span>
							</li>						
						</ul>
					</div>
				</div>
				<div class="header-middle">
					<div class="container relative">
						<a href="/" class="logo pull-left logo-pg"></a>
						<div class="header-nav navbar navbar-main-slide">
							<div class="container">
								<i class="fa fa-bars mobileMenuNav mobileMenuSwitcher onlyMobile"></i>
								<nav class="menu-container">
									<i class="fa fa-times close-menu mobileMenuSwitcher onlyMobile"></i>
									<ul class="nav navbar-nav navbar-main">
										<li><a href="/">Home</a>
										</li>
										<li class="dropdown">
											<a data-toggle="dropdown" class="dropdown-toggle">Showroom <i class="fa fa-angle-down customColor"></i></a>
											<ul class="dropdown-menu">
												<li><a href="/Categoria/Bolsas-de-Couro">Bolsas de Couro</a></li>
												<li><a href="/Categoria/Bolsas-Sinteticas">Bolsas Sintéticas</a></li>
												<li><a>Óculos de Sol (em breve)</a></li>
											</ul>
										</li>
										<li><a>Empresa</a></li>
										<li><a href="/Onde-Comprar">ONDE COMPRAR</a></li>
										<!--li><a>BLOG (em breve)</a></li-->
										<li><a href="http://www.youblisher.com/p/1828513-Leopoldine-Catalogo-1/" target="_blank">Catálogo</a></li>
										<li><a href="http://leopoldine.com.br/index.php/publico/">Area do representante</a></li>
									</ul>
								</nav>
							</div>
						</div>
					</div>	
				</div>
				
			</header>
			<section id="pageTitleBox" class="paralax breadcrumb-container"  style="background-image: url('../../media/paralax/banner_produtos_couro.jpg');">
				<div class="overlay"></div>
				<div class="container relative">
					<h1 class="title font-additional font-weight-normal color-main text-uppercase wow zoomIn" data-wow-delay="0.3s">ONDE COMPRAR</h1>
					<ul class="breadcrumb-list wow zoomIn" data-wow-delay="0.3s">
						<li>
							<a href="/" class="font-additional font-weight-normal color-main text-uppercase">HOME</a>
							<span>/</span>
						</li>
						<li>
							<a class="font-additional font-weight-normal color-main text-uppercase">INSTITUCIONAL</a>
							<span>/</span>
						</li>
						<li class="font-additional font-weight-normal color-main text-uppercase">ONDE COMPRAR</li>
					</ul>
				</div>
			</section>
			<section id="contactPage" class="contact-page">
				<div class="container">
					<div class="row">
						<div class="fadeInUp col-lg-12 col-md-12 col-sm-12 col-xs-12 clearfix">
							<p class="font-main container-70" style="font-size: 17px;line-height: 2;margin: 30px auto;text-align: center;">A Leopoldine comercializa seus produtos através de representantes treinados e autorizados. Então não perca mais tempo e entre em contato com um de nossos representantes, que com certeza lhe atenderá com agilidade, presteza e total conhecimento sobre cada um dos nossos produtos.Venha ser mais um cliente Leopoldine e faça parte de consumidores 100% felizes, satisfeitos e antenados com as tendências de moda em bolsas e óculos de sol.</p>
							<div id="form-messages"></div>
							<form method="post" action="envia_email.php" accept-charset="UTF-8" name="ComoComprar" id="ComoComprar">
								<div class="form-group col-md-12 col-sm-12 col-xs-12">
				                   <div class="col-md-12 col-sm-12 col-xs-12">
				                   		<select class="form-control" id="assunto" name="assunto" required>
				                   			<option value="" disabled selected style="display:none;">-- Informe o Assunto --</option>
										  	<option value="Representante">REPRESENTANTES</option>
										  	<option value="Venda Direta">VENDA DIRETA</option>
										</select>
				                   </div>
				                </div>
				                <div class="form-group col-md-12 col-sm-12 col-xs-12">
				                   <div class="col-md-12 col-sm-12 col-xs-12">
				                       <input type="text" class="form-control" id="nome" name="nome" placeholder="Informe seu Nome" required>
				                   </div>
				                </div>
				                <div class="form-group col-md-12 col-sm-12 col-xs-12">
				                   <div class="col-md-12 col-sm-12 col-xs-12">
				                       <input type="email" class="form-control" id="email" name="email" placeholder="Informe seu E-mail" required>
				                   </div>
				                </div>
				                <div class="form-group col-md-12 col-sm-12 col-xs-12">
				                	<div class="col-md-12 col-sm-12 col-xs-12">
										<input type="tel" class="form-control" id="telefone" name="telefone" placeholder="Informe seu Telefone" required>
				                	</div>
				                </div>
				                <div class="form-group col-md-12 col-sm-12 col-xs-12">
					                <?php
										$con = mysql_connect( 'estado_cidade.mysql.dbaas.com.br', 'estado_cidade', 'leopoldine2017' );
										mysql_select_db( 'estado_cidade', $con );
										mysql_set_charset('UTF8', $con);
									?>
									<div class="col-md-6 col-sm-6 col-xs-6">
										<select class="form-control" name="cod_estados" id="cod_estados" required>
											<option value="" disabled selected style="display:none;">-- Escolha seu estado --</option>
											<?php
												$sql = "SELECT nome, sigla
														FROM estados
														ORDER BY sigla";
												$res = mysql_query( $sql );
												while ( $row = mysql_fetch_assoc( $res ) ) {
													echo '<option value="'.$row['sigla'].'" >'.$row['nome'].'</option>';
												}
											?>
										</select>
									</div>
									<div class="col-md-6 float-right col-sm-6 col-xs-6">
										<span class="carregando">Aguarde, carregando...</span>
										<select class="form-control" name="cod_cidades" id="cod_cidades">
											<option value="" disabled selected style="display:none;">-- Escolha sua cidade --</option>
											<option value="" disabled >-- Escolha um estado --</option>
										</select>
									</div>
								</div>
				                <div class="form-group col-md-12 col-sm-12 col-xs-12">
				                   <div class="col-md-12 col-sm-12 col-xs-12">
				                       <textarea class="form-control" id="mensagem" name="mensagem"  placeholder="Digite sua mensagem"></textarea>
				                   </div>
				                </div>
				                <div class="form-group col-md-12 col-sm-12 col-xs-12">
				                   <div class="container-70">
				                       <input type="submit" name="enviar" id="enviar" class="btn btn-transp container-100" value="Enviar" type="submit">
				                   </div>
				                </div>
				                
				            </form>
				            <script src="mail.js"></script>
						</div>
					</div>
				</div>
			</section>
			<footer id="footer">
	  		<a class="goToTop font-additional color-main text-uppercase" href="#" id="scrollTop">
		  		<i class="fa fa-angle-up"></i>
		  		<span>Top</span>
	  		</a>
	  		<div class="footer-top">
					<div class="container">
						<div class="row">
							<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 clearfix wow fadeInLeft" data-wow-delay="0.3s">
							  <a href="index.html" class="footer-top_logo"></a>
								<div class="footer-top_container clearfix">
									<span class="font-main font-weight-normal color-additional">Que tal combinar moda com empreendedorismo? Estamos formando uma grande rede de pessoas engajadas, com perfil empreendedor e que queiram fazer parte de um time vencedor. Através dos nossos produtos e de uma oportunidade de negócios inovadora e motivadora, queremos proporcionar uma experiência única e com diferenciadas formas de ganho. Venha conhecer o modelo de negócios da Leopoldine agora e tenha independência financeira e sucesso profissional.</span>
									<ul class="footer-social-list">
										<li><a href="https://www.facebook.com/leopoldineoficial/" target="_blank"><span class="social_facebook" aria-hidden="true"></span></a></li>
										<li><a href="https://twitter.com/leopoldinebr?s=08" target="_blank"><span class="social_twitter" aria-hidden="true"></span></a></li>
										<!-- li><a href="#"><span class="social_googleplus" aria-hidden="true"></span></a></li>
										<li><a href="#"><span class="social_pinterest" aria-hidden="true"></span></a></li-->
										<li><a href="https://www.youtube.com/channel/UCx1LiztLJMT-Zk-bUbQpIvA" target="_blank"><span class="social_youtube" aria-hidden="true"></span></a></li>
										<li><a href="https://www.instagram.com/leopoldine_oficial/" target="_blank"><span class="social_instagram" aria-hidden="true"></span></a></li>
									</ul>
								</div>
							</div>
							<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 clearfix wow fadeInUp" data-wow-delay="0.3s">
							  <h4 class="footer-top_title color-main font-additional font-weight-bold text-uppercase">Downloads</h4>
							  <div class="footer-top_container clearfix">
									<ul class="footer-nav">
										<li><a  href="http://www.youblisher.com/p/1828513-Leopoldine-Catalogo-1/" target="_blank" class="font-main font-weight-normal color-additional"><i class="fa fa-angle-right customColor"></i> Catálogo PDF</a></li>
									</ul>
								</div>
							</div>
							<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 clearfix wow fadeInUp" data-wow-delay="0.3s">
							  <h4 class="footer-top_title color-main font-additional font-weight-bold text-uppercase">INFORMAÇÕES</h4>
							  <div class="footer-top_container clearfix">
									<ul class="footer-nav">
									  <li><a href="#" class="font-main font-weight-normal color-additional"><i class="fa fa-angle-right customColor"></i> Empresa</a></li>
									  <li><a href="#" class="font-main font-weight-normal color-additional"><i class="fa fa-angle-right customColor"></i> Onde Comprar</a></li>
										<li><a href="#" class="font-main font-weight-normal color-additional"><i class="fa fa-angle-right customColor"></i> Fale conosco</a></li>
										<li><a href="http://leopoldine.com.br/index.php/publico/" class="font-main font-weight-normal color-additional"><i class="fa fa-angle-right customColor"></i> Area do Representante</a></li>
										<li><a href="http://leopoldine.com.br/index.php/publico/Distribuidor/DistribuidoresCadastro/formulario" class="font-main font-weight-normal color-additional"><i class="fa fa-angle-right customColor"></i> Torne-se um Representante</a></li>
									</ul>
								</div>
							</div>
							<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 clearfix wow fadeInRight" data-wow-delay="0.3s">
								<h4 class="footer-top_title color-main font-additional font-weight-bold text-uppercase">CONTATO</h4>
								<div class="footer-top_container clearfix">
									<ul class="footer-contact">
										<li class="font-main font-weight-normal color-additional">
											<span class="icon_pin" aria-hidden="true"></span>
											Estrada São Francisco, 2008 Sala-1105  <br>Taboão da Serra - SP
										</li>
										<li class="font-main font-weight-normal color-additional oneLine">
											<span class="icon_phone" aria-hidden="true"></span>
											(11) 4701-8206
										</li>
										<li class="font-main font-weight-normal color-additional oneLine">
											<a href="mailto:atendimento@leopoldine.com.br?Subject=Contato" style="color:#ffffff"><span class="icon_mail" aria-hidden="true"></span>
												atendimento@leopoldine.com.br</a>
										</li>
										<li class="font-main font-weight-normal color-additional">
											<span class="icon_clock" aria-hidden="true"></span>
											Segunda a Sexta <br>9:00 - 18:00
										</li>										
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="footer-bottom">
					<div class="container">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 clearfix">
								<span class="footer_copyright color-additional font-main font-weight-light wow fadeInLeft" data-wow-delay="0.3s">Criado <span class="icon_heart customColor" aria-hidden="true"></span> por <span class="font-main font-weight-semibold">Areshi Comunicações</span> &copy; 2017 Todos os direitos reservados.</span>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 clearfix">
							</div>
						</div>
					</div>
				</div>
			</footer>
		</div>

		<script src="../js/modernizr.custom.js"></script>
		<script src="../js/jquery.placeholder.min.js"></script>
		<script src="../js/smoothscroll.min.js"></script>
		<script src="../js/classie.js"></script>
		<!--Owl Carousel-->
	    <script src="../plugins/owl-carousel/owl.carousel.min.js"></script>
	    <!-- bxSlider -->
	    <script src="../plugins/bxslider/jquery.bxslider.min.js"></script>
		<!--Switcher-->
		<script src="../plugins/switcher/js/bootstrap-select.js"></script> 
		<script src="../plugins/switcher/js/evol.colorpicker.min.js" type="text/javascript"></script> 
		<script src="../plugins/switcher/js/dmss.js"></script>
	    <!-- SCRIPTS -->
	    <script type="text/javascript" src="../plugins/isotope/jquery.isotope.min.js"></script> 

		<!--THEME--> 
		<script src="../js/wow.min.js"></script>
		<script src="../js/cssua.min.js"></script>
        <script src="../js/theme.js"></script> 
	</body>
</html>
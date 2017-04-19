<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
<link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i" rel="stylesheet">
<link href="http://netdna.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Vidaloka" rel="stylesheet">
<link href="http://netdna.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="https://www.fontify.me/wf/d0eb2f8a3f3423e5a3ca74c7b4b58fae" rel="stylesheet" type="text/css">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php wp_title(''); ?></title>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); wp_head(); ?>

</head>
<body class="<?php wp_title(''); ?>">
	<header class="container-100 DF FW header-blog">
		<div class="container-100 Bg-color-1 DF FW top-bar">
			<div class="container-90 DF FW">
				<div class="container-10 cont-icon">
					<img class="responsive" src="http://leopoldinebolsas.com.br/wp-content/uploads/2017/04/icon.png">
				</div>
				<div class="cont-busca-menu">
					<?php get_sidebar(); ?>
				</div>
			</div>
		</div>
		<div class="container-80 DF FW"> 
			<nav class="container-100 cont-menu">
				<ul class="text-center DF FW">
					<li class="container-13 lato-reg"><a>E-SHOP</a></li>
					<li class="container-13 lato-reg"><a>CATÁLOGO</a></li>
					<li class="container-13 lato-reg"><a href="http://leopoldinebolsas.com.br/blog/">BLOG</a></li>
					<li class="container-18 cont-logo lato-reg"><a><img class="responsive" src="http://leopoldinebolsas.com.br/wp-content/uploads/2017/04/logo.png"></a></li>
					<li class="container-13 lato-reg"><a>EMPRESA</a></li>
					<li class="container-13 lato-reg"><a>CONTATO</a></li>
					<li class="container-15 cont-sociais DF">	
						<a href="https://www.instagram.com/leopoldine_oficial/?hl=pt-br"><i class="fa fa-instagram" aria-hidden="true"></i></a>
						<a><i class="fa fa-pinterest" aria-hidden="true"></i></a>
						<a href="https://www.facebook.com/leopoldineoficial/?fref=ts"><i class="fa fa-facebook" aria-hidden="true"></i></a>
						<a><i class="fa fa-twitter" aria-hidden="true"></i></a>
						<a><i class="fa fa-envelope-o" aria-hidden="true"></i></a>
					</li>
				</ul>
			</nav>
		</div>
	</header>
	<header class="container-100-real Bg-color-1 PF flutuante header-home">
		<div class="container-90-real DF FW">
			<div class="container-10 cont-icon">
				<img class="responsive" src="http://leopoldinebolsas.com.br/wp-content/uploads/2017/04/icon.png">
			</div>
			<div class="DF FW container-80-real">
				<div class="container-60 cont-logo">
					<img class="responsive" src="http://leopoldinebolsas.com.br/wp-content/uploads/2017/04/logo.png">
				</div>
				<nav class="container-100 cont-menu">
					<ul class="container-40 text-center DF FW">
						<li class="container-20 futura-reg"><a>E-SHOP</a></li>
						<li class="container-20 futura-reg"><a>CATÁLOGO</a></li>
						<li class="container-20 futura-reg"><a href="http://leopoldinebolsas.com.br/blog/">BLOG</a></li>
						<li class="container-20 futura-reg"><a>EMPRESA</a></li>
						<li class="container-20 futura-reg"><a>CONTATO</a></li>
					</ul>
				</nav>
			</div>
			<div class="cont-busca-menu container-10">
					<?php get_search_form(); ?>
				</div>
		</div>
	</header>
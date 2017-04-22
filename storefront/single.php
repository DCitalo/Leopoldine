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
<body class="<?php wp_title(''); ?> Blog">
<?php get_header(); ?>
	<div id="conteudo">
		<div id="single-post">
		
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="container-80 DF FW">
					<div class="container-100">
						<a href="<?php the_permalink() ?>" class="responsive"><?php the_post_thumbnail(); ?></a>
						<div class="container-60 text-center pad-40 cont-single-post-title">
							<p class="post-date"><?php the_time('F d, Y') ?></p>
							<h1 class="single-post-title">
								<a class="VidaLoka" style="font-size: 30px;" href="<?php the_permalink() ?>"><?php the_title(); ?></a>
							</h1>
						</div>						
					</div>
					<div class="container-15 cont-social-single-post">
						<ul class="social-single-post container-100 DF FW">
							<li class="container-100"><a><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							<li class="container-100"><a><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
							<li class="container-100"><a><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li class="container-100"><a><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li class="container-100"><a><i class="fa fa-envelope-o" aria-hidden="true"></i></a></li>
						</ul>
					</div>
					<div class="container-70 cont-single-post-content VidaLoka">
						<?php the_content(); ?>
					</div>
					<div class="container-15"></div>
				</div>
				
				
					
			<?php endwhile; else: ?>
				<div class="artigo">
					<h2>Nada Encontrado</h2>
					<p>Erro 404</p>
					<p>Lamentamos mas não foram encontrados artigos.</p>
				</div>			
			<?php endif; ?>
			
		</div>
		
	</div>
<?php get_footer(); ?>
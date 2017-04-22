<?php 
/* 
Template Name: Blog
*/ 
?>
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
<?php get_header(); ?>
	<div id="conteudo" class="container-80">
		<?php $latest_post = get_posts( 'numberposts=1' ); ?>
			<?php foreach( $latest_post as $post ) : setup_postdata( $post ); ?>
	    		<article class="artigo container-100 blog-first blog-artigo" >
	    			<a href="<?php the_permalink() ?>" class="responsive container-50"><?php the_post_thumbnail(); ?></a>
	    			<span class="post-share-trigger"><i class="icon-share" aria-hidden="true"></i></span>
					<div class="share-hover DF">
						<a class="container-33" href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
						<a class="container-33" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink() ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a>
						<a class="container-33" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
					</div>
					<a href="<?php the_permalink() ?>" class="blog-cont-conteudo">
						<div class="blog-article-title">
							<h4 class="lato-reg" style="font-size: 14px;font-weight: 400;text-transform: uppercase;text-align: center;"><?php the_subtitle(); ?></h4>
							<h2 class="news-blog-title VidaLoka"><?php the_title(); ?></h2>	
							<h3 class="news-blog-conteudo VidaLoka " style="font-size: 12px;"><?php the_excerpt(); ?></h3>
							<div class="container-100 read-more">SAIBA MAIS</div>
						</div>
					</a>											
				</article>	
			<?php endforeach; ?>
		<?php wp_reset_query(); ?>

		<div class="container-100 DF FW">
			<?php $the_query = new WP_Query( 'showposts=2&offset=1' ); ?>
			<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
		    	<article class="artigo container-50 cont-post-50 blog-artigo" >
		    		<a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?></a>
		    		<span class="post-share-trigger"><i class="icon-share" aria-hidden="true"></i></span>
					<div class="share-hover DF">
						<a class="container-33" href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
						<a class="container-33" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink() ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a>
						<a class="container-33" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
					</div>
					<a href="<?php the_permalink() ?>" class="blog-cont-conteudo">
						<div class="blog-article-title">
							<h4 class="lato-reg" style="font-size: 14px;font-weight: 400;text-transform: uppercase;text-align: center;"><?php the_subtitle(); ?></h4>
							<h2 class="news-blog-title VidaLoka"><?php the_title(); ?></h2>	
							<!--<h3 class="news-blog-conteudo VidaLoka" style="font-size: 12px;"></h3>-->
							<div class="container-100 read-more">SAIBA MAIS</div>
						</div>
					</a>					
				</article>	
			<?php endwhile;?>
			<?php wp_reset_query(); ?>
		</div>
		<div class="container-100 DF FW">
			<div class="container-70 DF FW">
				<?php $the_query = new WP_Query( 'showposts=2&offset=3' ); ?>
				<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
			    	<article class="artigo container-100 cont-post-80 DF FW blog-artigo" >
			    	<a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?></a>
						<div class="blog-article-title last-blog-cont-conteudo">
							<h4 class="lato-reg" style="font-size: 14px;font-weight: 400;text-transform: uppercase;text-align: center;"><?php the_subtitle(); ?></h4>
							<a href="<?php the_permalink() ?>"><h2 class="news-blog-title VidaLoka"><?php the_title(); ?></h2>	</a>
							<a href="<?php the_permalink() ?>"><h3 class="news-blog-conteudo VidaLoka" style="font-size: 12px;"><?php the_excerpt(); ?></h3></a>
							<span class="container-100 post-share-trigger"><i class="icon-share" aria-hidden="true"></i></span>
							<div class="share-hover DF">
								<a class="container-33" href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
								<a class="container-33" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink() ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a>
								<a class="container-33" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
							</div>
						</div>				
					</article>	
				<?php endwhile;?>
				<?php wp_reset_query(); ?>
			</div>
			<div class="container-30 DF FW">
				<div class="container-100 newsletter-blog">
					<p class="VidaLoka">Newsletter</p>
					<p>Assine nossa newsletter e fique por dentro das novidades</p>
					<script type="text/javascript">
						//<![CDATA[
						if (typeof newsletter_check !== "function") {
						window.newsletter_check = function (f) {
						    var re = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-]{1,})+\.)+([a-zA-Z0-9]{2,})+$/;
						    if (!re.test(f.elements["ne"].value)) {
						        alert("The email is not correct");
						        return false;
						    }
						    for (var i=1; i<20; i++) {
						    if (f.elements["np" + i] && f.elements["np" + i].required && f.elements["np" + i].value == "") {
						        alert("");
						        return false;
						    }
						    }
						    if (f.elements["ny"] && !f.elements["ny"].checked) {
						        alert("You must accept the privacy statement");
						        return false;
						    }
						    return true;
						}
						}
						//]]>
						</script>

						<div class="tnp tnp-subscription">
						<form method="post" action="http://leopoldinebolsas.com.br/?na=s" onsubmit="return newsletter_check(this)">

						<table cellspacing="0" cellpadding="3" border="0">

						<!-- email -->
						<tr>
							<td align="left"><input class="tnp-email" type="email" name="ne" size="30" placeholder="Digite seu e-mail" required></td>
						</tr>

						<tr>
							<td colspan="2" class="tnp-td-submit">
								<input class="tnp-submit" type="submit" value="Assine"/>
							</td>
						</tr>

						</table>
						</form>
						</div>

				</div>
				<div class="container-100">
					<a href="http://leopoldine.com.br/index.php/publico/Autenticar/Formulario" class="responsive"><img src="http://leopoldinebolsas.com.br/wp-content/uploads/2017/04/BLOG_FONTES.jpg"></a>
				</div>
			</div>
		</div>

		<!--<php get_sidebar(); ?>-->
	</div>
<?php get_footer(); ?>
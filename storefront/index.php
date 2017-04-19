<?php get_header(); ?>
	<section class="banner-topo banner-home bg-parallax dist-top container-100" id="bannerhome">
		<div class="container-50 text-center" id="bannerbuttons">
			<h2 class="banner-title">OUTONO/INVERNO 2017</h2>
			<button class="container-40 button-banner Bg-color-3">
				<a href="/Departamento/Corus">LINHA COURO</a>
			</button>
			<button class="container-40 button-banner Bg-color-3">
				<a href="/Departamento/Decorus">LINHA SINTETICA</a>
			</button>
		</div>
	</section>
	<section class="container-100-14 DF FW" id="body" >
		<div class="container-50-8 tb-container-50-5 mb-container-100 Bg-color-2 pad-40 DF FCA">
			<div class="container-70 bloc-1">
				<img class="responsive" src="http://leopoldinebolsas.com.br/wp-content/uploads/2017/04/bloco-1-home.png">
			</div>
		</div>
		<div class="container-50-8 tb-container-50-5 mb-container-100  DF FW bloc-2">
			<div class="container-100 Bg-color-2  md-2 pad-40 DF FCA">
				<div class="container-50 text-center bloc-2-a">
					<img class="responsive" src="http://leopoldinebolsas.com.br/wp-content/uploads/2017/04/bloco-3-home.png">
					<h3 class="cat-title">Bolsas de Couro</h3>					
					<h4 class="cat-sub-title DF">CONHEÇA <i>></i></h4>
				</div>
			</div>
			<div class="container-100 Bg-color-2  mt-2 pad-40 DF FCA">
				<div class="container-50 text-center bloc-2-b">
					<img class="responsive" src="http://leopoldinebolsas.com.br/wp-content/uploads/2017/04/bloco-2-home.png">
					<h3 class="cat-title">Óculos de Sol</h3>
					<h4 class="cat-sub-title DF">CONHEÇA <i>></i></h4>	
				</div>			
			</div>
			
		</div>
		<div class="container-100-4 banner-middle">
			<img class="responsive" src="http://leopoldinebolsas.com.br/wp-content/uploads/2017/04/fashion_carteira.jpg">
		</div>
	</section>
	<section class="container-100-32 Bg-color-2 cont-blog last">
		<div class="container-80 DF FW pad-40">
			<div class="container-100">
				<h3 class="container-30 text-center sec-title">BLOG</h3>
			</div>
			<div class="container-100 DF FW">
				<!-- Start latest post -->
				<div class="artigo container-33 blog-left-bloc DF FW">
				<?php $the_query = new WP_Query( 'showposts=2&offset=1' ); ?>
				<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
					<article class="container-100 cont-post-home" >
	    				<a href="<?php the_permalink() ?>" class="responsive"><?php the_post_thumbnail(); ?></a>
						<h2 class="home-blog-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
						<h3 class="home-blog-conteudo"><a href="<?php the_permalink() ?>"><?php the_excerpt(); ?></a></h3>					
					</article>	
					<?php endwhile;?>
				<?php wp_reset_query(); ?>
				</div>
				<!-- Start latest post -->
				<?php $latest_post = get_posts( 'numberposts=1' ); ?>
				<?php foreach( $latest_post as $post ) : setup_postdata( $post ); ?>
	    			<article class="artigo container-33 blog-middle cont-post-home" >
	    				<a href="<?php the_permalink() ?>" class="responsive"><?php the_post_thumbnail(); ?></a>
						<h2 class="home-blog-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>	
						<h3 class="home-blog-conteudo"><a href="<?php the_permalink() ?>"><?php the_excerpt(); ?></a></h3>						
					</article>	
					<?php endforeach; ?>
				<?php wp_reset_query(); ?>
				<!-- Start latest post -->
				<div class="artigo container-33 blog-right-bloc DF FW">
				<?php $the_query = new WP_Query( 'showposts=2&offset=3' ); ?>
				<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
	    			<article class="artigo container-100 cont-post-home " >
	    				<a href="<?php the_permalink() ?>" class="responsive"><?php the_post_thumbnail(); ?></a>
						<h2 class="home-blog-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
						<h3 class="home-blog-conteudo"><a href="<?php the_permalink() ?>"><?php the_excerpt(); ?></a></h3>						
					</article>	
					<?php endwhile;?>
				<?php wp_reset_query(); ?>
				</div>
			</div>
		</div>
	</section>
	<?php get_footer(); ?>
</body> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript" src="default.js"></script>
</html> 
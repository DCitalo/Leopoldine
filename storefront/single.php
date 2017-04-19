<?php get_header(); ?>
	<div id="conteudo">
		<div id="single-post">
		
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="container-80 DF FW">
					<div class="container-100">
						<a href="<?php the_permalink() ?>" class="responsive"><?php the_post_thumbnail(); ?></a>
						<div class="container-60 text-center pad-40 cont-single-post-title">
							<?php the_time('M d,Y') ?>
							<h1 class="single-post-title">
								<a class="VidaLoka" style="font-size: 30px;" href="<?php the_permalink() ?>"><?php the_title(); ?></a>
							</h1>
						</div>						
					</div>
					<div class="container-15">
						<ul class="social-single-post container-100 DF FW">
							<li class="container-100"><a><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							<li class="container-100"><a><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
							<li class="container-100"><a><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li class="container-100"><a><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li class="container-100"><a><i class="fa fa-envelope-o" aria-hidden="true"></i></a></li>
						</ul>
					</div>
					<div class="container-70 cont-single-post-content">
						<p class="container-100 single-post-content"><?php the_content(); ?></p>
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
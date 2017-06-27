<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Leopoldine - Blog</title>
		<link rel="shortcut icon" type="image/x-icon" href="../../favicon.png" />

		<link href="../../css/master.css" rel="stylesheet">
		<link href="../../css/header1.css" rel="stylesheet">

		<!-- SWITCHER -->
		<link rel="stylesheet" id="switcher-css" type="text/css" href="../../plugins/switcher/css/switcher.css" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="../../plugins/switcher/css/color1.css" title="color1" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="../../plugins/switcher/css/color2.css" title="color2" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="../../plugins/switcher/css/color3.css" title="color3" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="../../plugins/switcher/css/color4.css" title="color4" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="../../plugins/switcher/css/color5.css" title="color5" media="all" />

		<script src="../../js/jquery-1.11.2.min.js"></script>
		<script src="../../js/jquery-ui.min.js"></script>
		<script src="../../js/bootstrap.min.js"></script>

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
			<?php get_header(); ?>
			<section id="pageTitleBox" class="paralax breadcrumb-container"  style="background-image: url('../../media/paralax/3.jpg');">
				<div class="overlay"></div>
				<div class="container relative">
					<h1 class="title font-additional font-weight-normal color-main text-uppercase wow zoomIn" data-wow-delay="0.3s">BLOG - LEOPOLDINE</h1>
					<ul class="breadcrumb-list wow zoomIn" data-wow-delay="0.3s">
						<li>
							<a href="/" class="font-additional font-weight-normal color-main text-uppercase">HOME</a>
							<span>/</span>
						</li>
						<li class="font-additional font-weight-normal color-main text-uppercase">BLOG - LEOPOLDINE</li>
					</ul>
				</div>
			</section>
			<section id="blogContent" class="blog-row">
				<div class="container">
					<div class="blog">
						<?php $latest_post = get_posts( 'numberposts=4' ); ?>
						<?php foreach( $latest_post as $post ) : setup_postdata( $post ); ?>
				    		<article class="blog-item clearfix wow fadeInUp" data-wow-delay="0.3s">
							<a class="blog-item_img" href="<?php the_permalink() ?>">
								<div class="blog-preview_posted customBgColor">
									<span class="blog-preview_date font-additional font-weight-bold text-uppercase color-main"><?php the_time('d M') ?></span>
								</div>
								<a href="<?php the_permalink() ?>" class="responsive hvr-grow-rotate container-50"><?php the_post_thumbnail(); ?></a>
							</a>
							<div class="blog-item_desc">
								<div class="blog-item_header">
									<span class="blog-item_posted font-additional">Postado por</span>
									<a href="#" class="blog-item_posted_name font-additional hover-focus-color"><?php the_author(); ?></a>
									<span class="blog-item_posted_sepparator"></span>
								</div>
								<div class="blog-item_body">
									<h3 class="font-additional font-weight-bold text-uppercase"><?php the_title(); ?></h3>
									<div class="blog-item_text font-main color-third"><?php the_excerpt(); ?></div>
									<a href="#" class="btn button-border font-additional font-weight-bold hvr-rectangle-out hover-focus-bg hover-focus-border before-bg">SAIBA MAIS</a>
								</div>
							</div>
						</article>
						<?php endforeach; ?>
					<?php wp_reset_query(); ?>
						<!--div class="pagination-container pagination-center wow fadeInUp" data-wow-delay="0.3s">
							<ul class="pagination-list">
								<li><a href="#" class="prev hover-focus-color">previous</a></li>
								<li><a href="#" class="page current customBgColor">1</a></li>
								<li><a href="#" class="page hover-focus-color">2</a></li>
								<li><a href="#" class="page hover-focus-color">3</a></li>
								<li><a href="#" class="page hover-focus-color">4</a></li>
								<li><span>....</span></li>
								<li><a href="#" class="page hover-focus-color">26</a></li>
								<li><a href="#" class="next hover-focus-color">NEXT</a></li>
							</ul>
						</div-->
					</div>
				</div>
			</section>
			<?php get_footer(); ?>
		</div>
		<script src="../../js/modernizr.custom.js"></script>
		<script src="../../js/jquery.placeholder.min.js"></script>
		<script src="../../js/smoothscroll.min.js"></script>
		<script src="../../js/classie.js"></script>
		<!--Owl Carousel-->
	    <script src="../../plugins/owl-carousel/owl.carousel.min.js"></script>
	    <!-- bxSlider -->
	    <script src="../../plugins/bxslider/jquery.bxslider.min.js"></script>
		<!--Switcher-->
		<script src="../../plugins/switcher/js/bootstrap-select.js"></script> 
		<script src="../../plugins/switcher/js/evol.colorpicker.min.js" type="text/javascript"></script> 
		<script src="../../plugins/switcher/js/dmss.js"></script>
	    <!-- SCRIPTS -->
	    <script type="text/javascript" src="../../plugins/isotope/jquery.isotope.min.js"></script> 

		<!--THEME--> 
		<script src="../../js/wow.min.js"></script>
		<script src="../../js/cssua.min.js"></script>
        <script src="../../js/theme.js"></script> 
	</body>
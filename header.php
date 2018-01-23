<!DOCTYPE HTML>
<!--
###########################################################
#
#             asigna lenguaje configurado en WP
#
###########################################################
-->
<html <?php language_attributes(); ?> >
	<head>
		<!--
		###########################################################
		#
		#             titulo personalizado por entradas
		#
		###########################################################
		-->

		<title>
		<?php wp_title('|', true, 'right');?> <?php bloginfo('name'); ?>
		</title>
		<meta charset="<?php bloginfo('charset');?>"> <!-- charset configurado en WP -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="keywords" content=" " />
		<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!--
		###########################################################
		#
		#             carga de funciones basicas de WP
		#
		###########################################################
		-->

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
		<?php if ( is_singular() ) wp_enqueue_script( "comment-reply" ); ?>
		<?php wp_head(); ?>
		<!--
		###########################################################
		#
		#             		carga de icono
		#
		###########################################################
		-->

		<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.ico" type="image/x-icon" />
		<link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/apple-touch-icon.png" />
		<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_stylesheet_directory_uri(); ?>/img/apple-touch-icon-57x57.png" />
		<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_stylesheet_directory_uri(); ?>/img/apple-touch-icon-72x72.png" />
		<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_stylesheet_directory_uri(); ?>/img/apple-touch-icon-114x114.png" />
		<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_stylesheet_directory_uri(); ?>/img/apple-touch-icon-144x144.png" />
		<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_stylesheet_directory_uri(); ?>/img/apple-touch-icon-60x60.png" />
		<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_stylesheet_directory_uri(); ?>/img/apple-touch-icon-120x120.png" />
		<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_stylesheet_directory_uri(); ?>/img/apple-touch-icon-76x76.png" />


	</head>
	<!--
		###########################################################
		#
		#             	clases para el body de WP
		#
		###########################################################
		-->

	<body <?php body_class(); ?> >
	<!--start-main-->
	<div class="header">
		<div class="header-top">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">

						<!--
			###########################################################
			#
			#                    		logo
			#
			###########################################################
			-->
			<img class="img-responsive" src="<?php bloginfo( 'template_directory' ); ?>/images/header.jpg"  alt=""/>

					</div>

				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
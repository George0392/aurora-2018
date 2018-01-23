<!--
###########################################################
#
#                    ENTRADAS
#
###########################################################
-->
<!-- technology -->

<div class="technology">

	<div class="container">

		<div class="col-md-9 technology-left">

			<div class="tech-no">
				<!-- technology-top -->

				<!--
						###########################################################
						#
						#                    INICIO LOOP WP
						#
						###########################################################
				-->
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<!--
				###########################################################
				#
						#                   		 POST
				#
				###########################################################
				-->
				<div class="soci">
					<ul>
						<li><a href="#" class="facebook-1"> </a></li>
						<li><a href="#" class="facebook-1 twitter"> </a></li>
						<li><a href="#" class="facebook-1 chrome"> </a></li>
						<li><a href="#"><i class="glyphicon glyphicon-envelope"> </i></a></li>
						<li><a href="#"><i class="glyphicon glyphicon-print"> </i></a></li>
						<li><a href="#"><i class="glyphicon glyphicon-plus"> </i></a></li>
					</ul>
				</div>
				<div class="tc-ch">
					<div class="tch-img ">
						<!--
						###########################################################
						#
						#                ENLACE DEL POST Y COLOCAR IMAGEN
						#
						###########################################################
						-->
						<a href="<?php the_permalink(); ?>">
							<div>
								<?php
								if ( has_post_thumbnail() ) {
								// tamaño de imagen del post
								// the_post_thumbnail('large',array('class'=>'img-thumbnail center-block'));
									the_post_thumbnail(array(700,350),array('class'=>'img-thumbnail center-block'));
								}
								?>
							</div>
						</a> <!--
						###########################################################
						#
						#               FIN ENLACE DEL POST Y COLOCAR IMAGEN
						#
						###########################################################
						-->
					</div>
					<!--
					###########################################################
					#
							#                		CATEGORIA
					#
					###########################################################
					-->
					<a class="blog pink" href= <?php the_category('name',', '); ?>
					</a>
					<h3 class="text-justify"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</h3>
					<!--
					###########################################################
					#
					#                  EXTRACTO DE LA ENTRADA
					#
					###########################################################
					-->
					<p class="text-justify" >
				<?php the_excerpt(); ?>
			</p>
			<a class="btn btn-success" href="<?php the_permalink(); ?>">
				Ver más...
			</a>
			<br><br>
<!--
			###########################################################
			#
			#                   FIN CONTENIDO POST
			#
			###########################################################
			-->
			<!--
			###########################################################
			#
			#               INFORMACION DEL POST
			#
			###########################################################
			-->
			<div class="blog-poast-info">
				<ul>
					<li><i class="fa fa-user"> </i>Por:
						<a class="admin" href="#">
							<!--
							###########################################################
							#
							#                   	CREADOR DEL POST
							#
							###########################################################
							-->
							<?php
							the_author_posts_link() ?>
						</a>
					</li>
					<li><i class="fa fa-calendar"> </i>
						<!--
						###########################################################
						#
						#                 		FECHA DEL POST
						#
						###########################################################
						-->
						<?php the_time('j/m/Y') ?>
					</li>
					<li><i class="fa fa-commenting"> </i>
						<!--
						###########################################################
						#
						#                CANTIDAD DE COMENTARIOS
						#
						###########################################################
						-->
						<?php echo comments_number( 'No Hay Comentarios', ' 1 Comentario', '% Comentarios' );?>
					</li>
				</ul>
			</div>
			<!--
			###########################################################
			#
			#               FIN INFORMACION POST
			#
			###########################################################
			-->
				</div>

				<div class="clearfix"></div>
				<!-- technology-top -->
				<!--
		###########################################################
		#
		#                   FIN LOOP WP
		#
		###########################################################
		-->
		<?php endwhile; else: ?>
		<h3><?php _e('No hay entradas.'); ?></h3>
		<?php endif; ?>
		<!-- #################################### FIN POST #################################### -->
			</div>
		</div>
		<!-- technology-right -->
		<!--
		###########################################################
		#
		#                   BARRA LATERAL
		#
		###########################################################
		-->
		<?php get_sidebar(); ?>
		<!-- technology-right -->

	</div>

</div>
<!-- technology -->
<?php get_header(); ?>
<?php get_template_part( 'template-parts/menu','content' ); ?>
<?php get_template_part( 'template-parts/banner','content' ); ?>
<!-- technology -->
<div class="technology-1">
	<div class="container-fluid">
		<div class="col-md-9 technology-left">
			<div class="business">
				<!--
									###########################################################
									#
									#                    INICIO LOOP WP
									#
									###########################################################
				-->
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div class=" blog-grid2">
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
					<div class="blog-text">
						<div class="container">
							<h2 class="text-justify"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						</div>
						<?php the_content(); ?>
					</div>
				</div>
				<!--
				###########################################################
				#
				#                   FIN LOOP WP
				#
				###########################################################
				-->
				<?php endwhile; else: ?>
				<h3><?php _e(include_once('No Existen entradas')); ?></h3>
				<?php endif; ?>
				<!-- #################################### FIN POST #################################### -->
				<!--
				###########################################################
				#
				#                    Comentarios
				#
				###########################################################
				-->
<hr>
<div class="row">
						<div class="col-md-6 text-left">
							<h5 >Anterior</h5>
							<?php previous_post_link(); ?>
						</div>

						<div class="col-md-6 text-right">
							<h5 >Siguiente</h5>
							<?php next_post_link();?>
						</div>
					</div>

				<div class="comment-top">
					<h2>Comentarios</h2>
					<?php comments_template(); ?>
				</div>
				<!--
				###########################################################
				#
				#                    Fin Comentarios
				#
				###########################################################
				-->
			</div>
		</div>
		<!-- technology-right -->
		<?php get_sidebar(); ?>
	</div>
</div>
<!-- technology -->
<?php get_footer(); ?>
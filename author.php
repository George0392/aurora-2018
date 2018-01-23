<?php get_header(); ?>
<?php get_template_part( 'template-parts/menu','content' ); ?>
<?php get_template_part( 'template-parts/banner','content' ); ?>
<!-- technology -->
<div class="technology-1">
	<div class="container">
		<div class="col-md-9 technology-left">
			<div>
				<!--
				###########################################################
				#
				#                    post
				#
				###########################################################
				-->
				<!--
									###########################################################
									#
									#                    INICIO LOOP WP
									#
									###########################################################
				-->
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
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
					<div class="post-perso">
						<h3 class="text-justify"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

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
					</div>
					<div class="clearfix"></div>
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
									the_author_posts_link(); ?>
								</a>
							</li>
							<li> <i class="fa fa-ticket"></i>
								<!--
								###########################################################
								#
								#                CATEGORIA
								#
								###########################################################
								-->
								<?php the_category(array('class'=>'blog-poast-info')); ?>
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
					<div class="clearfix"></div>
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
				#                    fin post
				#
				###########################################################
				-->
			</div>
			<?php get_template_part( 'template-parts/paginacion','content' ); ?>
		</div>

		<!--
				###########################################################
				#
				#                  SIDEBAR
				#
				###########################################################
		-->
		<!-- technology-right -->
		<?php get_sidebar(); ?>
		<!-- technology-right -->
	</div>
</div>
<!-- technology -->
<!-- technology -->

<?php get_footer(); ?>
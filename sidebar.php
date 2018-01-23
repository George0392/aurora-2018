
<div class="col-md-3 technology-right">
	<div class="clearfix"></div><!-- technology-right -->
	<div class="blo-top">
		<div class="tech-btm">
			<img src="<?php bloginfo( 'template_directory' ); ?>/images/suscribir2.jpg" class="img-responsive" alt=""/>
		</div>
	</div>
	<div class="blo-top">

	</div>
	<div class="blo-top1">
		<div class="tech-btm">


				<!--
			###########################################################
			#
			#                    area de widgets
			#
			###########################################################
			 -->
			<br>
			<!-- ############################# fin post ############################# -->
			<!-- ############################ area de widgets ########################-->
			<?php if( is_active_sidebar('barra-lateral') ) { // Verificamos si el área "barra-lateral" está activa
				dynamic_sidebar( 'barra-lateral' ); // Y si está activa, la cargamos acá
			} //Aquí termina la verificación ?>
			<!-- 		###########################################################
				#
				#                    fin area de widgets
				#
			########################################################### -->
		</div>
	<!--###########################################################
		#
		#                    fin area de widgets
		#
		###########################################################
		 -->
		 <!--
		 ###########################################################
		 #
		 #                    previo y siguiente
		 #
		 ###########################################################
		  -->
		<!-- <?php previous_post_link('%link', '%title', TRUE); ?>
		<?php next_post_link('%link', '%title', TRUE); ?> -->
	</div>
</div>
<div class="clearfix"></div>
<!-- technology-right
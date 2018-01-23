<!--
###########################################################
#
#                    FOOTER
#
###########################################################
-->
<div class="footer">
	<div class="container-fluid">
		<div class="col-md-4 footer-left logo-pie">
			<!--
			###########################################################
			#
					#                    		logo
			#
			###########################################################
			-->
			<img class="logo-footer" src="<?php bloginfo( 'template_directory' ); ?>/images/LogoBlog.png"  alt=""/>
			<!--
			###########################################################
			#
			#                    DESCRIPCION GUARDADA EN WP
			#
			###########################################################
			-->
			<p><?php bloginfo('description'); ?></p>
		</div>
		<div class="col-md-4 footer-middle ">
			<h4>Siguenos en:</h4>
			<div class="center-block">
				<a href="https://www.facebook.com/tiendas.aurora/" target="_blank"><i class="fa fa-3x fa-facebook"></i></a>
				<a href="https://twitter.com/TiendasAurora" target="_blank"><i class="fa fa-3x fa-twitter"></i></a>
				<a href="https://www.instagram.com/tiendasaurora/?hl=es" target="_blank"><i class="fa fa-3x fa-instagram"></i></a>
			</div>
			<p>Para ver más de nuestros productos</p>
		</div>
		<div class="col-md-4 footer-right">
			<h4>Visita Nuestra Tienda Online</h4>
			<a href="www.tiendasaurora.com.ve">www.tiendasaurora.com.ve</a>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!--
###########################################################
#
#                    FIN FOOTER
#
###########################################################
-->
<div class="copyright">
	<div class="container">
		<p>
			&copy;2017 Copyright TIENDAS AURORA C.A. Todos los derechos reservados -
			<a href="http://www.wimax51.com.ve"> Desarrollo: TSU George Galindez / Diseño Gráfico: Mariceli Bonier</a>
		</p>
		</div>
	</div>
	<!--
	###########################################################
	#
	#                    CARGAR FOOTER WP
	#
	###########################################################
	--><?php wp_footer(); ?>
	<!--
	###########################################################
	#
	#                    FIN CARGAR FOOTER WP
	#
	###########################################################
	-->
</body>
</html>
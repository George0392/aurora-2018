<!--
###########################################################
#
# 							MENU
#
########################################################### -->
<div class="head-bottom">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">MENU</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div>
		<div id="navbar" class="navbar-collapse collapse">
<!--
		###########################################################
		#
		# 					FUNCIONES DEL MENU WP
		#
		###########################################################
 -->
			<?php
			$menu = array(
				'container'       => 'ul',
				'menu_class'      => 'nav navbar-nav',
				'theme_location'  => 'principal-menu'
				);
			wp_nav_menu( $menu )
			?>
<!--
		###########################################################
		#
		# 					FIN FUNCIONES DEL MENU WP
		#
		###########################################################
 -->
		</div><!--/.nav-collapse -->
	</div>
</nav>
</div>
<!--
###########################################################
#
# 							FIN MENU
#
###########################################################
-->

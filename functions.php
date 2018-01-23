<?php
/*
###########################################################
#
#                    REGISTRAR ESTILOS
#
###########################################################
*/
function wmt_theme_style() {
  wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css');

  wp_enqueue_style( 'personales', get_template_directory_uri() . '/css/style.css');

  wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/css/font-awesome.css');

  wp_enqueue_style( 'paginacion', get_template_directory_uri() . '/css/pagenavi-css.css');

}
add_action( 'wp_enqueue_scripts', 'wmt_theme_style' );

/*
###########################################################
#
#                    REGISTRAR JAVASCRIPTS
#
###########################################################
*/

function wmt_theme_js() {

 wp_enqueue_script('bootstrap_js', get_template_directory_uri() . '/js/bootstrap.js',array('jquery'), '', true);

}
add_action( 'wp_enqueue_scripts', 'wmt_theme_js' );

/*
###########################################################
#
#                   FUNCION PAGINACION
#
###########################################################
*/

function kriesi_pagination($pages = '', $range = 2)
{
     $showitems = ($range * 2)+1;

     global $paged;
     if(empty($paged)) $paged = 1;

     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     }

     if(1 != $pages)
     {
         echo "<div class='pagination'>";
         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo;</a>";
         if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo;</a>";

         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                 echo ($paged == $i)? "<span class='current'>".$i."</span>":"<a href='".get_pagenum_link($i)."' class='inactive' >".$i."</a>";
             }
         }

         if ($paged < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($paged + 1)."'>&rsaquo;</a>";
         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>&raquo;</a>";
         echo "</div>\n";
     }
}

/*
###########################################################
#
#                    REGISTRAR MENU
#
###########################################################
*/

add_theme_support( 'menus' );

function registrar_menus(){
	register_nav_menus(
		array( 'principal-menu'=> 'Menu Principal')
		);
}

add_action( 'init','registrar_menus' );

/*
###########################################################
#
#        REGISTRAR SIDEBAR --> APARIENCIA->WIDGETS
#
###########################################################
*/

//Con la función register_sidebar, registramos una zona dinámica para nuestro tema y le pasamos algunos parámetros
register_sidebar(array(
    'name'          => __('Sidebar Principal', 'Aurora'), //El nombre del área dinámica
    'id'            => 'barra-lateral', //Un identificador único para la zona
    'description'   => __( 'Este es el área de widgets del sitio.', 'Aurora'), //Una breve descripción
    'before_widget' => '<div id="%1$s" class="widget %2$s">', //Algo de HTML que irá antes de cada widget
    'after_widget'  => '</div>', //Algo de HTML que irá después de cada widget
    'before_title'  => '<h4>', //La etiqueta que irá antes del título de cada widget
    'after_title'   => '</h4>' //La etiqueta que irá después del título de cada widget
    ));

/*
###########################################################
#
#        HABILITAR THUMBNAILS
#
###########################################################
*/

// Creamos una función para registrar algunas características del tema
function soporte_tema()  {

    // Permitimos que el sitio soporte RSS Automáticos
    add_theme_support( 'automatic-feed-links' );

    // Permitimos qe el tema soporte imagenes destacadas
    add_theme_support( 'post-thumbnails');

}

// Ejecutamos la función y registra las características
add_action( 'after_setup_theme', 'soporte_tema' );


/*
###########################################################
#
#                    PERSONALIZAR LOGIN
#
###########################################################
*/


function login_personalizado() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/LogoBlog.png); !important;
            height:180px;
            width:320px;
            background-size: 320px 270px;
            background-repeat: no-repeat;
            padding-bottom: 30px;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'login_personalizado' );
/*
###########################################################
#
#                    enlace en el login
#
###########################################################
*/

function login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'login_logo_url' );
/*
###########################################################
#
#                    titulo desplegado
#
###########################################################
*/

function login_logo_url_title() {
    return 'Tiendas Aurora ';
}
add_filter( 'login_headertitle', 'login_logo_url_title' );

/*
###########################################################
#
#                    estilo en el login
#
###########################################################
*/

function login_stylesheet() {
    wp_enqueue_style( 'custom-login', get_stylesheet_directory_uri() . '/style-login.css' );
    wp_enqueue_script( 'custom-login', get_stylesheet_directory_uri() . '/style-login.js' );
}
add_action( 'login_enqueue_scripts', 'login_stylesheet' );

/*
###########################################################
#
#                    logo en el backend
#
###########################################################
*/

function wpb_custom_logo() {
echo '
<style type="text/css">
#wpadminbar #wp-admin-bar-wp-logo > .ab-item .ab-icon:before {
background-image: url(' . get_bloginfo('stylesheet_directory') . '/images/111.png) !important;
background-position: 0 0;
color:rgba(0, 0, 0, 0);
}
#wpadminbar #wp-admin-bar-wp-logo.hover > .ab-item .ab-icon {
background-position: 0 0;
}
</style>
';
}

//hook into the administrative header output
add_action('wp_before_admin_bar_render', 'wpb_custom_logo');

###########################################################
#
#                    CAMBIAR FOOTER EN ADMIN
#
###########################################################

function cambiar_footer_admin() {
    echo '&copy;2017 Copyright TIENDAS AURORA C.A. Todos los derechos reservados - Web creada por <a href="http://www.wimax51.com.ve"> Desarrollo: TSU George Galindez / Diseño Gráfico: Mariceli Bonier</a>';
}
add_filter('admin_footer_text', 'cambiar_footer_admin');




?>
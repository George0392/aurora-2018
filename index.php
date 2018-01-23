<!--
###########################################################
#
#                    HEADER WP
#
###########################################################
 -->
<?php get_header(); ?>

<?php get_template_part( 'template-parts/menu','content' ); ?>
<?php get_template_part( 'template-parts/banner','content' ); ?>
<?php get_template_part( 'template-parts/entradas','content' ); ?>


<!--
###########################################################
#
#                    FOOTER WP
#
###########################################################
 -->
<?php get_template_part( 'template-parts/paginacion','content' ); ?>
<?php get_footer(); ?>
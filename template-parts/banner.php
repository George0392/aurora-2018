
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">

<?php

$query_args = array(
  'post_type'      =>'slider',
  'posts_per_page' =>'',
  'offset'         =>2,


);
$query = new WP_Query( $query_args ); ?>



<?php if (have_posts()) : while ($query -> have_posts()) : $query -> the_post(); ?>

    <div class="item active">
      <img class="img-responsive" src="<?php the_field('imagen') ;?>" alt="aurora1">
      <div class="carousel-caption">
        <h3><?php the_field('titulo') ;?></h3>
        <p><?php the_field('descripcion') ;?></p>
      </div>
    </div>

<?php endwhile; wp_reset_query(); else: ?>
    <h3><?php _e(include_once('No Existen entradas')); ?></h3>
    <?php endif; ?>

<!-- ######################################################## -->

<?php


$query_args2 = array(
  'post_type'      =>'slider',
  'posts_per_page' =>-2,
  'offset'         =>0,

);
$query2 = new WP_Query( $query_args2 ); ?>

<?php if (have_posts()) : while ($query2 -> have_posts()) : $query2 -> the_post(); ?>
    <div class="item">
       <img class="img-responsive" src="<?php the_field('imagen') ;?>" alt="aurora1">
      <div class="carousel-caption">
        <h3><?php the_field('titulo') ;?></h3>
        <p><?php the_field('descripcion') ;?></p>
      </div>
    </div>
<?php endwhile; wp_reset_query(); else: ?>
    <h3><?php _e(include_once('No Existen entradas')); ?></h3>
    <?php endif; ?>

  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
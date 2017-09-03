<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage csiangleur
 * @since CSIAngleur 0.0.1
 */

get_header(); ?>

 <?php the_post(); ?>

 <div class="main main__content">
     <h1 class="page-title"><?php the_title(); ?></h1>

     <div>
         <?php the_content(); ?>
     </div>

 </div>

 <?php get_footer(); ?>

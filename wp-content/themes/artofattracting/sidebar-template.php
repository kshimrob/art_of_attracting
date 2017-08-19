<?php
/**
 * The template for displaying single posts
 * Template Name: Sidebar Template
 * @package WordPress
 * @subpackage Skillcrush_Starter
 * @since Skillcrush Starter 1.0
 */

get_header(); ?>

<section class="sidebar-page">    
  <div class="sidebar-page-content">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
    the_content();
    endwhile; else: ?>
    <p>Sorry, cannot find the page.</p>
    <?php endif; ?>
  </div>
  <?php get_sidebar(); ?>
</section>


<?php get_footer(); ?>
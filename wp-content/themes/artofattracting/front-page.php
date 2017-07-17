<?php
/**
 * The template for the homepage
 *
 * @package WordPress
 * @subpackage Skillcrush_Starter
 * @since Skillcrush Starter 2.0
 */

get_header(); ?>

<section class="index-page">    
  <div class="main-content">
    <?php
$page = get_page_by_title( 'Welcome' );
$content = apply_filters('the_content', $page->post_content); 
echo $content;
?>
  </div>
  
  <?php get_sidebar(); ?>
  
</section>

<?php get_footer(); ?>
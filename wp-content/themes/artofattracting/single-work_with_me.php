<?php get_header(); ?>

  
<?php $intro = get_field('intro'); ?>
<?php $body = get_field('body'); ?>

<div class="case-study">
  <section class="case-study-info">
    <h1 class="case-study-title"><?php echo $intro; ?></h1>

    <p><?php echo $body; ?></p>

  </section>

</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
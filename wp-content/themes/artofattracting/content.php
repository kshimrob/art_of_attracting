<article id="post-<?php the_ID(); ?>" class="post-entry">
	<div class="entry-wrap">
		<header class="entry-header">
			<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<div class="entry-meta">
				<h3 class="entry-time"><?php the_date(); ?></h3>
			</div>
		</header>
		<div class="entry-summary">
			<?php if ( has_post_thumbnail() ) : ?>
			  <figure>
			    <?php the_post_thumbnail('full'); ?>
			  </figure>
			<?php endif; ?>
			<?php the_content(); ?>
		</div>
		<footer class="entry-footer">
			<div class="entry-meta">
					<span class="entry-terms comments author">
						Written by <?php the_author(); ?>
						/
						Posted in <?php the_category(', '); ?>
						/
						<?php echo get_comments_number(); ?> comments
						</span>
			</div>
		</footer>
	</div>
</article>
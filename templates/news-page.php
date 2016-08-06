<?php
/**
 * Template Name: News
 */
?>

<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; query_posts("cat=2&paged=$paged"); ?>

<?php while (have_posts()) : the_post(); ?>
    <div class="post">
        <h2>
            <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
        </h2>
		<div class="subtitle">
			<?php the_time('F j, Y'); ?>
			<?php the_tags(' | ', ', ', ''); ?>
			<?php if ( $user_ID ) : ?> | <?php edit_post_link("Edit"); ?> <?php endif; ?>
            <!-- | <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>-->
		</div>

        <?php the_excerpt(); ?>

		<hr/>
	</div>

<?php endwhile; ?>

<?php if ($wp_query->max_num_pages > 1) : ?>
  <nav class="post-nav">
    <ul class="pager">
      <li class="previous"><?php next_posts_link(__('&larr; Older posts', 'roots')); ?></li>
      <li class="next"><?php previous_posts_link(__('Newer posts &rarr;', 'roots')); ?></li>
    </ul>
  </nav>
<?php endif; ?>

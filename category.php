<?php

?>

<h1>Cat</h1>



<?php $i = 0; ?>

<?php while (have_posts()) : the_post(); ?>
    <? if ($i % 3 == 0) { ?>
        <div class="row">
            <div class="col-md-4">
                <?php get_template_part('templates/_thumb','module'); ?>
            </div>
    <? } else if ($i % 3 == 1) { ?>
            <div class="col-md-4">
                <?php get_template_part('templates/_thumb','module'); ?>
            </div>
    <? } else if ($i % 3 == 2) { ?>
            <div class="col-md-4">
                <?php get_template_part('templates/_thumb','module'); ?>
            </div>
        </div>
    <? } ?>
    <? $i += 1; ?>

<?php endwhile; ?>

<?php if ($wp_query->max_num_pages > 1) : ?>
  <nav class="post-nav">
    <ul class="pager">
      <li class="previous"><?php next_posts_link(__('&larr; Older posts', 'roots')); ?></li>
      <li class="next"><?php previous_posts_link(__('Newer posts &rarr;', 'roots')); ?></li>
    </ul>
  </nav>
<?php endif; ?>

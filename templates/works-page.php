<?php
/**
 * Template Name: Works
 */
?>

<!-- <?php get_template_part('templates/page', 'header'); ?> -->

<?php $paged = query_posts(array(
    'category_name'  => 'work',
    'posts_per_page' => -1
)); ?>

<? $i = 0; ?>

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

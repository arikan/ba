<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' ); ?>
<?php $image_url = $thumb[0] ?>

<a href="<?php the_permalink() ?>">
    <div class="thumb-as-bg" style="background: url(<?php echo $image_url; ?>); background-size: cover; background-repeat: no-repeat; background-position: center; background-color: #f5e6db;"></div>
</a>
<div class="caption">
    <h3>
        <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
    </h3>
    <?php
        $category = get_the_category();
        if ($category) {
          echo '<time class="published"><a href="'.esc_url( home_url( '/' ) ) . 'works' . '/' . $category[0]->slug . '/" title="' . sprintf( __( "View all works in %s" ), $category[0]->name ) . '" ' . '>' . $category[0]->name.'</a></time>';
        }
    ?>
</div>

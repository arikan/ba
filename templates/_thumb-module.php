<a href="<?php the_permalink() ?>">
    <? the_post_thumbnail('medium'); ?>
</a>
<h3>
    <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
</h3>

<span class="work-year">
    <?php
    $category = get_the_category();
    if ($category) {
      echo '<a href="'.esc_url( home_url( '/' ) ) . $category[0]->slug . '/' . $category[1]->slug . '/" title="' . sprintf( __( "View all works in %s" ), $category[1]->name ) . '" ' . '>' . $category[1]->name.'</a> ';
    }
    ?>


</span>

<a href="<?php the_permalink() ?>">
    <? the_post_thumbnail('medium', array( 'class' => 'img-responsive', 'title' => the_title_attribute( 'echo=0' ) )); ?>
</a>
<h3>
    <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
</h3>
<?php
    $category = get_the_category();
    if ($category) {
      echo '<time class="published"><a href="'.esc_url( home_url( '/' ) ) . 'works' . '/' . $category[1]->slug . '/" title="' . sprintf( __( "View all works in %s" ), $category[1]->name ) . '" ' . '>' . $category[1]->name.'</a></time>';
    }
?>

<?php while (have_posts()) : the_post(); ?>
    <article <?php post_class(); ?>>
        <?php if ( !is_singular() || !has_post_thumbnail( $post->ID ) ) { ?>
            <header>
                <h1 class="entry-title"><?php the_title(); ?></h1>
                <?php get_template_part('templates/entry-meta'); ?>
            </header>
        <?php } ?>

        <div class="entry-content">
            <figcaption class="info">
                <p class="info">
                <?php
                    $category = get_the_category();
                    if ($category && $category[0]->slug != 'blog') {
                        echo '<time class="published"><a href="'.esc_url( home_url( '/' ) ) . 'works' . '/' . $category[0]->slug . '/" title="' . sprintf( __( "View all works in %s" ), $category[0]->name ) . '" ' . '>' . $category[0]->name.'</a></time>';
                    }
                ?>
                <?php
                    $category = get_the_category();
                    if ($category && $category[0]->slug != 'blog') {
                ?>
                    ・
                    <span class="entry-tags">
                        <?php the_tags("", ", ", $after ); ?>
                    </span>

                    <?php $view_interactive = get_post_meta($post->ID, "view_interactive", true); ?>
                    <?php if($view_interactive) { ?>
                        <span class="view-interactive">
                            ・ <a href="<?php echo $view_interactive; ?>" target="_blank">View interactive</a>
                        </span>
                    <?php } ?>
                <?php
                    }
                ?>
                </p>
            </figcaption>

            <?php the_content(); ?>
        </div>

        <footer>
            <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
        </footer>

        <?php comments_template('/templates/comments.php'); ?>
    </article>
<?php endwhile; ?>

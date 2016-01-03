<?php while (have_posts()) : the_post(); ?>
    <article <?php post_class(); ?>>
        <header>
            <h1 class="entry-title"><?php the_title(); ?></h1>
            <?php get_template_part('templates/entry-meta'); ?>
        </header>
        <div class="entry-content">
            <div class="row">
                <div class="col-sm-4">
                    <?php
                        $category = get_the_category();
                        if ($category) {
                            echo '<time class="published"><a href="'.esc_url( home_url( '/' ) ) . 'works' . '/' . $category[1]->slug . '/" title="' . sprintf( __( "View all works in %s" ), $category[1]->name ) . '" ' . '>' . $category[1]->name.'</a></time>';
                        }
                    ?>
                    <?php $view_interactive = get_post_meta($post->ID, "view_interactive", true); ?>
                    <?php if($view_interactive) { ?>
                        <span class="view-interactive">
                            <?php echo $view_interactive; ?>
                        </span>
                    <?php } ?>
                </div>
                <div class="col-sm-8">
                    <div class="entry-tags">
                        <?php the_tags("", ", ", $after ); ?>
                    </div>
                </div>
            </div>

            <?php the_content(); ?>
        </div>
        <footer>
            <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
        </footer>
        <?php comments_template('/templates/comments.php'); ?>
    </article>
<?php endwhile; ?>

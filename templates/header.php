<!-- <nav class="banner navbar navbar-default navbar-static-top" role="banner"> -->
<nav class="navbar navbar-default navbar-custom navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a href="#" class="toggle-search"><span class="glyphicon glyphicon-search"></span></a>
            <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
        </div>

        <?php get_template_part('templates/searchform', ''); ?>

        <div class="collapse navbar-collapse" role="navigation">
            <ul id="menu-primary-menu" class="nav navbar-nav navbar-right">
        		<?php wp_nav_menu( array(
        			'theme_location' => 'primary_navigation',
        	        'menu_class' => 'nav navbar-nav navbar-right',
        	        'container' => '',
        	        'echo' => true,
        	        'before' => '',
        	        'after' => '',
        	        'link_before' => '',
        	        'link_after' => '',
        	        'depth' => 0,
        	        'items_wrap' => '%3$s'
        		) ); ?>        ​

                <li class="menu-item menu-item-type-post_type menu-item-object-page language">
                    <?php echo qtranxf_generateLanguageSelectCode('text'); ?>
                </li>
         	</ul>
        </div> <!-- /.navbar-collapse -->

        <?php
          if ( is_singular() && has_post_thumbnail( $post->ID ) ) {
            $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
            $post_author_id = get_post_field( 'post_author', $post->ID );
        ?>
            <style type="text/css" media="screen">
                .post-cover {
                  background: -moz-linear-gradient(top,  rgba(0,0,0,0.3) 0%, rgba(0,0,0,0) 100%), url('<?= $large_image_url[0] ?>') no-repeat center center #333333; /* FF3.6+ */
                  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,0,0,0.3)), color-stop(100%,rgba(0,0,0,0))); /* Chrome,Safari4+ */
                  background: -webkit-linear-gradient(top,  rgba(0,0,0,0.3) 0%,rgba(0,0,0,0) 100%), url('<?= $large_image_url[0] ?>') no-repeat center center #333333; /* Chrome10+,Safari5.1+ */
                  background: -o-linear-gradient(top,  rgba(0,0,0,0.3) 0%,rgba(0,0,0,0) 100%), url('<?= $large_image_url[0] ?>') no-repeat center center #333333; /* Opera 11.10+ */
                  background: -ms-linear-gradient(top,  rgba(0,0,0,0.3) 0%,rgba(0,0,0,0) 100%), url('<?= $large_image_url[0] ?>') no-repeat center center #333333; /* IE10+ */
                  background: linear-gradient(to bottom,  rgba(0,0,0,0.3) 0%,rgba(0,0,0,0) 100%), url('<?= $large_image_url[0] ?>') no-repeat center center #333333; /* W3C */
                  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#a3000000', endColorstr='#00000000',GradientType=0 ), url('<?= $large_image_url[0] ?>') no-repeat center center #333333; /* IE6-9 */
                  background-size: cover;
                  background-position: center;
                }
                .navbar-default .navbar-brand, .navbar-default .navbar-nav > li > a, a#search-link, .navbar-default .navbar-toggle:hover, .navbar-default .navbar-toggle:focus {
                  color: #FFFFFF;
                }
                .navbar-default .navbar-brand:hover, .navbar-default .navbar-brand:focus, .navbar-default .navbar-nav > li > a:hover {
                  text-decoration: underline;
                  color: #FFFFFF;
                }
                article header, .main .page-header {
                  text-align: center;
                }
            </style>
            <div class="post-cover">
                <div class="post-cover-inner">
                    <h1 class="entry-title"><?php the_title(); ?></h1>
                    <p class="lead">
                        <?php the_subtitle(); ?>
                    </p>
                    <!-- <p class="byline author vcard">
                        <a href="<?php echo get_author_posts_url(get_the_author_meta('ID', $post_author_id)); ?>" rel="author" class="fn"><?php echo get_the_author_meta('display_name', $post_author_id); ?></a>
                        &nbsp; <time class="published" datetime="<?php echo get_the_time('c'); ?>"><?php echo get_the_date('M j, Y'); ?></time>
                    </p> -->
                </div>
            </div>

        <?php } ?>

    </div> <!-- /.container -->
</nav>
<!-- </header> -->

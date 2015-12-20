<header class="banner navbar navbar-default navbar-static-top" role="banner">
    <div class="container">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>

            <?php get_template_part('templates/searchform', ''); ?>

            <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
              <?php bloginfo('name'); ?>
            </a>

            <!-- <span class="glyphicon glyphicon-search"></span> -->
        </div>

        <nav class="collapse navbar-collapse" role="navigation">

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

        </nav>


    </div>
</header>

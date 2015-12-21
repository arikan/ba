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

    </div> <!-- /.container -->
</nav>
<!-- </header> -->

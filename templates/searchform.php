<div class="search-module search">
    <form role="search" method="get" class="search-form form-inline" action="<?php echo esc_url(home_url('/')); ?>">
        <label class="sr-only"><?php _e('Search for:', 'roots'); ?></label>
        <input type="search" value="<?php echo get_search_query(); ?>" name="s" class="search-field typeahead" placeholder="<?php _e('Search', 'roots'); ?>" lang="en" tabindex="1" autocomplete="off" spellcheck="false" dir="auto" autofocus>
        <a href="" class="close-search">&times;</a>
    </form>
</div>

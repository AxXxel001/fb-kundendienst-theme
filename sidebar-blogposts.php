<?php if ( is_active_sidebar( 'sidebar_blogposts' ) ) : ?>
    <div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
        <?php dynamic_sidebar( 'sidebar_blogposts' ); ?>
    </div><!-- #primary-sidebar -->
<?php endif; ?>
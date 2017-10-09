<?php
/*
Template Name: Blogposts
*/
?>
<?php
$template_root = get_template_directory_uri();
get_header();
?>
  <div class="content">
    <div class="content-sidebarcontainer w-container">
      <div class="left-content-wrapper">

          <div id="ad-top" class="ad">
              <!-- TOP ADVERTISEMENT -->
              <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
              <!-- Kundendienst Detail -->
              <ins class="adsbygoogle"
                   style="display:block"
                   data-ad-client="ca-pub-6430793242219369"
                   data-ad-slot="4856011530"
                   data-ad-format="auto"></ins>
              <script>
                  (adsbygoogle = window.adsbygoogle || []).push({});
              </script>
          </div>

          <?php
            $post_counter = 1;
          ?>

        <!-- Start the Loop. -->
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <?php
          if (! has_category('fb-kundendienst-beschwerde')) {
              continue;
          }
        ?>

        <div class="fb-post-full-wrapper">
          <a style="text-decoration: none !important; color: black !important;" href="<?php echo get_the_permalink(); ?>"><h2 class="fb-post-headline"><?php the_title(); ?></h2></a>
          
          <div class="fb-post-meta-wrapper">
            <div class="fb-post-meta-left-wrapper">
              <div>von&nbsp;<?php the_author(); ?></div>
            </div>
            <div>
              <div><?php the_date(); ?></div>
            </div>
          </div>
          <div class="fb-post-author-comment"><?php the_field('intro_text'); ?></div>
          <div class="blogpost-wrapper">
            <div class="fb-post-wrapper"><img class="fb-post-image" src="https://d3e54v103j8qbb.cloudfront.net/img/image-placeholder.svg" width="64">
              <div class="fb-post-data-wrapper">
                <div class="fb-post-data-name-wrapper">
                  <div class="fb-blue"><?php the_field('name'); ?></div><img class="fb-post-data-name-icon" src="https://d3e54v103j8qbb.cloudfront.net/img/image-placeholder.svg" width="15">
                  <div class="fb-blue"><?php the_field('unternehmen'); ?></div>
                </div>
              </div>
            </div>
            <div class="fb-post-text"><?php the_field('post_html'); ?></div>
          </div>
        </div>
        <a href="<?php echo get_the_permalink(); ?>" class="elementor-button-link elementor-button elementor-size-lg">Weiterlesen</a>

            <?php
                if ($post_counter % 5 == 0) {
                    echo '<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<ins class="adsbygoogle"
     style="display:block"
     data-ad-format="fluid"
     data-ad-layout="image-middle"
     data-ad-layout-key="-ek+6d+b-cz+me"
     data-ad-client="ca-pub-6430793242219369"
     data-ad-slot="6643578330"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>';
                }
                $post_counter++;
            ?>

        <?php endwhile;
        else : ?>

            <!-- The very first "if" tested to see if there were any Posts to -->
            <!-- display.  This "else" part tells what do if there weren't any. -->
            <p><?php _e('Aktuell sind keine Beiträge vorhanden.'); ?></p>

            <!-- REALLY stop The Loop. -->
        <?php endif; ?>

          <div id="ad-bottom" class="ad">
              <!-- BOTTOM ADVERTISEMENT -->
              <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
              <!-- Content-Bottom -->
              <ins class="adsbygoogle"
                   style="display:block"
                   data-ad-client="ca-pub-6430793242219369"
                   data-ad-slot="1552400734"
                   data-ad-format="auto"></ins>
              <script>
                  (adsbygoogle = window.adsbygoogle || []).push({});
              </script>
          </div>

      </div>
      <div class="sidebar-wrapper">
        <?php get_sidebar('blogposts'); ?>
      </div>

    </div>
  </div>

<?php get_footer(); ?>
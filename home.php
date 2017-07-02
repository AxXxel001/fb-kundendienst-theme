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

        <div class="ad">
          <div>/////// INSERT AD HERE //////////</div>
        </div>

        <!-- Start the Loop. -->
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <div class="fb-post-full-wrapper">
          <h2 class="fb-post-headline">Kundendienst bei Unternehmen X</h2>
          <div class="fb-post-meta-wrapper">
            <div class="fb-post-meta-left-wrapper">
              <div>von Alex</div>
            </div>
            <div>
              <div>17.06.2017</div>
            </div>
          </div>
          <div class="fb-post-author-comment">This is some text inside of a div block.</div>
          <div class="blogpost-wrapper">
            <div class="fb-post-wrapper"><img class="fb-post-image" src="https://d3e54v103j8qbb.cloudfront.net/img/image-placeholder.svg" width="64">
              <div class="fb-post-data-wrapper">
                <div class="fb-post-data-name-wrapper">
                  <div class="fb-blue">Vorname <span class="blur">Nachname</span>
                  </div><img class="fb-post-data-name-icon" src="https://d3e54v103j8qbb.cloudfront.net/img/image-placeholder.svg" width="15">
                  <div class="fb-blue">Unternehmen</div>
                </div>
              </div>
            </div>
            <div class="fb-post-text">This is some text inside of a div block.</div>
          </div>
        </div>

        <?php endwhile;
        else : ?>

            <!-- The very first "if" tested to see if there were any Posts to -->
            <!-- display.  This "else" part tells what do if there weren't any. -->
            <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>

            <!-- REALLY stop The Loop. -->
        <?php endif; ?>






      </div>
      <div class="sidebar-wrapper">
        <div class="ad">
          <div>/////// INSERT AD HERE //////////</div>
        </div>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.</p>
      </div>
    </div>
  </div>

<?php get_footer(); ?>
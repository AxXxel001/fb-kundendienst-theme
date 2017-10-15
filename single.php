<?php
/*
Template Name: Single Blogpost
*/
?>


<?php $template_root = get_template_directory_uri(); get_header(); ?>

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
                if (! has_category('fb-kundendienst-beschwerde')) {
                    echo 'Oh Oh! Falscher Post-Typ!...';
                }
                ?>

                <div class="fb-post-full-wrapper">
                    <a style="text-decoration: none !important; color: black !important;" href="<?php echo get_the_permalink(); ?>"><h2 class="fb-post-headline"><?php the_title(); ?></h2>
                    </a>
                    
                    <div class="fb-post-meta-wrapper">
                        <div class="fb-post-meta-left-wrapper">
                            <div>von&nbsp;<?php the_author();?></div>
                        </div>
                        <div>
                            <div><?php the_date(); ?></div>
                        </div>
                    </div>
                    
                    <div class="fb-post-author-comment"><?php the_field('intro_text'); ?></div>
                    <div class="blogpost-wrapper">
                        <div class="fb-post-wrapper"><img class="fb-post-image"
                                                          src="https://d3e54v103j8qbb.cloudfront.net/img/image-placeholder.svg"
                                                          width="64">
                            <div class="fb-post-data-wrapper">
                                <div class="fb-post-data-name-wrapper">
                                    <div class="fb-blue"><?php the_field('name'); ?></div>
                                    <img class="fb-post-data-name-icon"
                                         src="https://d3e54v103j8qbb.cloudfront.net/img/image-placeholder.svg"
                                         width="15">
                                    <div class="fb-blue"><?php the_field('unternehmen'); ?></div>
                                </div>
                            </div>
                        </div>
                        <div class="fb-post-text"><?php the_field('post'); ?></div>
                    </div>
                </div>


                <?php

                // check if the flexible content field has rows of data
                if( have_rows('answer') ):

                    // loop through the rows of data
                    while ( have_rows('answer') ) : the_row();

                        if( get_row_layout() == 'kundendienst-kommentar' ):

                            echo 'Kundendienst:<br>';
                            the_sub_field('text');

                        elseif( get_row_layout() == 'nutzer-kommentar' ):
                            echo 'Nutzer:<br>';
                            $file = get_sub_field('text');

                        endif;

                    endwhile;

                else :

                    // no layouts found

                endif;

                ?>



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
                <?php get_sidebar('single'); ?>
                <!--
                <div class="ad">
                  <div>/////// INSERT AD HERE //////////</div>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.</p>
                -->
            </div>


        </div>
    </div>

<?php get_footer(); ?>
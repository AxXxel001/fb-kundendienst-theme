<?php
$template_root = get_template_directory_uri();
?>

</div>
<div class="footer">
    <div class="w-container">
        <div class="w-row">
            <div class="footer-column w-col w-col-4">


                <!-- NAVBAR WIE OBEN!!!!!!!!! -->

                <h3 class="footer-headline">Facebook Kundendienst</h3>

                <div class="footer-nav-menu">
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'fb-kundendienst-menu'
                        )
                    );
                    ?>
                </div>

                <!--
                <ul class="w-list-unstyled">
                    <li><a class="footer-link" href="#">Text Link</a>
                    </li>
                    <li><a class="footer-link" href="#">Text Link</a>
                    </li>
                    <li><a class="footer-link" href="#">Text Link</a>
                    </li>
                </ul>
                -->
            </div>



            <div class="footer-column w-col w-col-4">
                <h3 class="footer-headline">Social</h3>
                <ul class="w-list-unstyled">
                    <li><a class="footer-link" href="#">Text Link</a>
                    </li>
                    <li><a class="footer-link" href="#">Text Link</a>
                    </li>
                    <li><a class="footer-link" href="#">Text Link</a>
                    </li>
                </ul>
            </div>

            <!-- BESCHWERDE NEWSLETTER!!! -->

            <?php
                $posts = get_posts(array('category' => 'fb-kundendienst-beschwerde'));
                $length = sizeof($posts);
                $choice = rand(0, $length-1);
                setup_postdata( $posts[$choice] );
                $current_post = get_post($id);
            ?>

            <div class="footer-column w-col w-col-4">
                <h3 class="footer-headline">Mach jetzt mit!</h3>
                <blockquote class="footer-quote"><?php echo $current_post->post_content; ?></blockquote>
                <div class="footer-quote-name">-&nbsp;<?php echo get_field('person_name', $id); ?></div>
                <div>
                    <form data-name="Email Form" id="email-form" name="email-form">
                        <input class="w-input" data-name="email" id="email-2" maxlength="256" name="email" placeholder="Deine Emailadresse..." required="required" type="email">
                        <textarea class="w-input" data-name="answer" id="answer" maxlength="5000" name="answer" placeholder="Deine Kundendienst Antwort..." required="required"></textarea>
                        <input class="button button-full-width w-button" data-wait="Bitte warten..." type="submit" value="Antwort einreichen!">
                    </form>
                    <div class="w-form-done">
                        <div>Thank you! Your submission has been received!</div>
                    </div>
                    <div class="w-form-fail">
                        <div>Oops! Something went wrong while submitting the form</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo $template_root;?>/js/webflow.js" type="text/javascript"></script>
<!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>
</html>

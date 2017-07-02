<?php
$template_root = get_template_directory_uri();
?>

<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <title>Facebook Kundendienst - Ich hoffe, ich konnte Ihnen weiterhelfen</title>
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="Webflow" name="generator">
    <link href="<?php echo $template_root;?>/css/normalize.css" rel="stylesheet" type="text/css">
    <link href="<?php echo $template_root;?>/css/webflow.css" rel="stylesheet" type="text/css">
    <link href="<?php echo $template_root;?>/css/fb-kundendienst-theme.webflow.css" rel="stylesheet" type="text/css">
    <link href="<?php echo $template_root;?>/css/custom_css.css" rel="stylesheet" type="text/css">
    <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
    <script type="text/javascript">
        !function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);
    </script>
    <link href="https://daks2k3a4ib2z.cloudfront.net/img/favicon.ico" rel="shortcut icon" type="image/x-icon">
    <link href="https://daks2k3a4ib2z.cloudfront.net/img/webclip.png" rel="apple-touch-icon">
    <?php wp_head(); ?>
</head>
<body class="body">
<div class="navbar w-nav" data-animation="default" data-collapse="medium" data-duration="400">
    <div class="navbar-container w-container">
        <a class="navbar-brand w-nav-brand" href="#">
            <img
                sizes="(max-width: 479px) 85vw, (max-width: 767px) 86vw, (max-width: 991px) 668px, 483.4375px"
                src="<?php echo $template_root;?>/images/logo_full.png"
                srcset="<?php echo $template_root;?>/images/logo_full-p-500.png 500w, <?php echo $template_root;?>/images/logo_full-p-800.png 800w, <?php echo $template_root;?>/images/logo_full-p-1080.png 1080w, <?php echo $template_root;?>/images/logo_full.png 1500w">
        </a>

        <!-- !!! NAVBAR !!! -->

        <nav class="navbar-menu w-nav-menu" role="navigation">

            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'fb-kundendienst-menu',
                    'before' => '<div class="navbar-navlink w-nav-link">',
                    'after' => '</div>'
                )
            );
            ?>

            <!--
            <a class="navbar-navlink w-nav-link" href="#">Home</a>
            <a class="navbar-navlink w-nav-link" href="with-sidebar.html">with-sidebar</a>
            <a class="navbar-navlink w-nav-link" href="blogpost.html">blogpost</a>
            <a class="navbar-navlink w-nav-link" href="single.html">single</a>
            -->

        </nav>
        <div class="w-nav-button">
            <div class="w-icon-nav-menu"></div>
        </div>
    </div>
</div>

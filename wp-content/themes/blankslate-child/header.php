<!DOCTYPE html>
    <html <?php language_attributes(); ?>>

        <head>
            <?php include (get_stylesheet_directory() . '/inc/public/google-tag-manager-head.php'); ?>

            <meta name="facebook-domain-verification" content="dw5wrjx0uvh4pdv9gv0a7c571rg5j6" />
            <meta charset="<?php bloginfo( 'charset' ); ?>" />
            <meta name="viewport" content="width=device-width" />
            <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
            <?php wp_head(); ?>
        </head>

        <body <?php body_class(); ?>>

            <?php include (get_stylesheet_directory() . '/inc/public/google-tag-manager-body.php'); ?>

            <div id="wrapper" class="hfeed">
                <header id="header">

                    <script>
                        function myFunction() {
                            var x = document.getElementById("menu_mob");
                            if (x.style.display === "block") {
                                x.style.display = "none";
                            } else {
                                x.style.display = "block";
                            }
                        }
                    </script>

                    <div id="main_header">
                        <nav id="menu_mob">
                            <a href="/" id="main_logo_mob_menu"></a>
                            <a href="#" onClick="myFunction()" id="hamb_close">
                                <div class="hamb_bar_close"></div>
                            <a>
                            <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
                        </nav>

                        <a href="/" id="main_logo"></a>
                        <div class="phone_menu">
                            <a href="tel:1-800-555-5485" id="main_phone_mob">1-800-555-5485</a>
                            <a href="tel:1-800-555-5485" id="main_phone">1-800-555-5485</a>
                            <a href="#" onClick="myFunction()" id="hamb">
                                <div class="hamb_bar"></div>
                                <div class="hamb_bar"></div>
                                <div class="hamb_bar"></div>
                            <a>
                            <nav id="menu">
                                <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
                            </nav>
                        </div>
                    </div>
                </header>
                <div id="container">
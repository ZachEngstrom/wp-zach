<?php
function my_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/img/bcbsmn-logo.png);
            background-size: 169px 56px;
            width: 169px;
            height: 56px;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );
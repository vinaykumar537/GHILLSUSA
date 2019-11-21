<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Ghills
 * @since 1.0
 * @version 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="icon" type="image/png" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/favicon.png" sizes="32x32"/>
        <link href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/css/bootstrap.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/css/style.css">
        <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/css/font-awesome.min.css" type="text/css" media="all">
        <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/css/custom.css">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/js/bootstrap.min.js"></script>
        <script src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/js/docs.min.js"></script>
        <?php wp_head(); ?>
    </head>
    <?php
    $custom_logo_id = get_theme_mod('custom_logo');
    $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
    ?>
    <body <?php body_class(); ?>>
        <!--<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'ghills'); ?></a>-->
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                    <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo $logo[0];?>" class="img-responsive" alt="Ghills"/></a> 
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                 <?php if (has_nav_menu('main_menu')) : ?>
                            <?php
                            wp_nav_menu(array(
                                'theme_location' => 'main_menu',
                                  'depth' => 2,
                                'menu_id' => 'menu-primary',
                                'menu_class' => 'nav navbar-nav navbar-right',
                                  'walker' => new wp_bootstrap_navwalker()
                            ));
                            ?>
            <?php endif; ?>
            </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>
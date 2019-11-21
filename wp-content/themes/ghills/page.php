<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Curatepartners
 * @since 1.0
 * @version 1.0
 */
get_header();
?>
<div class="page_title">
    <h2 class="text-primary text-center no-margin-top text-uppercase"><?php the_title();?></h2>
</div>
<div class="inner_content">
    <div class="container">
<?php the_content(); ?>
</div>
    </div>
<?php get_footer(); ?>
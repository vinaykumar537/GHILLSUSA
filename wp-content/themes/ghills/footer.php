<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */
?>
<div class="bgColor5 footer-copybar">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
                  <?php if (is_active_sidebar('footer')) : ?>
                    <?php dynamic_sidebar('footer'); ?>
            <?php endif; ?>	
       </div>
    </div>
  </div>
</div>
<?php wp_footer(); ?>
</body>
</html>



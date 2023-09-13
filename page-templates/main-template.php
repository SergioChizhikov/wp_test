<?php

/**
 * Template Name: Template: Home
 *
 * Template for displaying main page
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();

?>

<div class="container">
  <h1 class="text-center"><?php echo the_title(); ?></h1>
  <div class="row">
    <div class="col-md-6"><?php echo the_content(); ?></div>
    <div class="col-md-6"><img src="<?php echo get_template_directory_uri(); ?>/img/sea.jpg" alt="" width="100%"></div>
  </div>
</div>

<?php
get_footer();
?>

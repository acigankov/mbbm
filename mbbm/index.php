<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mbbm
 */

get_header();
?>

	<main >

        <?php include_once('inc/_section-purpose.php'); ?>
        <?php include_once('inc/_section-for.php'); ?>
        <?php include_once('inc/_section-autors.php'); ?>
        <?php include_once('inc/_section-testimonials.php'); ?>
        <?php include_once('inc/_section-program.php'); ?>
        <?php include_once('inc/_section-tarifs.php'); ?>
        <?php include_once('inc/_section-callback.php'); ?>

	</main><!-- #main -->

<?php
get_footer();

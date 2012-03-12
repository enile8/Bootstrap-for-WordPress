<?php
/**
 * Template Name: One column, no sidebar
 *
 */

get_header(); ?>

		<div class="content one-column">
			<div class="row">
          			<div class="span9">

			<?php
			/* Run the loop to output the page.
			 * If you want to overload this in a child theme then include a file
			 * called loop-page.php and that will be used instead.
			 */
			 get_template_part( 'loop', 'page' );
			?>

				</div><!-- .span9 -->
			</div><!-- .row -->
		</div><!-- .content -->

<?php get_footer(); ?>

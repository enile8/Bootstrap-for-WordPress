<?php
/**
 * The template for displaying all pages.
 *
 */

get_header(); ?>

		<div class="content" role="main">
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

				<div class="span3">

			<?php get_sidebar(); ?>
			
				</div><!-- .span3 -->
			</div><!-- .row -->
		</div><!-- .content -->
<?php get_footer(); ?>

<?php
/**
 * The Template for displaying all single posts.
 *
 */

get_header(); ?>

		<div class="content" role="main">
			<div class="row">
          			<div class="span9">

			<?php
			/* Run the loop to output the posts.
			 * If you want to overload this in a child theme then include a file
			 * called loop-index.php and that will be used instead.
			 */
			 get_template_part( 'loop', 'single' );
			?>
				</div><!-- .span9 -->

				<div class="span3">

			<?php get_sidebar(); ?>
			
				</div><!-- .span3 -->
			</div><!-- .row -->
		</div><!-- .content -->
<?php get_footer(); ?>

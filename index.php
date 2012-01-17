<?php
/**
 * The main template file.
 *
 */

get_header(); ?>

		
		<div class="content" role="main">
			<div class="row">
          			<div class="span10">

			<?php
			/* Run the loop to output the posts.
			 * If you want to overload this in a child theme then include a file
			 * called loop-index.php and that will be used instead.
			 */
			 get_template_part( 'loop', 'index' );
			?>
				</div><!-- .span10 -->

				<div class="span4">

			<?php get_sidebar(); ?>
			
				</div><!-- .span4 -->
			</div><!-- .row -->
		</div><!-- .content -->
<?php get_footer(); ?>

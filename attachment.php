<?php
/**
 * The template for displaying attachments.
 *
 */

get_header(); ?>

		<div class="content single-attachment" role="main">
			<div class="row">
          			<div class="span10">

			<?php
			/* Run the loop to output the attachment.
			 * If you want to overload this in a child theme then include a file
			 * called loop-attachment.php and that will be used instead.
			 */
			get_template_part( 'loop', 'attachment' );
			?>

			
				</div><!-- .span4 -->
			</div><!-- .row -->
		</div><!-- .content -->

<?php get_footer(); ?>

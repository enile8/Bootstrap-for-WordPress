<?php
/**
 * The template for displaying Tag Archive pages.
 *
 */

get_header(); ?>

		<div class="content" role="main">
			<div class="row">
          			<div class="span9">

				<h1 class="page-title"><?php
					printf( __( 'Tag Archives: %s', 'bootstrap' ), '<span>' . single_tag_title( '', false ) . '</span>' );
				?></h1>

<?php
/* Run the loop for the tag archive to output the posts
 * If you want to overload this in a child theme then include a file
 * called loop-tag.php and that will be used instead.
 */
 get_template_part( 'loop', 'tag' );
?>
				</div><!-- .span9 -->

				<div class="span3">

			<?php get_sidebar(); ?>
			
				</div><!-- .span3 -->
			</div><!-- .row -->
		</div><!-- .content -->
<?php get_footer(); ?>

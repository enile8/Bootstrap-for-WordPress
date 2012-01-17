<?php
/**
 * The template for displaying Category Archive pages.
 *
 */

get_header(); ?>

		<div class="content" role="main">
			<div class="row">
          			<div class="span10">

				<h1 class="page-title"><?php
					printf( __( 'Category Archives: %s', 'bootstrap' ), '<span>' . single_cat_title( '', false ) . '</span>' );
				?></h1>
				<?php
					$category_description = category_description();
					if ( ! empty( $category_description ) )
						echo '<div class="archive-meta">' . $category_description . '</div>';

				/* Run the loop for the category page to output the posts.
				 * If you want to overload this in a child theme then include a file
				 * called loop-category.php and that will be used instead.
				 */
				get_template_part( 'loop', 'category' );
				?>

				</div><!-- .span10 -->

				<div class="span4">

			<?php get_sidebar(); ?>
			
				</div><!-- .span4 -->
			</div><!-- .row -->
		</div><!-- .content -->
<?php get_footer(); ?>

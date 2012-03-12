<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 */

get_header(); ?>

	<div class="content" role="main">
		<div class="row">
          		<div class="span9">
			
			<div id="post-0" class="post error404 not-found">
				<h1 class="entry-title"><?php _e( 'Not Found', 'bootstrap' ); ?></h1>
				<div class="entry-content">
					<p><?php _e( 'Apologies, but the page you requested could not be found. Perhaps searching will help.', 'bootstrap' ); ?></p>
					<?php get_search_form(); ?>
				</div><!-- .entry-content -->
			</div><!-- #post-0 -->

		
			</div><!-- .span9 -->
		</div><!-- .row -->
	</div><!-- .content -->
	<script type="text/javascript">
		// focus on search field after it has loaded
		document.getElementById('s') && document.getElementById('s').focus();
	</script>

<?php get_footer(); ?>

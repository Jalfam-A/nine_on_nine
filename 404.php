<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package nine_on_nine
 */

get_header();
?>

	<main id="primary" class="site-main">

		<section class="error-404 not-found">
			<div class="container">
				<div class="content-wrapper">
					<h1 class="oops"><?php esc_html_e( 'Oops!', 'nine_on_nine' ); ?></h1>
					<div class="error-number">404</div>
					<h2 class="page-title"><?php esc_html_e( 'We can\'t find the page you\'re looking for.', 'nine_on_nine' ); ?></h2>
					<p><?php esc_html_e( 'But don\'t worry, we\'ve got you covered. Try searching or check out the links below:', 'nine_on_nine' ); ?></p>
					
					<?php get_search_form(); ?>
				</div>
			</div>
		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php
get_footer();

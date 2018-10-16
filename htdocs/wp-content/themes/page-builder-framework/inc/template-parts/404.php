<?php
/**
 * 404
 *
 * Construct the Theme's 404 Page
 *
 * @package Page Builder Framework
 * @subpackage Template Parts
 */
 
// exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

?>

		<div id="content">

			<?php do_action( 'wpbf_content_open' ); ?>

			<div id="inner-content" class="wpbf-container wpbf-container-center wpbf-padding-medium">

				<?php do_action( 'wpbf_inner_content_open' ); ?>

				<main id="main" class="wpbf-main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

					<?php do_action( 'wpbf_before_article' ); ?>
					
					<article id="post-not-found" class="wpbf-post wpbf-404 wpbf-text-center">

						<header class="article-header">

							<h1 class="entry-title">

							<?php echo '<h1 class="entry-title">' . apply_filters( 'wpbf_404_headline', __( "404 - This page couldn't be found.", 'page-builder-framework' ) ) . '</h1>'; // WPCS: XSS ok. ?>

							</h1>

						</header>

						<section class="article-content">

							<?php echo '<p>' . apply_filters( 'wpbf_404_text', __( "Oops! We're sorry, this page couldn't be found!", 'page-builder-framework' ) ) . '</p>'; // WPCS: XSS ok. ?>

							<div class="wpbf-container-center wpbf-medium-1-2">

							<?php get_search_form(); ?>

							</div>

						</section>

					</article>

					<?php do_action( 'wpbf_after_article' ); ?>

				</main>

				<?php do_action( 'wpbf_inner_content_close' ); ?>

			</div>

			<?php do_action( 'wpbf_content_close' ); ?>
			
		</div>
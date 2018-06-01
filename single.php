<?php
/**
 * The template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Shop Isle
 */

get_header(); ?>

<!-- Wrapper start -->
	<div class="main">

		<!-- Post single start -->
		<section class="page-module-content module">
			<div class="container">

				<div class="row">

					<!-- Content column start -->
					<div class="col-sm-12">

						<?php
						while ( have_posts() ) :
							the_post();
?>

							<?php

							do_action( 'shop_isle_single_post_before' );

							get_template_part( 'content', 'single' );

							/**
							 * After single post hook.
							 *
							 * @hooked shop_isle_post_nav - 10
							 */
							do_action( 'shop_isle_single_post_after' );
							?>

						<?php endwhile; ?>

					</div>
					<!-- Content column end -->

			</div>
		</section>
		<!-- Post single end -->


<?php get_footer(); ?>

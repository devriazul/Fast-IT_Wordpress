
<style>
    
    .search-field { display: inline-block;min-height: 40px;width: 25%;font-size: 20px;line-height: 1.8;padding: 2px 12px;vertical-align: middle;background-color: transparent;color: #333;border: 1px solid #ddd;text-align: center; }
</style>						

<?php do_action( 'ocean_before_content_wrap' ); ?>

						<div id="content-wrap" class="container clr">

							<?php do_action( 'ocean_before_primary' ); ?>

							<div id="primary" class="content-area clr">

								<?php do_action( 'ocean_before_content' ); ?>

								<div id="content" class="clr site-content">

									<?php do_action( 'ocean_before_content_inner' ); ?>

									<article class="entry clr">

										<?php
										// Elementor `404` location
										if ( ! function_exists( 'elementor_theme_do_location' ) || ! elementor_theme_do_location( 'single' ) ) {

											// Check if there is a template
									        if ( ! empty( $get_id ) ) {

											    // If Elementor
											    if ( gtl-multipurpose_ELEMENTOR_ACTIVE && $elementor ) {

											        gtl-multipurpose_Elementor::get_error_page_content();

											    }

											    // If Beaver Builder
											    else if ( gtl-multipurpose_BEAVER_BUILDER_ACTIVE && ! empty( $get_id ) ) {

											        echo do_shortcode( '[fl_builder_insert_layout id="' . $get_id . '"]' );

											    }

											    // Else
											    else {

											        // Display template content
											        echo do_shortcode( $get_content );

											    }

											}

										    // Else
										    else { ?>

										    	<div class="error404-content clr" style="text-align: center;">
                                                     <img src="https://bonk.ca/test/wp-content/uploads/2018/11/Green-Turtle-Lab-LOGO-square.png" alt="logo" width="300" height="auto">
													<h2 class="error-title" style="font-size:46px;"><?php esc_html_e( 'Sorry, we could not find that page', 'gtl-multipurpose' ) ?></h2>
													<p class="error-text" style="font-size:24px;"><?php esc_html_e( 'Try doing a search below or go back to the homepage.', 'gtl-multipurpose' ); ?><br /><?php esc_html_e( 'Perhaps you can try a new search.', 'gtl-multipurpose' ); ?></p>
													<?php get_search_form(); ?>
													<a class="error-btn button" style="display: inline-block;font-family: inherit;background-color: #929292;color: #fff;font-weight: 600;text-transform: uppercase;margin: 0;margin-top: 0px;border: 0;cursor: pointer;text-align: center;padding: 10px;text-decoration: none;" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Back To Homepage', 'gtl-multipurpose' ) ?></a>

												</div><!-- .error404-content -->

											<?php }

										} ?>

									</article><!-- .entry -->

									<?php do_action( 'ocean_after_content_inner' ); ?>

								</div><!-- #content -->

								<?php do_action( 'ocean_after_content' ); ?>

							</div><!-- #primary -->

							<?php do_action( 'ocean_after_primary' ); ?>

						</div><!--#content-wrap -->

						<?php do_action( 'ocean_after_content_wrap' ); ?>

<?php
// If blank page
if ( 'on' == get_theme_mod( 'ocean_error_page_blank', 'off' ) ) { ?>

			        </main><!-- #main-content -->

			        <?php do_action( 'ocean_after_main' ); ?>
			                
			    </div><!-- #wrap -->

			    <?php do_action( 'ocean_after_wrap' ); ?>

			</div><!-- .outer-wrap -->

			<?php do_action( 'ocean_after_outer_wrap' ); ?>

			<?php wp_footer(); ?>


<?php
} else {

	get_footer();

} ?>
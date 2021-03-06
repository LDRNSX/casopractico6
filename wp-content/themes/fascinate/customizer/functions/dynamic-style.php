<?php

if( ! function_exists( 'fascinate_dynamic_style' ) ) {

	function fascinate_dynamic_style() {

		$enabled_lazy_loading = fascinate_get_option( 'enable_lazy_loading' );

		$display_srcoll_top = fascinate_get_option( 'display_scroll_top' );  

		$enable_cursive_site_title = fascinate_get_option( 'enable_cursive_site_title' );

		$site_identity_section_padding = fascinate_get_option( 'site_identity_section_padding' );

		$enable_cursive_post_meta = fascinate_get_option( 'enable_cursive_post_meta' );

		$carousel_height = fascinate_get_option( 'carousel_height' );

		if( $enabled_lazy_loading == true ) {
			?>
			<noscript>
		        <style>
		        img.lazyload {

		            display: none;
		        }

		        img.image-fallback {

		            display: block;
		        }
		        </style>
		    </noscript>
		    <?php
		}
		?>
		<style>
			<?php
			if( $display_srcoll_top == false ) {
				?>
				.fascinate-to-top {

					display: none !important;
				}
				<?php
			}

			if( $enable_cursive_site_title == true ) {
				?>
				.header-style-1 .site-title, 
				.header-style-2 .site-title {
					font-family: "Pacifico", cursive;
				}
				<?php
			}


			if( $site_identity_section_padding ) {
				?>
				@media (min-width: 1024px) {
					.header-style-1 .mid-header {
						padding: <?php echo esc_attr( $site_identity_section_padding ) ?>px 0px;
					}
				}
				<?php
			}

			if( $enable_cursive_post_meta == true ) {
				?>

				.entry-metas ul li.posted-by a {
				
					font-family: "Pacifico", cursive;
				}
				<?php
			}
			?>
			<?php
			if( $carousel_height ) {
				?>
				@media(min-width: 992px) {
					.banner-style-1 .post-thumb {
						height: <?php echo esc_attr( $carousel_height ); ?>px;
					}
				}
				<?php
			}
			?>
		</style>
		<?php
	}
}
add_action( 'wp_head', 'fascinate_dynamic_style' );
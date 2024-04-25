<?php
/**
 * Componente: Page Blog.
 *
 * @package Acronyms\RAW
 * @subpackage Components
 * @since 1.0.0
 */

global $paged;

	$big = 999999999;
	$ppp = get_option( 'posts_per_page' );
	$off = ( is_paged() ? ( $ppp * ( $paged - 1 ) ) : 0 );
?>
<div class="raw-component contrast page-blog">
	<div class="container">
		<h2><?php print wp_kses_post( get_post_meta( get_the_ID(), 'raw_page-blog_pre_title', true ) ) ?: 'Blog de Soluciona Mi Deuda'; ?></h2>
		<p><?php print wp_kses_post( get_post_meta( get_the_ID(), 'raw_page-blog_pre_subtitle', true ) ) ?: 'El mejor sitio para informarte sobre cómo gestionar tus deudas, los intereses abusivos y cómo hacer frente a los mismos.'; ?></p>
	</div>

	<div class="container grid">
		<div class="section">&nbsp;</div>
		<div class="section grid">
			<div><?php print do_shortcode( wp_kses_post( get_post_meta( get_the_ID(), 'raw_page-blog_form_shortcode', true ) ) ?: '[trustindex data-widget-id=5efa14578871391257525a5454]' ); ?></div>
			<div><?php print wp_get_attachment_image( get_post_meta( get_the_ID(), 'raw_page-blog_img', true ) ?: 27849, array( 150, 150 ) ); ?></div>
		</div>
	</div>
</div>

<div class="raw-component anticontrast page-blog">
	<div class="container grid">
		<div class="section articles grid">
			<?php
				// Articles.
				$posts = get_posts(
					array(
						'ignore_sticky_posts' => 1,
						'numberposts'         => $ppp,
						'offset'              => $off,
						'orderby'             => 'date',
						'order'               => 'DESC',
					)
				);

				if ( count( $posts ) > 0 ) {
					foreach ( $posts as $post ) {
						get_template_part( 'template-parts/content/single', 'card' );
					}
				} else {
					printf( '<p>%s</p>', 'No hay artículos…' );
				}
				?>
		</div>

		<div class="section form-asesoria">
			<b><?php print wp_kses_post( get_post_meta( get_the_ID(), 'raw_page-blog_form_title', true ) ) ?: 'Solicita tu asesoría gratis'; ?></b>

			<script charset="utf-8" type="text/javascript" src="//js-eu1.hsforms.net/forms/embed/v2.js"></script>
			<script>
				hbspt.forms.create({
					region: "eu1",
					portalId: "25960949",
					formId: "e03beb24-4626-44e0-8e6b-11930b5ab083"
				});
			</script>
		</div>
	</div>

	<?php if ( count( $posts ) > 0 ) : ?>
	<div class="container">
		<nav class="navigation pagination" aria-label="Navegación de entradas">
			<h2 class="screen-reader-text">Navegación de entradas</h2>
			<div class="nav-links">
				<?php
					print wp_kses_post(
						paginate_links(
							array(
								'base'    => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
								'format'  => '?paged=%#%',
								'current' => max( 1, get_query_var( 'paged' ) ),
								'total'   => wp_count_posts()->publish,
							)
						)
					);
				?>
			</div>
		</nav>
	</div>
	<?php endif ?>

</div>

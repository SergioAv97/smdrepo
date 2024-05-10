<?php
/**
 * Componente: Page Opinones.
 *
 * @package Acronyms\RAW
 * @subpackage Components
 * @since 1.0.0
 */

?>
<div class="raw-component contrast page-opiniones">
	<div class="container">
		<h2><?php print wp_kses_post( get_post_meta( get_the_ID(), 'raw_page-opiniones_pre_title', true ) ) ?: 'Opiniones sobre Soluciona Mi Deuda'; ?></h2>
		<p><?php print wp_kses_post( get_post_meta( get_the_ID(), 'raw_page-opiniones_pre_subtitle', true ) ) ?: 'Esto es lo que hablan nuestros clientes de nuestros servicios y su experiencia con nosotros.'; ?></p>
	</div>

	<div class="container grid">
		<div class="section">&nbsp;</div>
		<div class="section form-asesoria">
			<b><?php print wp_kses_post( get_post_meta( get_the_ID(), 'raw_page-opiniones_form_title', true ) ) ?: 'Solicita tu asesoría gratis'; ?></b>
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
</div>

<div class="raw-component anticontrast page-opiniones">
	<div class="container grid">
		<div class="section opiniones-exitos grid">
			<?php
			// Exitos.
			$posts = get_posts(
				array(
					'ignore_sticky_posts' => 1,
					'numberposts'         => 4,
					'orderby'             => 'date',
					'order'               => 'DESC',
					'tax_query'           => array(
						array(
							'taxonomy'         => 'post_tag',
							'field'            => 'term_id',
							'terms'            => 55, // Term : Casos de éxito.
							'include_children' => false,
						),
					),
				)
			);

			foreach ( $posts as $post ) {
				get_template_part( 'template-parts/content/content', 'card' );
			}
			?>

			<?php
			// Opiniones.
			$posts = get_posts(
				array(
					'ignore_sticky_posts' => 1,
					'numberposts'         => 4,
					'category'            => 56, // Category: Opiniones.
					'orderby'             => 'date',
					'order'               => 'DESC',
				)
			);

			foreach ( $posts as $post ) {
				get_template_part( 'template-parts/content/content', 'card' );
			}
			?>
		</div>
		<div class="section"><?php print do_shortcode( '[trustindex data-widget-id=9c8c6361642b078d3b765bb9b98]' ); ?></div>
	</div>
</div>

<div class="raw-component anticontrast page-opiniones">
	<div class="container grid">
		<div class="section editor">
			<p>Las opiniones sobre Soluciona Mi Deuda son un reflejo de la satisfacción y confianza que nuestros clientes han depositado en nosotros a lo largo de los años. Nuestro compromiso constante con la excelencia en la gestión de deudas nos ha permitido ayudar a miles de personas a recuperar el control de sus finanzas y superar situaciones difíciles.</p>
			<p>Las opiniones positivas destacan nuestra profesionalidad, transparencia y capacidad para brindar soluciones personalizadas a cada situación. Valoramos profundamente las opiniones de nuestros clientes, ya que nos impulsan a seguir mejorando y ofreciendo un servicio de calidad.</p>
			<p>Estamos comprometidos con la satisfacción de nuestros clientes y nos enorgullece contar con su respaldo y confianza en nuestra labor.</p>
		</div>

		<div class="section">
			<?php print wp_get_attachment_image( get_post_meta( get_the_ID(), 'raw_title-img-left-editor_img', true ) ?: 27199, 'full' ); ?>
		</div>
	</div>
</div>
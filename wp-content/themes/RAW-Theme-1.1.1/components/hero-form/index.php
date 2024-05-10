<?php
/**
 * Componente: Hero Form.
 *
 * @package Acronyms\RAW
 * @subpackage Components
 * @since 1.0.0
 */

?>
<div class="raw-component contrast hero-form">
	<div class="container grid">

		<div class="section">
			<h1><?php print wp_kses_post( get_post_meta( get_the_ID(), 'raw_hero-form_title', true ) ) ?: 'Pon día y hora al<br>final de tus deudas'; ?></h1>
			<p class="subtitle"><?php print wp_kses_post( get_post_meta( get_the_ID(), 'raw_hero-form_subtitle', true ) ) ?: 'y termina de pagar hasta 24<br>meses antes'; ?></p>
			<?php print wp_get_attachment_image( get_post_meta( get_the_ID(), 'raw_hero-form_image', true ) ?: 21637, array( 150, 150 ), null, 'class=k4' ); ?>
			<?php print do_shortcode( wp_kses_post( get_post_meta( get_the_ID(), 'raw_hero-form_shortcode', true ) ) ?: '[trustindex data-widget-id=5efa14578871391257525a5454]' ); ?>
			<p><?php print wp_kses_post( get_post_meta( get_the_ID(), 'raw_hero-form_text', true ) ) ?: 'Deja de preocuparte por tus deudas, nosotros nos ocupamos de ellas.'; ?></p>
		</div>

		<div class="section form-asesoria">
			<b><?php print wp_kses_post( get_post_meta( get_the_ID(), 'raw_hero-form_form_title', true ) ) ?: 'Solicita tu asesoría gratis'; ?></b>
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
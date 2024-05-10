<?php
/**
 * Componente: Hero CTA Form.
 *
 * @package Acronyms\RAW
 * @subpackage Components
 * @since 1.0.0
 */

?>
<div class="raw-component contrast hero-cta-form">
	<div class="container grid">

		<div class="section">
			<h1><?php print wp_kses_post( get_post_meta( get_the_ID(), 'raw_hero-cta-form_title', true ) ) ?: 'Solicitamos tu fichero de ASNEF'; ?></h1>
			<p class="subtitle"><?php print wp_kses_post( get_post_meta( get_the_ID(), 'raw_hero-cta-form_subtitle', true ) ) ?: 'GRATIS'; ?></p>

			<?php
				print wp_kses_post( get_post_meta( get_the_ID(), 'raw_hero-cta-form_editor', true ) ) ?: '
					<br><br><br><br>
					<a role="button" class="raw-phone bigger" href="tel:+34910916445">Llámanos gratuitamente</a>
					<br><br><br><br><br><br>'
			?>


			<p><?php print wp_kses_post( get_post_meta( get_the_ID(), 'raw_hero-cta-form_text', true ) ) ?: '¡SAL DE ASNEF!'; ?></p>
		</div>

		<div class="section form-asesoria">
			<b><?php print wp_kses_post( get_post_meta( get_the_ID(), 'raw_hero-cta-form_form_title', true ) ) ?: 'Solicita tu asesoría gratis'; ?></b>
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
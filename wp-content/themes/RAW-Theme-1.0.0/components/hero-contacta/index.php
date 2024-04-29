<?php
/**
 * Componente: Hero Contacta.
 *
 * @package Acronyms\RAW
 * @subpackage Components
 * @since 1.0.0
 */

?>
<div class="raw-component contrast hero-contacta">
	<div class="container ">
		<h2><?php print wp_kses_post( get_post_meta( get_the_ID(), 'raw_hero-contacta_pre_title', true ) ) ?: 'Resolvemos todas tus deudas<br>¡Y tus dudas!'; ?></h2>
		<p><u><?php print wp_kses_post( get_post_meta( get_the_ID(), 'raw_hero-contacta_pre_subtitle', true ) ) ?: 'Consúltanos de manera gratuita y sin compromiso.'; ?></u></p>
	</div>
</div>

<div class="raw-component hero-contacta">
	<div class="container grid">

		<div class="section">
			<h1><?php print wp_kses_post( get_post_meta( get_the_ID(), 'raw_hero-contacta_title', true ) ) ?: 'Contamos con despachos en Sevilla y Madrid'; ?></h1>

			<ul>
				<li><h2>
				<?php
					printf(
						'<a href="%s">%s</a>',
						esc_url( get_post_meta( get_the_ID(), 'raw_hero-contacta_link_1_url', true ) ) ?: '#',
						esc_html( get_post_meta( get_the_ID(), 'raw_hero-contacta_link_1_text', true ) ) ?: 'Despacho de Soluciona Mi Deuda en Madrid'
					)
					?>
				</h2></li>

				<li><h2>
				<?php
					printf(
						'<a href="%s">%s</a>',
						esc_url( get_post_meta( get_the_ID(), 'raw_hero-contacta_link_2_url', true ) ) ?: '#',
						esc_html( get_post_meta( get_the_ID(), 'raw_hero-contacta_link_2_text', true ) ) ?: 'Despacho de Soluciona Mi Deuda en Sevilla'
					)
					?>
				</h2></li>
			</ul>
		</div>

		<div class="section form-asesoria">
			<b><?php print wp_kses_post( get_post_meta( get_the_ID(), 'raw_hero-contacta_form_title', true ) ) ?: 'Solicita tu asesoría gratis'; ?></b>
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
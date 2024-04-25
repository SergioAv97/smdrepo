<?php
/**
 * Componente: Texto Dos Elementos.
 *
 * @package Acronyms\RAW
 * @subpackage Components
 * @since 1.0.0
 */

?>
<div class="raw-component texto-dos-elementos">
	<div class="container">

		<div class="grid">
			<div>
				<?php
					print wp_kses_post( get_post_meta( get_the_ID(), 'raw_texto-dos-elementos_editor', true ) ) ?:
						'<p><b class="title">Tus abogados para cancelar deudas en Sevilla</b></p>
						<p>En <b>Soluciona Mi Deuda</b> ofrecemos asesoría financiera y legal para resolver impagos en todo el territorio español. Disponemos de un equipo de <b>abogados de deudas en Sevilla</b> con amplia experiencia en la liquidación de deudas especializados en la reunificación y negociación de deudas y en la Ley de la Segunda Oportunidad.</p>
						<p><b class="title">Negociamos acuerdos extrajudiciales</b></p>
						<p>Nuestros <b>abogados especialistas en deudas bancarias en Sevilla</b> emplean métodos y estrategias rápidas y efectivas para negociar con las entidades cuando nuestros clientes necesitan ayuda para pagar sus deudas y sus préstamos incluyen intereses usurarios y cláusulas abusivas logrando, incluso, recuperar el dinero que han pagado sin que les correspondiera. Si tienes deudas pendientes, con nosotros estarás acompañado de los mejores <b>abogados para negociar deudas de Sevilla.</b></p>
						<p><b class="title">Abogados Ley de Segunda Oportunidad Sevilla</b></p>
						<p>Nuestros clientes también son guiados por nuestros <b>abogados para deudas de Sevilla</b> cuando la solución a sus problemas financieros pasa por iniciar la Ley de la Segunda Oportunidad. Les acompañamos desde el principio en la solicitud ante el notario cuando son particulares y ante el Registro Mercantil si son autónomos, mediamos para conseguir un acuerdo extrajudicial de pagos favorable y en la liquidación del patrimonio. Además, tratamos de conseguir una resolución positiva del Beneficio de Exoneración del Pasivo Insatisfecho (BEPI) para que las deudas queden canceladas definitivamente.</p>
						<p><b class="title">Miles de clientes satisfechos nos avalan</b></p>
						<p>Soluciona Mi Deuda opera en toda España contando con sedes físicas en Madrid y Sevilla en las que te atenderemos encantados si lo deseas. ¡Llámanos al <a href="tel:+34910916495" rel="noopener">910916495</a> para coger tu cita previa!</p>
						<p>Nuestros clientes son particulares y autónomos en una situación de sobreendeudamiento que necesitas resolver de la forma más eficiente y rápida posible. Muchos casos de éxito posicionan a <b>Soluciona Mi Deuda</b> como uno de los mejores despachos de <b>abogados para cancelar deudas de Sevilla</b>.</p>';

					printf(
						'<a role="button" class="raw-phone" href="%s">%s</a>',
						esc_url( get_post_meta( get_the_ID(), 'raw_texto-dos-elementos_button_link', true ) ) ?: 'tel:+34910916445',
						esc_html( get_post_meta( get_the_ID(), 'raw_texto-dos-elementos_button_text', true ) ) ?: 'Llámanos gratuitamente'
					)
					?>
			</div>

			<div>
				<b class="title"><?php print wp_kses_post( get_post_meta( get_the_ID(), 'raw_texto-dos-elementos_form_title', true ) ) ?: 'Solicita tu asesoría gratis'; ?></b>
				<script charset="utf-8" type="text/javascript" src="//js-eu1.hsforms.net/forms/embed/v2.js"></script>
				<script data-hubspot-rendered="true">
					hbspt.forms.create({
						region : "eu1",
						portalId : "25960949",
						formId : "e03beb24-4626-44e0-8e6b-11930b5ab083"
					});
				</script>

				<?php
					$map_img = get_post_meta( get_the_ID(), 'raw_texto-dos-elementos_map-image', true ) ?: 29004;
					$map_url = get_post_meta( get_the_ID(), 'raw_texto-dos-elementos_map-url', true ) ?: 'https://www.google.com/maps?ll=37.403307,-6.00434&z=13&t=m&hl=es-ES&gl=US&mapclient=embed&q=C.+Albert+Einstein,+10+41092+Sevilla';

					printf( '<a href="%s" target="_blank">%s</a>', esc_html( $map_url ), esc_html( wp_get_attachment_image( $map_img, 'full' ) ) )
				?>

				<div class="special">
					<?php
						printf(
							'<p class="single">También puedes acudir a <a href="%s">%s</a>.</p>',
							esc_url( get_post_meta( get_the_ID(), 'raw_texto-dos-elementos_link_url', true ) ) ?: '/abogados-deudas-sevilla',
							esc_html( get_post_meta( get_the_ID(), 'raw_texto-dos-elementos_link_text', true ) ) ?: 'nuestro despacho en Sevilla'
						)
						?>

					<?php
						printf(
							'<a role="button" class="raw-whatsapp" href="%s">%s</a>',
							esc_url( get_post_meta( get_the_ID(), 'raw_texto-dos-elementos_button_whatsapp_url', true ) ) ?: 'https://api.whatsapp.com/send/?phone=%2B34613056334&text=Hola%21+Quiero+informacion+sobre+Soluciona+Mi+Deuda.&type=phone_number&app_absent=0',
							esc_html( get_post_meta( get_the_ID(), 'raw_texto-dos-elementos_button_whatsapp_text', true ) ) ?: 'Consúltanos gratis por WhatsApp'
						)
						?>
				</div>
			</div>
		</div>

	</div>
</div>
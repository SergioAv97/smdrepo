<?php
/**
 * Componente: Slider Equipo.
 *
 * @package Acronyms\RAW
 * @subpackage Components
 * @since 1.0.0
 */

?>
<div class="raw-component slider-equipo">
	<div class="container">

		<div>
			<?php
			printf(
				'<p class="title">%s</p>',
				esc_html( get_post_meta( get_the_ID(), 'raw_slider-equipo_title', true ) ) ?:
					'Nuestro equipo'
			)
			?>

			<?php
			printf(
				'<p>%s</p>',
				esc_html( get_post_meta( get_the_ID(), 'raw_slider-equipo_text', true ) ) ?:
					'Nos mantenemos en constante evolución y optimizamos nuestros procesos para dar los mejores resultados. Operamos de forma simple y transparente con los riesgos que conlleve cada proceso.'
			)
			?>

			<?php
			printf(
				'<p><a role="button" class="raw-whatsapp" href="%1$s">%2$s</a></p>',
				esc_url( get_post_meta( get_the_ID(), 'raw_slider-equipo_button_url', true ) ) ?: 'https://api.whatsapp.com/send/?phone=%2B34613056334&text=Hola%21+Quiero+informacion+sobre+Soluciona+Mi+Deuda.&type=phone_number&app_absent=0',
				esc_html( get_post_meta( get_the_ID(), 'raw_slider-equipo_button_text', true ) ) ?: 'Consúltanos por WhatsApp'
			)
			?>
		</div>

		<div class="raw-slider2">
			<div class="raw-slider-container">
				<?php
				print do_shortcode(
					wp_kses_post( get_post_meta( get_the_ID(), 'raw_slider-equipo_editor', true ) ) ?: '
					[raw-team-slide image="27177" texto="Nombre, puesto"][raw-team-slide image="27177" texto="Nombre, puesto"]
					[raw-team-slide image="27177" texto="Nombre, puesto"][raw-team-slide image="27177" texto="Nombre, puesto"]
					[raw-team-slide image="27177" texto="Nombre, puesto"][raw-team-slide image="27177" texto="Nombre, puesto"]
					[raw-team-slide image="27177" texto="Nombre, puesto"][raw-team-slide image="27177" texto="Nombre, puesto"]
					[raw-team-slide image="27177" texto="Nombre, puesto"][raw-team-slide image="27177" texto="Nombre, puesto"]'
				)
				?>

			</div>
		</div>

	</div>
</div>
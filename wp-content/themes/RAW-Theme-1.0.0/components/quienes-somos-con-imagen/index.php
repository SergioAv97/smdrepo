<?php
/**
 * Componente: Quienes Somos.
 *
 * @package Acronyms\RAW
 * @subpackage Components
 * @since 1.0.0
 */

?>
<?php
    $upload_dir = wp_upload_dir();

    $imgEquipoSoluciona = $upload_dir['baseurl'] . '/2024/equipo/equipoSoluciona.png';
?>

<div class="raw-component quienes-somos-imagen">
	<div class="container grid">
		<div id="contentQuienesSomos">
			<div>
				<?php
				printf(
					'<p class="title">%s</p>',
					esc_html( get_post_meta( get_the_ID(), 'raw_quienes-somos_title', true ) ) ?: '¿Quiénes somos?'
				)
				?>

				<?php
				printf(
					'<p>%s</p>',
					wp_kses_post( get_post_meta( get_the_ID(), 'raw_quienes-somos_text', true ) )
				)
				?>
				</div>
		
				<?php
				printf(
					'<a role="button" class="%s" href="%s">%s</a>',
					esc_attr( get_post_meta( get_the_ID(), 'raw_quienes-somos_link_class', true ) ) ?: 'raw-phone',
					esc_url( get_post_meta( get_the_ID(), 'raw_quienes-somos_link_url', true ) ) ?: '/sobre-nosotros',
					esc_html( get_post_meta( get_the_ID(), 'raw_quienes-somos_link_text', true ) ) ?: '¿Quieres saber más?'
				)
				?>
			</div>
		<img id="imgEquipo" src="<?php echo esc_url($imgEquipoSoluciona); ?>" alt="Equipo Soluciona mi Deuda">
	</div>
</div>
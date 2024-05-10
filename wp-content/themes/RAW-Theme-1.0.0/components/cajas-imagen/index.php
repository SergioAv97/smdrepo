<?php
/**
 * Componente: Cajas Imagen.
 *
 * @package Acronyms\RAW
 * @subpackage Components
 * @since 1.0.0
 */
	$link_url = get_post_meta( get_the_ID(), 'raw_cajas-imagen_link_url', true ) ?: '/academia/';

?>
<?php 
	//Variable "upload_dir" para situar el inicio de la ruta en la carpeta Uploads (donde insertamos nuestro contenido media) de WordPress
    $upload_dir = wp_upload_dir();

    $imgGuiaAcoso = $upload_dir['baseurl'] . '/2024/guias/guiaAcoso.png';
    $imgGuiaAsnef = $upload_dir['baseurl'] . '/2024/guias/guiaAsnef.png';
    $imgGuiaPagarDeudas = $upload_dir['baseurl'] . '/2024/guias/guiaPagarDeudas.png';
    $imgGuiaReunificacion = $upload_dir['baseurl'] . '/2024/guias/guiaReunificacion.png';

?>


<div class="raw-component cajas-imagen">
	<div class="container">

		<?php printf( '<h2>%s</h2>', esc_html( get_post_meta( get_the_ID(), 'raw_cajas-imagen_title', true ) ) ?: 'Nuestras guías para cancelar deudas' ); ?>

		<div class="">
			<div class="SlideGuia">
				<div class="slide">
					<img class="imgGuia" src="<?php echo esc_url($imgGuiaAcoso); ?>" alt="Guia Baja cautelar de Asnef">
					<p class="textImgGuia">CÓMO ACABAR CON EL ACOSO TELEFONICO</p>
					<?php
					//printf(
					//	'<a href="%3$s"><figure>%s<figcaption>%s</figcaption></figure></a>',
					//	wp_get_attachment_image( esc_html( get_post_meta( get_the_ID(), 'raw_cajas-imagen_slider_img_1', true ) ) ?: 23621, 'full' ),
					//	esc_html( get_post_meta( get_the_ID(), 'raw_cajas-imagen_slider_text_1', true ) ) ?: 'CÓMO ACABAR CON EL ACOSO TELEFÓNICO',
					//	esc_url( $link_url )
					//)
					?>
				</div>
				<div class="slide">
					<img class="imgGuia" src="<?php echo esc_url($imgGuiaAsnef); ?>" alt="Guia Baja cautelar de Asnef">
					<p class="textImgGuia">CÓMO PAGAR TUS DEUDAS SIN GANAR MÁS</p>
					<?php
					//printf(
					//	'<a href="%3$s"><figure>%1$s<figcaption>%2$s</figcaption></figure></a>',
					//	wp_get_attachment_image( esc_html( get_post_meta( get_the_ID(), 'raw_cajas-imagen_slider_img_2', true ) ) ?: 23622, 'full' ),
					//	esc_html( get_post_meta( get_the_ID(), 'raw_cajas-imagen_slider_text_2', true ) ) ?: 'CÓMO PAGAR TUS DEUDAS SIN GANAR MÁS',
					//	esc_url( $link_url )
					//)
					?>
				</div>
				<div class="slide">
					<img class="imgGuia" src="<?php echo esc_url($imgGuiaPagarDeudas); ?>" alt="Guia Baja cautelar de Asnef">
					<p class="textImgGuia">BAJA CAUTELAR DE ASNEF</p>
					<?php
					//printf(
					//	'<a href="%3$s"><figure>%1$s<figcaption>%2$s</figcaption></figure></a>',
					//	wp_get_attachment_image( esc_html( get_post_meta( get_the_ID(), 'raw_cajas-imagen_slider_img_3', true ) ) ?: 27905, 'full' ),
					//	esc_html( get_post_meta( get_the_ID(), 'raw_cajas-imagen_slider_text_3', true ) ) ?: 'BAJA CAUTELAR DE ASNEF',
					//	esc_url( $link_url )
					//)
					?>
				</div>
				
			</div>
		</div>

		<div>
			<?php
			printf(
				'<p id="textoGuia">%s</p>',
				esc_html( get_post_meta( get_the_ID(), 'raw_cajas-imagen_text', true ) ) ?: 'Aquí tienes la mayor colección de guías para liberarte del endeudamiento.'
			)
			?>

			<?php
			printf(
				'<a role="button" class="big raw-arrow-right" href="%s">%s</a>',
				esc_url( $link_url ),
				esc_html( get_post_meta( get_the_ID(), 'raw_cajas-imagen_link_text', true ) ) ?: 'Página de descargas'
			)
			?>
		</div>

	</div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

<script>
    //CONFIGURACIÓN CARRUSEL GUIAS
    jQuery(document).ready(function($) {
        $('.SlideGuia').slick({
            // Configuración de opciones para el slider
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            dots: true,
            arrows: true,
            prevArrow: '<button type="button" class="slick-prev">Previous</button>',
            nextArrow: '<button type="button" class="slick-next">Next</button>',
            centerPadding: '25px',
			infinite: true
        });
    });
</script>
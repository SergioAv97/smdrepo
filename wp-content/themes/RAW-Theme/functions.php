<?php
/**
 * RAW Theme Functions and Definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Acronyms
 * @subpackage RAW
 * @since 1.0.0
 */

use Acronyms\RAW;

require get_stylesheet_directory() . '/engine/class-raw.php';

//Metaboxes Custom
require_once get_stylesheet_directory() . '/metaboxes/hero-form-landin.php';
require_once get_stylesheet_directory() . '/metaboxes/caja-ayuda.php';
require_once get_stylesheet_directory() . '/metaboxes/texto-video-landings.php';
require_once get_stylesheet_directory() . '/metaboxes/cajas-imagenes.php';
require_once get_stylesheet_directory() . '/metaboxes/dudas-cta.php';
//DANI
require_once get_stylesheet_directory() . '/metaboxes/dos-cajas-cta.php';
require_once get_stylesheet_directory() . '/metaboxes/tres-cajas-cta.php';
require_once get_stylesheet_directory() . '/metaboxes/modulo-imagen-caja-cta.php';

new RAW();




/* 
// Agregar los metaboxes personalizados
function agregar_metaboxes_personalizados() {
    // Agregar metabox para el campo de la imagen
    add_meta_box(
        'metabox-imagen_card2',
        'Imagen de Ejemplo',
        'mostrar_metabox_imagen_card2',
        'post',  // Puedes ajustar el tipo de publicación según tus necesidades
        'normal',
        'high'
    );
    
}

// Mostrar el metabox para el campo de la imagen
function mostrar_metabox_imagen($post) {
    // Obtiene el valor actual del campo de la imagen
    $imagen_nombre = get_post_meta($post->ID, 'imagen_card2', true);
    ?>
    <input type="text" name="imagen_card2" value="<?php echo esc_attr($imagen_nombre); ?>" style="width: 100%;">
    <p>Introduce el nombre de la imagen.</p>
    <?php
}

// Guardar los metaboxes personalizados
function guardar_metaboxes_personalizados($post_id) {
    // Verificar que los datos han sido enviados y que no estamos en un guardado automático
    // Repite estos bloques para cada de campos adicionales
    if (array_key_exists('Titulo-Card-1', $_POST) && !wp_is_post_autosave($post_id)) {
        update_post_meta($post_id, 'Titulo-Card-1', $_POST['Titulo-Card-1']);
    }
    
}
*/
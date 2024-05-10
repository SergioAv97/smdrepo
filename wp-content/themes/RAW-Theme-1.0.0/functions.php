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
    // Metabox para el campo 'raw-TituloCardOpinionesExitos1'
    add_meta_box(
        'metabox-titulo-card-opiniones-exitos1',
        'Título de la Card de Opiniones Exitosas 1',
        'mostrar_metabox_titulo_card_opiniones_exitos1',
        'post',
        'normal',
        'high'
    );
    
    // Metabox para el campo 'raw-TextoCardOpinionesExitos1'
    add_meta_box(
        'metabox-texto-card-opiniones-exitos1',
        'Texto de la Card de Opiniones Exitosas 1',
        'mostrar_metabox_texto_card_opiniones_exitos1',
        'post',
        'normal',
        'high'
    );

    // Repite este bloque para cada campo personalizado que quieras agregar

    // Metabox para el campo 'raw-TituloCardOpinionesExitos2'
    add_meta_box(
        'metabox-titulo-card-opiniones-exitos2',
        'Título de la Card de Opiniones Exitosas 2',
        'mostrar_metabox_titulo_card_opiniones_exitos2',
        'post',
        'normal',
        'high'
    );

    // Metabox para el campo 'raw-TextoCardOpinionesExitos2'
    add_meta_box(
        'metabox-texto-card-opiniones-exitos2',
        'Texto de la Card de Opiniones Exitosas 2',
        'mostrar_metabox_texto_card_opiniones_exitos2',
        'post',
        'normal',
        'high'
    );

    // Repite este bloque para cada campo personalizado que quieras agregar

    // Metabox para el campo 'raw-TituloCardOpinionesExitos3'
    add_meta_box(
        'metabox-titulo-card-opiniones-exitos3',
        'Título de la Card de Opiniones Exitosas 3',
        'mostrar_metabox_titulo_card_opiniones_exitos3',
        'post',
        'normal',
        'high'
    );
    
    // Metabox para el campo 'raw-TextoCardOpinionesExitos3'
    add_meta_box(
        'metabox-texto-card-opiniones-exitos3',
        'Texto de la Card de Opiniones Exitosas 3',
        'mostrar_metabox_texto_card_opiniones_exitos3',
        'post',
        'normal',
        'high'
    );

    // Repite este bloque para cada campo personalizado que quieras agregar

    // Metabox para el campo 'raw-TituloCardOpinionesExitos4'
    add_meta_box(
        'metabox-titulo-card-opiniones-exitos4',
        'Título de la Card de Opiniones Exitosas 4',
        'mostrar_metabox_titulo_card_opiniones_exitos4',
        'post',
        'normal',
        'high'
    );
    
    // Metabox para el campo 'raw-TextoCardOpinionesExitos4'
    add_meta_box(
        'metabox-texto-card-opiniones-exitos4',
        'Texto de la Card de Opiniones Exitosas 4',
        'mostrar_metabox_texto_card_opiniones_exitos4',
        'post',
        'normal',
        'high'
    );

    // Repite este bloque para cada campo personalizado que quieras agregar
    add_meta_box(
        'metabox-imagen-card1',
        'Imagen de la Card 1',
        'mostrar_metabox_imagen_card1',
        'post',  // Puedes ajustar el tipo de publicación según tus necesidades
        'normal',
        'high'
    );

    // Agregar metabox para el campo de la imagen de la Card 2
    add_meta_box(
        'metabox-imagen-card2',
        'Imagen de la Card 2',
        'mostrar_metabox_imagen_card2',
        'post',
        'normal',
        'high'
    );

    // Agregar metabox para el campo de la imagen de la Card 3
    add_meta_box(
        'metabox-imagen-card3',
        'Imagen de la Card 3',
        'mostrar_metabox_imagen_card3',
        'post',
        'normal',
        'high'
    );

    // Agregar metabox para el campo de la imagen de la Card 4
    add_meta_box(
        'metabox-imagen-card4',
        'Imagen de la Card 4',
        'mostrar_metabox_imagen_card4',
        'post',
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


function mostrar_metabox_titulo_card_opiniones_exitos1($post) {
    $valor = get_post_meta($post->ID, 'Titulo-Card-1', true);
    ?>
    <input type="text" name="Titulo-Card-1" value="<?php echo esc_attr($valor); ?>" style="width: 100%;">
    <?php
}

function mostrar_metabox_texto_card_opiniones_exitos1($post) {
    $valor = get_post_meta($post->ID, 'Texto-Card-1', true);
    ?>
    <textarea name="Texto-Card-1" style="width: 100%; height: 100px;"><?php echo esc_textarea($valor); ?></textarea>
    <?php
}

function mostrar_metabox_imagen_card_opiniones_exitos1($post) {
    $valor = get_post_meta($post->ID, 'Imagen-card-1', true);
    ?>
    <input type="text" name="Imagen-card-1" value="<?php echo esc_attr($valor); ?>" style="width: 100%;">
    <?php
}

// Metabox para el campo 'raw-TituloCardOpinionesExitos2'
function mostrar_metabox_titulo_card_opiniones_exitos2($post) {
    $valor = get_post_meta($post->ID, 'Titulo-Card-2', true);
    ?>
    <input type="text" name="Titulo-Card-2" value="<?php echo esc_attr($valor); ?>" style="width: 100%;">
    <?php
}


function mostrar_metabox_texto_card_opiniones_exitos2($post) {
    $valor = get_post_meta($post->ID, 'Texto-Card-2', true);
    ?>
    <textarea name="Texto-Card-2" style="width: 100%; height: 100px;"><?php echo esc_textarea($valor); ?></textarea>
    <?php
}

function mostrar_metabox_imagen_card_opiniones_exitos2($post) {
    $valor = get_post_meta($post->ID, 'Imagen-card-2', true);
    ?>
    <input type="text" name="Imagen-card-2" value="<?php echo esc_attr($valor); ?>" style="width: 100%;">
    <?php
}


function mostrar_metabox_titulo_card_opiniones_exitos3($post) {
    $valor = get_post_meta($post->ID, 'Titulo-Card-3', true);
    ?>
    <textarea name=Titulo-Card-3" style="width: 100%; height: 100px;"><?php echo esc_textarea($valor); ?></textarea>
    <?php
}
function mostrar_metabox_texto_card_opiniones_exitos3($post) {
    $valor = get_post_meta($post->ID, 'Texto-Card-3', true);
    ?>
    <textarea name="Texto-Card-3" style="width: 100%; height: 100px;"><?php echo esc_textarea($valor); ?></textarea>
    <?php
}
function mostrar_metabox_imagen_card_opiniones_exitos3($post) {
    $valor = get_post_meta($post->ID, 'Imagen-card-3', true);
    ?>
    <input type="text" name="Imagen-card-3" value="<?php echo esc_attr($valor); ?>" style="width: 100%;">
    <?php
}


function mostrar_metabox_titulo_card_opiniones_exitos4($post) {
    $valor = get_post_meta($post->ID, 'Titulo-Card-4', true);
    ?>
    <textarea name="Titulo-Card-4" style="width: 100%; height: 100px;"><?php echo esc_textarea($valor); ?></textarea>
    <?php
}
function mostrar_metabox_texto_card_opiniones_exitos4($post) {
    $valor = get_post_meta($post->ID, 'Texto-Card-4', true);
    ?>
    <textarea name="Texto-Card-4" style="width: 100%; height: 100px;"><?php echo esc_textarea($valor); ?></textarea>
    <?php
}
function mostrar_metabox_imagen_card_opiniones_exitos4($post) {
    $valor = get_post_meta($post->ID, 'Imagen-card-4', true);
    ?>
    <input type="text" name="Imagen-card-4" value="<?php echo esc_attr($valor); ?>" style="width: 100%;">
    <?php
}

// Guardar los metaboxes personalizados
function guardar_metaboxes_personalizados($post_id) {
    // Verificar que los datos han sido enviados y que no estamos en un guardado automático
    // Repite estos bloques para cada de campos adicionales
    if (array_key_exists('Titulo-Card-1', $_POST) && !wp_is_post_autosave($post_id)) {

        update_post_meta($post_id, 'Titulo-Card-1', $_POST['Titulo-Card-1']);
    }
    
    if (array_key_exists('Texto-Card-1', $_POST) && !wp_is_post_autosave($post_id)) {

        update_post_meta($post_id, 'Texto-Card-1', $_POST['Texto-Card-1']);
    }

    if (array_key_exists('Imagen-card-1', $_POST) && !wp_is_post_autosave($post_id)) {

        update_post_meta($post_id, 'Imagen-card-1', $_POST['Imagen-card-1']);
    }


    // Guardar el valor del campo 'raw-TituloCardOpinionesExitos2'
    if (array_key_exists('Titulo-Card-2', $_POST) && !wp_is_post_autosave($post_id)) {
        update_post_meta($post_id, 'Titulo-Card-2', $_POST['Titulo-Card-2']);
    }

    if (array_key_exists('Texto-Card-2', $_POST) && !wp_is_post_autosave($post_id)) {
        update_post_meta($post_id, 'Texto-Card-2', $_POST['Texto-Card-2']);
    }

    if (array_key_exists('Imagen-card-2', $_POST) && !wp_is_post_autosave($post_id)) {

        update_post_meta($post_id, 'Imagen-card-2', $_POST['Imagen-card-2']);
    }


    // Guardar el valor del campo 'raw-TituloCardOpinionesExitos3'
    if (array_key_exists('Titulo-Card-3', $_POST) && !wp_is_post_autosave($post_id)) {
        update_post_meta($post_id, 'Titulo-Card-3', $_POST['Titulo-Card-3']);
    }

    // Guardar el valor del campo 'raw-TextoCardOpinionesExitos3'
    if (array_key_exists('Texto-Card-3', $_POST) && !wp_is_post_autosave($post_id)) {
        update_post_meta($post_id, 'Texto-Card-3', $_POST['Texto-Card-3']);
    }

    if (array_key_exists('Imagen-card-3', $_POST) && !wp_is_post_autosave($post_id)) {

        update_post_meta($post_id, 'Imagen-card-3', $_POST['Imagen-card-3']);
    }

    // Guardar el valor del campo 'raw-TituloCardOpinionesExitos4'
    if (array_key_exists('Titulo-Card-4', $_POST) && !wp_is_post_autosave($post_id)) {
        update_post_meta($post_id, 'Titulo-Card-4', $_POST['Titulo-Card-4']);
    }

    // Guardar el valor del campo 'raw-TextoCardOpinionesExitos4'
    if (array_key_exists('Texto-Card-4', $_POST) && !wp_is_post_autosave($post_id)) {
        update_post_meta($post_id, 'Texto-Card-4', $_POST['Texto-Card-4']);
    }

    if (array_key_exists('Imagen-card-4', $_POST) && !wp_is_post_autosave($post_id)) {

        update_post_meta($post_id, 'Imagen-card-4', $_POST['Imagen-card-4']);
    }
}


function enqueue_custom_scripts() {
    // Registra el script de Slick Slider desde el CDN
    wp_register_script('slick-slider', 'https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.min.js', array('jquery'), '1.8.1', true);

    // Agrega el script de Slick Slider a la cola de scripts
    wp_enqueue_script('slick-slider');

    // Agrega el archivo CSS de Slick Slider desde el CDN
    wp_enqueue_style('slick-slider-css', 'https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.css', array(), '1.8.1', 'all');

    // Agrega el archivo CSS de Slick Slider Theme desde el CDN (opcional)
    wp_enqueue_style('slick-slider-theme-css', 'https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick-theme.css', array(), '1.8.1', 'all');
}

// Agrega los scripts personalizados al hook 'wp_enqueue_scripts'

add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');
add_action('add_meta_boxes', 'agregar_metaboxes_personalizados');
add_action('save_post', 'guardar_metaboxes_personalizados');

// tamayo de las Imagenes de las cartas
add_image_size( 'card', 330, 180, true );

new RAW();

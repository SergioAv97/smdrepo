<div id="containerGeneral">
    <h1 id="tituloComponente">Nuestros artículos del blog más útiles</h1>
    <div id="containerCards">
        <?php
            // Aquí hacemos la consulta para obtener las entradas y sus datos del blog de WordPress
            $args = array(
                'post_type' => 'post', // Tipo de entrada, puede ser 'post', 'page', u otro tipo personalizado si lo tienes definido
                'posts_per_page' => 10, // Número de entradas a mostrar en las cartas
            );
            //Declaramos el bucle de wordpres 
            $loop = new WP_Query($args);

            // Comprobamos si hay entradas
            if ($loop->have_posts()) :
                // Comenzamos el bucle
                while ($loop->have_posts()) : $loop->the_post();
                    // Obtenemos la imagen destacada de la entrada
                    $image_url = get_the_post_thumbnail_url(get_the_ID(), 'card'); // 'card' (no funciona) es el tamaño de la imagen (definido en el style), definido en el funtions.php
                    // Obtenemos el título de la entrada
                    $title = get_the_title();
                    // Limitamos el título a las primeras 10 palabras
                    $trimmed_title = wp_trim_words($title, 10, '...');
                    // Obtenemos la descripción de la entrada
                    $description = get_the_excerpt(); // get_the_content() para conseguir el contenido completo
                    // Limitamos la descripcion a las primeras 15 palabras
                    $trimmed_description = wp_trim_words($description, 15, '...');
                    // Obtenemos la url de la entrada
                    $post_url = get_permalink();
                    // Obtenemos las etiquetas de la entrada
                    $post_tags = get_the_tags();
                    // Inicializamos una variable para almacenar las etiquetas
                    $tags_output = '';
                    // Verificamos si hay etiquetas
                    if ($post_tags) {
                        // Obtenemos la primera etiqueta
                        $first_tag = reset($post_tags)->name;
                    }

                    // Ahora puedes mostrar estos valores en tus cartas HTML
        ?>
            <div class="carta-entrada-blogs">
                <div id="containerImg">
                    <a href="<?php echo esc_url($post_url); ?>"><img id="imgCardBlogs" src="<?php echo $image_url; ?>" alt="<?php echo $title; ?>"></a>
                    <p id="etiquetaCard"><?php echo $first_tag ?></p>
                </div>
                <div id="containerTextCard">
                    <h4 id="titleCard"><?php echo $trimmed_title; ?></h4>
                    <p id="textCard"><?php echo $trimmed_description; ?></p>
                    <a  id="enlaceCard" href="<?php echo esc_url($post_url); ?>">LEER MÁS >></a>
                </div>
            </div>
            
            
            <?php
            endwhile;
            // Restauramos los datos del post globalmente
            wp_reset_postdata();
            else :
                // Si no hay entradas
                echo 'No se encontraron entradas.';
            endif;
            ?>
    </div>
</div>
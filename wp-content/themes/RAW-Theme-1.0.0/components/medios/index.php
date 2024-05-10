<?php
/**
 * Componente: Medios.
 *
 * @package Acronyms\RAW
 * @subpackage Components
 * @since 1.0.0
 */

?>

<?php 
    $upload_dir = wp_upload_dir();

    $imgDiarioDeSevilla = $upload_dir['baseurl']  . '/2024/medios/Diario-de-Sevilla.png';
    $imgElEconomista = $upload_dir['baseurl'] . '/2024/medios/El-Economista.png';
    $imgEmprendedores = $upload_dir['baseurl'] . '/2024/medios/Emprendedores.png';
    $imgLaRazon = $upload_dir['baseurl'] . '/2024/medios/La-Razon.png';
    $imgElSpanol = $upload_dir['baseurl'] . '/2024/medios/El-Espanol.png';
    
?>
<div id="raw-mainContainer-Medios">
    <h2 id="tituloMedios">Soluciona Mi Deuda en los medios</h2>
    <div>
        <a href="https://www.larazon.es/emergente/estas-son-20-empresas-startups-mas-prometedoras-espana-segun-linkedin_202309286515417198383a0001a40488.html"><img class="imgMedios" src="<?php echo esc_url($imgLaRazon); ?>" alt="Consultar Embargos por DNI"></a>
        <a href="https://emprendedores.es/startups/startups-prometedoras-2/"><img class="imgMedios" src="<?php echo esc_url($imgEmprendedores); ?>" alt="Consultar Embargos por DNI"></a>
        <a href="https://www.elespanol.com/sevilla/20240219/libra-deuda-medio-millon-euros-ley-segunda-oportunidad/833916704_0.html"><img class="imgMedios" src="<?php echo esc_url($imgElSpanol); ?>" alt="Consultar Embargos por DNI"></a>
    </div>
    <div>
        <a href="https://www.eleconomista.es/tecnologia/noticias/12465875/09/23/linkedin-presenta-las-empresas-emergentes-mas-prometedoras-en-espana.html"><img class="imgMedios" src="<?php echo esc_url($imgElEconomista); ?>" alt="Consultar Embargos por DNI"></a>
        <a href="https://www.diariodesevilla.es/juzgado_de_guardia/Perdonan-euros-Ley-Segunda-Oportunidad_0_1877213005.html"><img class="imgMedios" src="<?php echo esc_url($imgDiarioDeSevilla); ?>" alt="Consultar Embargos por DNI"></a>
    </div>
    
</div>
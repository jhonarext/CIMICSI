<?php
if ( ! function_exists('seo_headers'))
{
    function seo_headers($sel = 'home')
    {
    	$seo_headers = array(
    		'home' => array(
    			'title' => 'CIMIC 2020 | PUNO PERÚ',
    			'metas'	=> array(
    				array(
    					'name' 		=> 	'CIMIC 2020 EPIC',
    					'content'	=> 	'Centro de Investigación Multidisciplinario en la Ingeniería & Construcción',
    				),
    				array(
    					'name' 		=> 	'Descripcion 02',
    					'content'	=> 	'',
    				),
    			),
    			'styles' => array(
    			),
    			'scripts' => array(
    			),
    		),
    	);
        return (isset($seo_headers[$sel]))? $seo_headers[$sel] :$seo_headers['home'] ; //verificar si se lanzaexception
    }
}

/**
 * Helper static url
 * Necesita estar habilidato el helper url
 */
if( !function_exists('static_url')){
    function static_url($nombre){
        $CI    =& get_instance();
        $version = $CI->config->item('static_version');
        return base_url().  $nombre . '?v='. $version;
    }
}

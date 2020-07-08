<?php
/**
 * Description of MY_Controller
 * ref http://blog.linkedbytes.com/2013/02/14/control-acceso-basico-con-codeigniter/
 */
class MY_Controller extends CI_Controller
{
    /**
     * Carga los Elementos para el seo
     */
    public function loadSeoElements($seoHeader)
    {
        $this->title    = $seoHeader['title'];
        $this->meta     = $seoHeader['metas'];
        $this->styles   = $seoHeader['styles'];
        $this->scripts  = $seoHeader['scripts'];
    }

    /**
     * Carga la configuracion de la Pagination
     */
    public function load_configuration_static_pagination()
    {
        //active
        $config['cur_tag_open'] = '<li class="active"><a>';
        $config['cur_tag_close'] = '</li></a>';
        //wrap
        $config['full_tag_open'] = '<div class="pagination"><ul>';
        $config['full_tag_close'] = '</ul></div>';
        //element
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        //next
        $config['next_link'] = 'Next → &gt;';
        $config['next_tag_open'] = '<li class="next page">';
        $config['next_tag_close'] = '</li>';
        //prev
        $config['prev_link'] = ' ← Previous &lt;';
        $config['prev_tag_open'] = '<li class="prev page">';
        $config['prev_tag_close'] = '</li>';
        //last
        $config['last_link'] = 'Last »>>';
        $config['last_tag_open'] = '<li class="next page">';
        $config['last_tag_close'] = '</li>';
        //first
        $config['first_link'] = '<<« First';
        $config['first_tag_open'] = '<li class="prev page">';
        $config['first_tag_close'] = '</li>';

        return $config;
    }

}

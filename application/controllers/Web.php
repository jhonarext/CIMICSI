<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Description of Web
 *
 * @author jhonarext
 */
class Web extends MY_Controller {
    //put your code here
    public $layout="default";
    public function __construct() {
        parent::__construct();
        $seoHeader = seo_headers('home');
        $this->loadSeoElements($seoHeader);
        // Carga librerias
        $this->load->helper('url');
        // Carga modelo
    }
    public function index(){ //vista Home
        $this->load->view('Web/Views/home.php');
    }
    
}

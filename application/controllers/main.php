<?php
    class main extends CI_Controller{
        function index(){
            $this->load->helper('form');
            $this->load->helper('html');
            echo link_tag('css/mystyles.css');
            $pagina['title']="Agregar usuarios";
            $pagina['headline']="Bienvenido a SAMUC";
            $pagina['include']="vmain";
            
            $this->load->vars($pagina);
            $this->load->view('vtemplate');
        }   
    
    /*fin de la clase*/
    }
?>

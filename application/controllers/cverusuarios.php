<?php
    class cverusuarios extends CI_Controller{
        function index(){


            $pagina['title']="Consulta usuarios";
            $pagina['headline']="Usuarios en la DB";
            $pagina['include']="vusuarios";
            /*
            $pagina['modelo'] <= $this->load->model('mverusuarios', '', TRUE);
            $pagina['imprime'] <= $this->mverusuarios->verusuarios();
            */
            $this->load->model('mverusuarios', '', TRUE);
            //$imprime['consulta'] =
            $this->mverusuarios->verusuarios();
            $this->load->vars($pagina);
            $this->load->view('vtemplate');
        }


        /*Fin de la clase*/
    }
?>

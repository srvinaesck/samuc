<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class caddusuarios extends CI_Controller {
        function index(){
            $this->load->helper('form');
            $pagina['title']="Agregar usuarios";
            $pagina['headline']="Agregar usuarios a la DB";
            $pagina['include']='faddusuarios';

            $this->load->vars($pagina);
            $this->load->view('vtemplate');
        }

        function agregarusuarios(){
            $this->load->helper('url');
            if ($this->input->post('usuario')){
                $this->load->model('maddusuarios', '', TRUE);
                $this->maddusuarios->dbagregar();
                redirect('caddusuarios/operacionexitosa','refresh');
            }else{
                redirect('caddusuarios/index','refresh');
            }


        }
        function operacionexitosa(){
            $data['title'] = "Guardado";
            $data['headline'] = "Usuario Guardado correctamente";
            $data['include'] = 'vopexitosa';
            $this->load->vars($data);
            $this->load->view('vtemplate');
        }

        /*fin de la clase*/
    }
?>
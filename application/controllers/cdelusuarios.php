<?php
    class cdelusuarios extends CI_Controller{
        function index(){
        $this->load->helper('form');
        $pagina['title']="Borrar usuarios";
        $pagina['headline']="Borrar usuarios de la DB";
        $pagina['include']='fdelusuarios';

        $this->load->vars($pagina);
        $this->load->view('vtemplate');
        }

        function borrarusuarios(){
            $this->load->helper('url');
            if ($this->input->post('usuario')){
                $this->load->model('mdelusuarios', '', TRUE);
                echo "modelo cargado";
                $this->mdelusuarios->dbborrar();
                echo "borrado";
                redirect('cdelusuarios/operacionexitosa','refresh');
                }else{
                    redirect('cdelusuarios/index','refresh');
                }
            }

        function operacionexitosa(){
            $data['title'] = "Borrado";
            $data['headline'] = "Usuario Eliminado correctamente";
            $data['include'] = 'vopexitosa';
            $this->load->vars($data);
            $this->load->view('vtemplate');
        }
    }
    /*fin de la clase*/
?>

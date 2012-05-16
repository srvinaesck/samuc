<?php
    class mdelusuarios extends CI_Model{
        function dbborrar(){
        $datos = $this->input->post('usuario');
        $this->db->query("DELETE FROM tb_usuarios WHERE usuario='$datos'");
        //modificación de esta mierda
        
        }
    }
?>

<?php
class maddusuarios extends CI_Model {
   
    function dbagregar(){
        $datos = array(
            'usuario' => $this->input->post('usuario'), /*$this->input->xss_clean($this->input->post('usuario')),*/
            'contrasena' => $this->input->post('contrasena') /* $this->input->xss_clean($this->input->post('contrasena')) */
        );
        $this->db->insert('tb_usuarios', $datos);
    }
}
?>

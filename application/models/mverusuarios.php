<?php
    class mverusuarios extends CI_Model{
        function verusuarios(){
            $consulta = $this->db->get('tb_usuarios');
            $imprime = $consulta->result();
            return $imprime;
        } 
        
        

        /*fin de la clase
         * foreach ($consulta->result() as $columna){
                echo $columna->id;
                echo ' ---> ';
                echo $columna->usuario;
                echo ':';
                echo $columna->contrasena;
                echo '<br />';
            }
         * $imprime['a'] = $columna->id;
                $imprime['b'] = ' ---> ';
                $imprime['c'] = $columna->usuario;
                $imprime['d'] = ':';
                $imprime['e'] = $columna->contrasena;
                $imprime['f'] = '<br />';
         */
    }
?>

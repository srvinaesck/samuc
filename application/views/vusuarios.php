<p>Select * from tb_usuarios</p>

<h3>ID ---> Nombre</h3>
<?php
    echo form_open('caddusuarios/agregarusuarios');

    echo form_label($this->input->post('id'),'usuario');
    echo form_label($this->input->post('id'),'usuario');
    echo form_close();
?>
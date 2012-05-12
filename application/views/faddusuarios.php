<h2 id="add">Datos de usuairo</h2>
<?php
    echo form_open('caddusuarios/agregarusuarios');
    echo form_label('Nombre de usuario','usuario');
    $dnombre = array('name' => 'usuario', 'id' => 'usuario', 'size' => '25');
    echo form_input($dnombre);

    echo form_label('Elige una contraseña','contrasena');
    $dcontra = array('name' => 'contrasena', 'id' => 'contrasena', 'size' => '25');
    echo form_input($dcontra);

    echo form_submit('submit','Guardar');
    echo form_close();
?>
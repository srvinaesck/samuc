<h2>Datos de usuairo</h2>
<?php
    echo form_open('cdelusuarios/borrarusuarios');
    echo form_label('Nombre del usuario QUE DESEAS BORRAR','usuario');
    $dnombre = array('name' => 'usuario', 'id' => 'usuario', 'size' => '25');
    echo form_input($dnombre);

    echo form_submit('submit','Borrar');
    echo form_close();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title><?php echo $title;?></title>
        <style>label{display: block} </style>
        <link href='http://localhost/samuc/css/estilos.css' rel='stylesheet' type='text/css' />
</head>
<body>
    <h1><?php echo $headline;?></h1>
    <?php   $this->load->view($include);     
            echo  'lol';
            
    ?>
    <br />
    <?php foreach ($consulta as $dato); ?>
    <?php echo $dato; ?>
         
    <br />
    <a href="/samuc/">Main</a>
</body>
</html>
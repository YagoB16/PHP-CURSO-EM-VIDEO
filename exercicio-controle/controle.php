<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Projeto Controle Remoto</h1>
        <?php   
        require_once 'controleRemoto.php';
        $c = new controleRemoto();
        $c -> menosVolume(); 

        ?>
    </body>
</html>

<?php 
    foreach ($alertas as $key => $mensajes):
        foreach($mensajes as $mensaje):
?>

    <div class="alerta <?php echo $key; ?>">
            <?php echo $mensaje; ?>

    </div> <!-- Lo que php genera no es necesario sanitizarlo -->

<?php
        endforeach;
    endforeach;

?>
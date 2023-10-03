
<?php

    if(!isset($_SESSION)){ // si ya estaba arrancada la sesion, entonces no hecemos nada
        session_start(); // si no esta iniciada la session, entonces la vamos a iniciar
    }

    $auth = $_SESSION['login'] ?? null;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienes Raíces</title>
    <link rel="stylesheet" href="/public/build/css/app.css">
</head>
<body>
    <header class="header <?php echo $inicio  ? 'inicio' : ''; ?>">
        <div class="contenedor contenido-header">
            <div class="barra"> 
                <a href="/">
                    <img src="/build/img/logo.svg" alt="Logotipo de Bienes Raíces">

                </a>

                <div class="mobile-menu">
                    <img src="/build/img/barras.svg" alt="icono menu responsive">
                </div>


                <div class="derecha">
                    <img class="dark-mode-boton" src="/build/img/dark-mode.svg" alt="">
                    <nav class="navegacion mostrar">
                        <?php if($auth):  ?>
                            <a href="/">Cerrar Sesión</a>
                        <?php endif; ?>
                    </nav>

                </div>
            </div>

            <?php  echo $inicio ? "<h1>Venta de Casas y Departamentos Exclusivos de Lujo</h1>" : ''; ?>

        </div>
    </header>
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
    <title>Store Spring</title>
    <link rel="stylesheet" href="/build/css/app.css">
</head>
<body>
    <header class="header <?php echo $inicio  ? 'inicio' : ''; ?>">

        <div class="contenedor contenido-header">
            <div class="barra"> 
                <div class="derecha">
                    <nav class="navegacion mostrar">
                        <?php if($auth): ?>
                            <a href="/">Cerrar Sesión</a>
                        <?php endif; ?>
                    </nav>

                </div>
            </div>

        </div>
    </header>

    <?php echo $contenido ?>



    <footer class="footer seccion">

        <p class="copyright">Todos los derechos reservados 
            <?php echo date('Y') ?> &copy;</p>
    </footer>

    <script src="/build/js/bundle.min.js"></script>
</body>
</html>
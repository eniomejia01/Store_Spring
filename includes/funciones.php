<?php


define('TEMPLATES_URL', __DIR__ . '/templates');
define('FUNCIONES_URL', __DIR__ . 'funciones.php');
define('CARPETA_IMAGENES', $_SERVER['DOCUMENT_ROOT'] . '/imagenes/');

function inlcluirTemplate (string $nombre, bool $inicio = false){
    include TEMPLATES_URL . "/${nombre}.php";
}


function estaAutenticado() {
    session_start();

    if( !$_SESSION['login']){
        header('location: /');
    }

} 

function debuguear($variable){
    echo "<pre>";
    var_dump($variable);
    echo "</pre>";

    exit;
}


// Escapa / sanitizar el HTML
function s($html) : string { 
    $s = htmlspecialchars($html);
    return $s;
}


// Validar tipo de contenido


function validarTipoContenido($tipo) {
    $tipos = ['usuario', 'propiedad'];

    return in_array($tipo, $tipos); /* usa para verificar si un valor dado existe o no en un array. */
}


// muestra los mmensajes
function mostrarNotificacion($codigo) {
    $mensaje = '';

    switch($codigo) {
        case 1:
            $mensaje = 'Creado Correctamente';
            break;
        case 2:
            $mensaje = 'Actualizado Correctamente';
            break;
        case 3:
            $mensaje = 'Eliminado Correctamente';
            break;
        default:
            $mensaje = false;
            break;
    }

    return $mensaje;
}


function validarORedireccionar(string $url) {

    // validar la URL por un ID válido
    $id = $_GET['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT); //Esta función se utiliza para validar si una variable contiene un valor entero válido. Si la variable contiene un valor entero válido, la función devuelve el valor entero. Si la variable no contiene un valor entero válido, la función devuelve FALSE.

    if(!$id) {
        header("Location: ${url}");
    }

    return $id;

}
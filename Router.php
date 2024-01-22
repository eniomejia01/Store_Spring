<?php



namespace MVC;


class Router {


    public $rutasGET = [];
    public $rutasPOST = [];

    public function get($url, $fn) {
        $this -> rutasGET[$url] = $fn;
    }
    public function post($url, $fn) {
        $this -> rutasPOST[$url] = $fn;
    }

    public function comprobarRutas() {

        session_start();
        $auth = $_SESSION['login'] ?? null;

        // arreglo de rutas protegidas
        $rutas_protegidas = ['/admin', '/propiedades/crear', '/propiedades/actualizar', '/propiedades/eliminar'];

        $urlActual = strtok($_SERVER['REQUEST_URI'], '?') ?? '/';

        // $urlActual = $_SERVER['PATH_INFO'] ?? '/';
        $metodo = $_SERVER['REQUEST_METHOD'];

        if($metodo === 'GET') {

            $fn = $this->rutasGET[$urlActual] ?? null;

        } else{
            $fn = $this->rutasPOST[$urlActual] ?? null;
        }

        // Proteger las rutas
        if(in_array($urlActual, $rutas_protegidas) && !$auth) {
            header('Location: /');
        }



        if($fn) {
            // la URL existe y hay una funcion asociada
            call_user_func($fn, $this);

        } else {
            echo "Pagina no encontrada";
        }


    }

    // muestra un vista
    public function render($view, $datos = []){

        foreach( $datos as $key => $value) {
            $$key = $value; // doble signo de dolar = variable de variable
        }

        ob_start(); // inicia un almacenamiento en memoria

        include_once __DIR__ . "/views/$view.php";
        $contenido = ob_get_clean(); // se limpia la memoria \ limpia el buffer
        include_once __DIR__ . "/index.php";

    }

}
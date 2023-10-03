<?php

namespace Controllers;

use MVC\Router;
use Model\Mostradores;

class MostradoresController{

    public static function crear( Router $router){

        $errores = Mostradores::getErrores();
        
        $mostradores_productos = new Mostradores();
        

        // Ejecutar el codigo, despues de que el usuario envia el formulario
        if($_SERVER['REQUEST_METHOD'] === 'POST') {


            // Crear una nueva instancia
            $mostradores_productos = new Mostradores($_POST['mostradores']);


            // validadr que no haya campos vacíos
            $errores = $mostradores_productos -> validar();

            // No hay errores
            if(empty($errores)) {
                $mostradores_productos-> guardar();
            }

        }

        $router -> render('mostradores/crear', [

            'errores' => $errores,
            'mostradores' => $mostradores_productos


        ]);

    }

    public static function actualizar( Router $router){

        $errores = Mostradores::getErrores();
        $id = validarORedireccionar('/admin');

        // Obtener datos del vendedor a actualizar
        $mostradores = Mostradores::find($id);

        // Ejecutar el codigo, despues de que el usuario envia el formulario
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            

            // Asignar los valores
            $args = $_POST['mostradores'];

            // Sincronizar objeto en memoria con lo que el usuario escribió
            $mostradores -> sincronizar($args);

            // validacion
            $errores = $mostradores->validar();

            if(empty($errores)) {
                $mostradores->guardar();
            }
        }

        $router->render('mostradores/actualizar', [
            'errores' => $errores,
            'mostradores' => $mostradores

        ]);
    }

    public static function eliminar(){

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            // valida el id
            $id = $_POST['id'];
            $id = filter_var($id, FILTER_VALIDATE_INT);

            if($id){
                // valida el tipo a eliminar
                $tipo = $_POST['tipo'];

                if(validarTipoContenido($tipo)) {
                    $mostradores = Mostradores::find($id);
                    $mostradores->eliminar();
                }
            }
        }
    }
}
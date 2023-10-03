<?php

namespace Controllers;

use MVC\Router;
use Model\Camaras;

class CamarasController{

    public static function crear( Router $router){

        $errores = Camaras::getErrores();
        
        $camaras_productos = new Camaras();
        

        // Ejecutar el codigo, despues de que el usuario envia el formulario
        if($_SERVER['REQUEST_METHOD'] === 'POST') {


            // Crear una nueva instancia
            $camaras_productos = new Camaras($_POST['camaras_p']);


            // validadr que no haya campos vacíos
            $errores = $camaras_productos -> validar();

            // No hay errores
            if(empty($errores)) {
                $camaras_productos-> guardar();
            }

        }

        $router -> render('camaras/crear', [

            'errores' => $errores,
            'camaras_p' => $camaras_productos


        ]);

    }

    public static function actualizar( Router $router){

        $errores = Camaras::getErrores();
        $id = validarORedireccionar('/admin');

        // Obtener datos del vendedor a actualizar
        $camaras_p = Camaras::find($id);

        // Ejecutar el codigo, despues de que el usuario envia el formulario
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            

            // Asignar los valores
            $args = $_POST['camaras_p'];

            // Sincronizar objeto en memoria con lo que el usuario escribió
            $camaras_p -> sincronizar($args);

            // validacion
            $errores = $camaras_p->validar();

            if(empty($errores)) {
                $camaras_p->guardar();
            }
        }

        $router->render('camaras/actualizar', [
            'errores' => $errores,
            'camaras_p' => $camaras_p

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
                    $camaras_p = Camaras::find($id);
                    $camaras_p->eliminar();
                }
            }
        }
    }
}
<?php

namespace Controllers;

use MVC\Router;
use Model\Concentrados;

class ConcentradosController{

    public static function crear( Router $router){

        $errores = Concentrados::getErrores();
        
        $concentrados_productos = new Concentrados();
        

        // Ejecutar el codigo, despues de que el usuario envia el formulario
        if($_SERVER['REQUEST_METHOD'] === 'POST') {


            // Crear una nueva instancia
            $concentrados_productos = new Concentrados($_POST['concentrado_p']);


            // validadr que no haya campos vacíos
            $errores = $concentrados_productos -> validar();

            // No hay errores
            if(empty($errores)) {
                $concentrados_productos-> guardar();
            }

        }

        $router -> render('concentrados/crear', [

            'errores' => $errores,
            'concentrado_p' => $concentrados_productos


        ]);

    }

    public static function actualizar( Router $router){

        $errores = Concentrados::getErrores();
        $id = validarORedireccionar('/admin');

        // Obtener datos del vendedor a actualizar
        $concentrado_p = Concentrados::find($id);

        // Ejecutar el codigo, despues de que el usuario envia el formulario
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            

            // Asignar los valores
            $args = $_POST['concentrado_p'];

            // Sincronizar objeto en memoria con lo que el usuario escribió
            $concentrado_p -> sincronizar($args);

            // validacion
            $errores = $concentrado_p->validar();

            if(empty($errores)) {
                $concentrado_p->guardar();
            }
        }

        $router->render('concentrados/actualizar', [
            'errores' => $errores,
            'concentrado_p' => $concentrado_p

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
                    $concentrado_p = Concentrados::find($id);
                    $concentrado_p->eliminar();
                }
            }
        }
    }
}
<?php

namespace Controllers;

use MVC\Router;
use Model\Estanteria;

class EstanteriaController{

    public static function crear( Router $router){

        $errores = Estanteria::getErrores();
        
        $estanteria2_productos = new Estanteria();
        

        // Ejecutar el codigo, despues de que el usuario envia el formulario
        if($_SERVER['REQUEST_METHOD'] === 'POST') {


            // Crear una nueva instancia
            $estanteria2_productos = new Estanteria($_POST['estanteria_2']);


            // validadr que no haya campos vacíos
            $errores = $estanteria2_productos -> validar();

            // No hay errores
            if(empty($errores)) {
                $estanteria2_productos-> guardar();
            }

        }

        $router -> render('estanteria_2/crear', [

            'errores' => $errores,
            'estanteria_2' => $estanteria2_productos


        ]);

    }

    public static function actualizar( Router $router){

        $errores = Estanteria::getErrores();
        $id = validarORedireccionar('/admin');

        // Obtener datos del vendedor a actualizar
        $estanteria_2 = Estanteria::find($id);

        // Ejecutar el codigo, despues de que el usuario envia el formulario
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            

            // Asignar los valores
            $args = $_POST['estanteria_2'];

            // Sincronizar objeto en memoria con lo que el usuario escribió
            $estanteria_2 -> sincronizar($args);

            // validacion
            $errores = $estanteria_2->validar();

            if(empty($errores)) {
                $estanteria_2->guardar();
            }
        }

        $router->render('estanteria_2/actualizar', [
            'errores' => $errores,
            'estanteria_2' => $estanteria_2

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
                    $estanteria_2 = Estanteria::find($id);
                    $estanteria_2->eliminar();
                }
            }
        }
    }
}
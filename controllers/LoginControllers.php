<?php

namespace Controllers;
use MVC\Router;
use Model\Admin;
use Model\Usuario;

class LoginControllers{

    public static function login( Router $router) {

        $errores = [];

        if($_SERVER['REQUEST_METHOD'] === 'POST') {

            $auth = new Admin($_POST);

            $errores = $auth->validar();

            if(empty($errores)) {
                // Verificar si el usuario existe
                $resultado = $auth-> existeUsuario();

                if(!$resultado) {
                    //Verificar si el usuario existe o no (mensaje de error)
                    $errores = Admin::getErrores();
                } else {
                    // Verificar el password
                    $autenticado = $auth->comprobarPassword($resultado);

                    if($autenticado) {
                        // Autenticar el usuario
                        $auth -> autenticar();

                    } else {
                        // password incorrecto (mensaje de error)
                        $errores = Admin::getErrores( );
                    }


                    
                }

            }
        }

        $router -> render('auth/login_copy', [
            'errores' => $errores,
        ]);
    }

    public static function crear(Router $router) {
        
        $usuario = new Usuario;

        // Alertas vacías
        $alertas = [];

        if( $_SERVER['REQUEST_METHOD'] === 'POST') {

            $usuario -> sincronizar($_POST);
            $alertas = $usuario -> validarNuuevaCuenta();


            // Revisar que alerta este vacía
            if(empty($alertas)) {
                
                // Verificar que el usuario no esté registrado
                
                $resultado = $usuario->existeUsuario();

                if( $resultado -> num_rows) {
                    $alertas = Usuario::getAlertas();
                } else {
                    //Hashear el password
                    $usuario->hashPassword();

                    //Generar un token único
                    $usuario->crearToken();

                    //Enviar el email
                    // $email = new Email($usuario->nombre, $usuario->email, $usuario->token );

                    // $email->enviarConfirmacion();

                    // Crear el usuario
                    $resultado = $usuario->guardar();


                    // if( $resultado ){
                    //     header('Location: /confirmar-cuenta');
                    // }

                    $resultado = header('Location: /mensaje');



                    // debuguear( $usuario );
                }

            }
        }

        $router->render('auth/crear-cuenta', [

            'usuario' => $usuario,
            'alertas' => $alertas

        ]);
    }

    public static function mensaje( Router $router ) {
        
        $router->render('auth/mensaje');
    } 

    public static function confirmar( Router $router ) {

        $alertas = [];
        $token = s($_GET['token']);
        $usuario = Usuario::where('token', $token);

        if( empty($usuario) ) {
            //Mostrar mensaje de error
            Usuario::setAlerta('error', 'Token No Válido');

        } else {
            //Modificar a usuario confirmado  
            $usuario->confirmado = "1";
            $usuario->token = null;
            $usuario->guardar();
            Usuario::setAlerta('exito', 'Cuenta Comprobada Correctamente');
        }

        //Obtener alertas
        $alertas = Usuario::getAlertas();

        //Renderizar la vista
        $router->render('auth/confirmar-cuenta', [
            'alertas' => $alertas
        ]);
    }

    public static function logout() {
        
        session_start();
        session_destroy();

        // $_SESSION = [];

        header('Location: /login_copy');

        exit();
    }


}
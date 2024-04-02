<?php

namespace Controllers;
use MVC\Router;
use Model\Admin;
use Model\Propiedad;
use Model\Usuario;

class LoginControllers{

    public static function login_copy(Router $router) {

        $errores = [];
        $alertas = [];

        if($_SERVER['REQUEST_METHOD'] === 'POST') {

            $auth = new Usuario($_POST);

            $alertas = $auth -> validarLogin();

            $auth = new Admin($_POST);

            $errores = $auth->validar();

            if( empty($alertas)) {


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
                // Comprobar que exista el usuario
                $usuario = Usuario::where('email', $auth->email);
                

                if( $usuario ){
                    //Verificar el password
                    if( $usuario->comprobarPasswordAndVerificado($auth->password) ){
                        // Autentificar el usuario
                        session_start();

                        $_SESSION['id'] = $usuario->id;
                        $_SESSION['nombre'] = $usuario->nombre . " " . $usuario->apellido;
                        $_SESSION['email'] = $usuario->email;
                        $_SESSION['login'] = true;

                        //Redireccionamiento

                        if($usuario->admin === "1"){
                            $_SESSION['admin'] = $usuario->admin ?? null;

                            header('Location: /admin');

                        } else {
                            header('Location: /paginas');
                        }

                    }

                } else{
                    Usuario::setAlerta('error', 'Usuario no encontrado');
                }
            }
        }

        $alertas = Usuario::getAlertas();
        

        $router->render('auth/login_copy', [
            'alertas' => $alertas,
            'errores' => $errores
        ]);
    }

    public static function index( Router $router){

        // session_start();
        // $auth = $_SESSION['login_copy'] ?? null;
        
        $propiedades = Propiedad::get(3);
        // $inicio = true;

        $router -> render('/paginas/index', [
            'propiedades' => $propiedades,
            'nombre' => $_SESSION['nombre']
            // 'inicio' => $inicio

        ]);
    }

    // public static function propiedades( Router $router){


    //     $propiedades = Propiedad::all();

    //     $router->render('paginas/propiedades', [
    //         'propiedades' => $propiedades
    //     ]);

    // }

    // public static function propiedad( Router $router){

    //     $id = validarORedireccionar('/public/propiedades');

    //     // buscar la propiedad por su id
    //     $propiedad = Propiedad::find($id);

    //     $router -> render('paginas/propiedad', [
    //         'propiedad' => $propiedad
    //     ]);
    // }

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

                    // Crear el usuario
                    $resultado = $usuario->guardar();


                    $resultado = header('Location: /mensaje');

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
        $confirmado = s($_GET['confirmado']);
        $usuario = Usuario::where('confirmado', $confirmado);
        

        if( empty($usuario) ) {
            //Mostrar mensaje de error
            Usuario::setAlerta('error', 'Token No Válido');

        } else {

            //Modificar a usuario confirmado  
            $usuario->confirmado = "1";
            // $usuario->token = null;
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
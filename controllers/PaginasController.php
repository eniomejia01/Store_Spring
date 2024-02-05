<?php

namespace Controllers;
use MVC\Router;
use Model\Propiedad;
use Model\Usuario;



class PaginasController{

    // public static function login_copy(Router $router) {

    //     $alertas = [];

    //     if($_SERVER['REQUEST_METHOD'] === 'POST') {
    //         $auth = new Usuario($_POST);

    //         $alertas = $auth -> validarLogin();

    //         if( empty($alertas)) {
    //             // Comprobar que exista el usuario
    //             $usuario = Usuario::where('email', $auth->email);

    //             if( $usuario ){
    //                 //Verificar el password
    //                 if( $usuario->comprobarPasswordAndVerificado($auth->password) ){
    //                     // Autentificar el usuario
    //                     // session_start();

    //                     $_SESSION['id'] = $usuario->id;
    //                     $_SESSION['nombre'] = $usuario->nombre . " " . $usuario->apellido;
    //                     $_SESSION['email'] = $usuario->email;
    //                     $_SESSION['login'] = true;

    //                     //Redireccionamiento

    //                     if($usuario->admin === "1"){
    //                         $_SESSION['admin'] = $usuario->admin ?? null;

    //                         header('Location: /admin');

    //                     } else {
    //                         header('Location: /paginas');
    //                     }

    //                 }

    //             } else{
    //                 Usuario::setAlerta('error', 'Usuario no encontrado');
    //             }
    //         }
    //     }

    //     $alertas = Usuario::getAlertas();
        

    //     $router->render('auth/login_copy', [
    //         'alertas' => $alertas
    //     ]);
    // }

    // public static function index( Router $router){
        
    //     $propiedades = Propiedad::get(3);
    //     // $inicio = true;

    //     $router -> render('/paginas/index', [
    //         'propiedades' => $propiedades,
    //         // 'inicio' => $inicio

    //     ]);
    // }

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


}
<?php

require_once __DIR__ . '/../includes/app.php';

use Controllers\EstanteriaController;
use Controllers\Estanteria3Controller;
use MVC\Router;
use Controllers\PropiedadController;
// use Controllers\PaginasController;
use Controllers\LoginControllers;
use Controllers\ProductosController;
use Controllers\MostradoresController;
use Controllers\CamarasController;
use Controllers\ConcentradosController;
use Controllers\VariedadesController;

$router = new Router();

// Zona Privada
$router->get('/admin', [PropiedadController::class, 'index']);
$router->get('/propiedades/crear', [PropiedadController::class, 'crear']);
$router->post('/propiedades/crear', [PropiedadController::class, 'crear']);
$router->get('/propiedades/actualizar', [PropiedadController::class, 'actualizar']);
$router->post('/propiedades/actualizar', [PropiedadController::class, 'actualizar']);
$router->post('/propiedades/eliminar', [PropiedadController::class, 'eliminar']); 

// ESTANTERIA 2
$router->get('/estanteria_2/crear', [EstanteriaController::class, 'crear']);
$router->post('/estanteria_2/crear', [EstanteriaController::class, 'crear']);
$router->get('/estanteria_2/actualizar', [EstanteriaController::class, 'actualizar']);
$router->post('/estanteria_2/actualizar', [EstanteriaController::class, 'actualizar']);
$router->post('/estanteria_2/eliminar', [EstanteriaController::class, 'eliminar']); 



// ESTANTERIA 3
$router->get('/estanteria_3/crear', [Estanteria3Controller::class, 'crear']);
$router->post('/estanteria_3/crear', [Estanteria3Controller::class, 'crear']);
$router->get('/estanteria_3/actualizar', [Estanteria3Controller::class, 'actualizar']);
$router->post('/estanteria_3/actualizar', [Estanteria3Controller::class, 'actualizar']);
$router->post('/estanteria_3/eliminar', [Estanteria3Controller::class, 'eliminar']); 

// Mostradores
$router->get('/mostradores/crear', [MostradoresController::class, 'crear']);
$router->post('/mostradores/crear', [MostradoresController::class, 'crear']);
$router->get('/mostradores/actualizar', [MostradoresController::class, 'actualizar']);
$router->post('/mostradores/actualizar', [MostradoresController::class, 'actualizar']);
$router->post('/mostradores/eliminar', [MostradoresController::class, 'eliminar']); 

// Camaras
$router->get('/camaras/crear', [CamarasController::class, 'crear']);
$router->post('/camaras/crear', [CamarasController::class, 'crear']);
$router->get('/camaras/actualizar', [CamarasController::class, 'actualizar']);
$router->post('/camaras/actualizar', [CamarasController::class, 'actualizar']);
$router->post('/camaras/eliminar', [CamarasController::class, 'eliminar']); 

// Concentrados
$router->get('/concentrados/crear', [ConcentradosController::class, 'crear']);
$router->post('/concentrados/crear', [ConcentradosController::class, 'crear']);
$router->get('/concentrados/actualizar', [ConcentradosController::class, 'actualizar']);
$router->post('/concentrados/actualizar', [ConcentradosController::class, 'actualizar']);
$router->post('/concentrados/eliminar', [ConcentradosController::class, 'eliminar']); 

// Variedades
$router->get('/variedades/crear', [VariedadesController::class, 'crear']);
$router->post('/variedades/crear', [VariedadesController::class, 'crear']);
$router->get('/variedades/actualizar', [VariedadesController::class, 'actualizar']);
$router->post('/variedades/actualizar', [VariedadesController::class, 'actualizar']);
$router->post('/variedades/eliminar', [VariedadesController::class, 'eliminar']); 

$router->get('/paginas', [ProductosController::class, 'index']);

// Zona Pública

// $router->get('/nosotros', [PaginasController::class, 'nosotros']);
$router->get('/propiedades', [LoginControllers::class, 'propiedades']);
$router->get('/propiedad', [LoginControllers::class, 'propiedad']);

// // Login y Autenticacion
$router->get('/', [LoginControllers::class, 'login_copy']);
$router->post('/', [LoginControllers::class, 'login_copy']);

// $router -> get('/login', [LoginControllers::class, 'login']);
// $router -> post('/login', [LoginControllers::class, 'login']);
$router -> get('/logout', [LoginControllers::class, 'logout']);

// Crear Cuenta
$router->get('/crear-cuenta', [LoginControllers::class, 'crear']);
$router->post('/crear-cuenta', [LoginControllers::class, 'crear']);

// Confirma cuenta
$router->get('/confirmar-cuenta', [LoginControllers::class, 'confirmar']);
$router->get('/mensaje', [LoginControllers::class, 'mensaje']);

$router -> comprobarRutas();





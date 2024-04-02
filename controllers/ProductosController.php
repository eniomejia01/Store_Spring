<?php

namespace Controllers;

use MVC\Router;
use Model\Propiedad;
use Model\Estanteria;
use Model\Estanteria3;
use Model\Mostradores;
use Model\Camaras;
use Model\Concentrados;
use Model\Variedades;

class ProductosController{
    
    public static function index ( Router $router ) {

        $propiedades = Propiedad::all();
        $estanteria2_productos = Estanteria::all();
        $estanteria3_productos = Estanteria3::all();
        $mostradores_productos = Mostradores::all();
        $camaras_productos     = Camaras::all();
        $concentrados_productos = Concentrados::all();
        $variedades_productos = Variedades::all();

        // Muestra mensaje condicional
        $resultado = $_GET['resultado'] ?? null;
        // session_start()

        $router->render('paginas/index', [
            'nombre' => $_SESSION['nombre'],
            'propiedades' => $propiedades,
            'resultado' => $resultado,
            'estanteria2_productos' => $estanteria2_productos,
            'estanteria3_productos' => $estanteria3_productos,
            'mostradores_productos' => $mostradores_productos,
            'camaras_productos' => $camaras_productos,
            'concentrados_productos' => $concentrados_productos,
            'variedades_productos' => $variedades_productos,
        ]);
    }
}

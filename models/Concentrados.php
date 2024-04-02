<?php

namespace Model;

class Concentrados extends ActiveRecord {

    protected static $tabla = 'concentrados';

    protected static $columnasDB = ['id', 'nombre_producto', 'precio', 'precioCliente', 'descripcion', 'actualizado'];

    public $id;
    public $nombre_producto;
    public $precio;
    public $precioCliente;
    public $descripcion;
    public $actualizado; 


    
    public function __construct($args = [])
    {
        $this -> id                      = $args['id'] ?? null;
        $this -> nombre_producto         = $args['nombre_producto'] ?? '';
        $this -> precio                  = $args['precio'] ?? '';
        $this -> precioCliente           = $args['precioCliente'] ?? '';
        $this -> descripcion             = $args['descripcion'] ?? '';
        $this -> actualizado             = date('Y/m/d');


    }

    public function validar() {
        
        if(!$this -> nombre_producto){
            self::$errores[] = "Debes añadir nombre del producto";
        }


        if(!$this -> precio){
            self::$errores[] = 'El precio es obligatorio';
        }

        if(!$this -> precioCliente){
            self::$errores[] = 'El precioCliente es obligatorio';
        }

        // if( strlen( !$this -> descripcion ) >= 20 ){
        //     self::$errores[] = 'La descripción es obligatoria Y debe tener al menos 20 caracteres';
        // }

        if( !$this -> descripcion ){
            self::$errores[] = 'La descripción es obligatoria Y debe tener al menos 20 caracteres';
        }

        return self::$errores;
    }
}
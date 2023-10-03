<?php

namespace Model;

class Estanteria3 extends ActiveRecord {

    protected static $tabla = 'estanteria_3';

    protected static $columnasDB = ['id', 'nombre_producto', 'precio', 'descripcion', 'actualizado'];

    public $id;
    public $nombre_producto;
    public $precio;
    public $descripcion;
    public $actualizado; 


    
    public function __construct($args = [])
    {
        $this -> id                      = $args['id'] ?? null;
        $this -> nombre_producto         = $args['nombre_producto'] ?? '';
        $this -> precio                  = $args['precio'] ?? '';
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

        // if( strlen( !$this -> descripcion ) >= 20 ){
        //     self::$errores[] = 'La descripción es obligatoria Y debe tener al menos 20 caracteres';
        // }

        if( !$this -> descripcion ){
            self::$errores[] = 'La descripción es obligatoria Y debe tener al menos 20 caracteres';
        }

        return self::$errores;
    }
}
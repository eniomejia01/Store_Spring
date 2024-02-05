<?php

namespace Model;

class ActiveRecord {

    // Base de datos
    protected static $db;
    protected static $columnasDB = [];
    protected static $tabla = '';



    // Errores 
    protected static  $errores = [];

    // Alertas y Mensajes
    protected static $alertas = [];


    // definir la conexion a la BD
    public static function setBD($databse){
        self::$db = $databse;
    }

    // Validación
    public static function getAlertas() {
        return static::$alertas;
    }

    public function guardar() {
        
        if(!is_null($this->id)){

            // actualizar
            $this->actualizar();

        } else{
            // creando un nuevo registro
            $this->crear();
        }
    }

    // Busca un registro por su token
    public static function where($columna, $valor) {
        $query = "SELECT * FROM " . static::$tabla ." WHERE ${columna} = '${valor}'";
        $resultado = self::consultarSQL($query);
        return array_shift( $resultado ) ;
    }

    public static function setAlerta($tipo, $mensaje) {
        static::$alertas[$tipo][] = $mensaje;
    }


    public function crear() {

        // Sanitizar los datos
        $atributos = $this->sanitizarAtributos();

        // Insertar en la base de datos
        $query = " INSERT INTO " . static::$tabla . " ( ";
        $query .= join(', ', array_keys($atributos));
        $query .=  " )  VALUES (' ";  
        $query .= join("', '", array_values($atributos));
        $query .= " ') ";

        $resultado = self::$db->query($query);

        // Mensaje de exito o error
        if($resultado) {
                // Redireccionar al usuario
                header('Location: /admin?resultado=1');
        }
    }

    public function actualizar() {
        // actualizar los datos
        $atributos = $this->sanitizarAtributos();

        $valores = [];
        foreach($atributos as $key => $value){
            $valores[] = "{$key}='{$value}'";
        }

        $query = " UPDATE " . static::$tabla . " SET ";
        $query .= join(', ', $valores);
        $query .= " WHERE id = '" . self::$db->escape_string($this->id) . "' ";
        $query .= " LIMIT 1";

        $resultado = self::$db ->query($query);

        if($resultado) {
            // Redireccionar al usuario
            header('Location: /admin?resultado=2');
        }


    }

    // Eliminar un regsitro
    public function eliminar() {
        // Eliminar el registro
        $query = "DELETE FROM " . static::$tabla . "  WHERE id = " . self::$db->escape_string($this->id) . " LIMIT 1";
        $resultado = self::$db->query($query);

        if($resultado){
            header('location: /admin?resultado=3');
        }
    }


    // identificar y unir los atributos de la DB
    public function atributos() {
        $atributos = [];
        foreach(static::$columnasDB as $columna) {
            if($columna === 'id') continue;
            $atributos[$columna] = $this -> $columna;
        }
        return $atributos;
    }

    public function sanitizarAtributos(){
        $atributos = $this -> atributos();
        $sanitizado = [];

        foreach($atributos as  $key => $value ) {
            
            $sanitizado[$key] = self::$db -> escape_string($value);
        }


        return $sanitizado;

    }



    // validacion
    public static function getErrores() {
        return static::$errores;
    }


    public function validar() {
        static::$errores = [];   
        return static::$errores;
    }

    // Lista todas los registros
    public static function  all() {
        $query = "SELECT * FROM " . static::$tabla;   
        
        $resultado = self::consultarSQL($query);

        return $resultado;

    }

    // OBtiene determinado numero de registros

    public static function  get($cantidad) {
        $query = "SELECT * FROM " . static::$tabla . " LIMIT "  . $cantidad;   

        $resultado = self::consultarSQL($query);

        return $resultado;

    }

    // busca una propiedad por su id
    public static function find($id) {
        $query = "SELECT * FROM " . static::$tabla . "  WHERE id = ${id}";

        $resultado = self::consultarSQL($query);

        return array_shift( $resultado ); 

    }


    public static function consultarSQL($query) {
        // consultar la BD
        $resultado = self::$db->query($query);

        // Iterar los resultado
        $array = [];
        while( $registro = $resultado -> fetch_assoc()) {
            $array[] = static::crearObjeto($registro);
        }

        // Liberar la memoria
        $resultado -> free();

        // retornar los resultados
        return $array;
    }

    protected static function crearObjeto($registro ) {
        $objeto = new static; /* esto crea un objeto */

        foreach($registro as $key => $value){
            if(property_exists( $objeto, $key )){
                $objeto -> $key = $value;
            }
        }

        return $objeto;
    }


    // Sincroniza el objeto en memoria con los cambios realizados por el usuario

    public function sincronizar( $args = [] ) {

        foreach($args as $key => $value ) {
            if(property_exists($this, $key) && !is_null($value)) {
                $this -> $key = $value;
            }
        }

    }



}




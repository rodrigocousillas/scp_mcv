<?php

namespace Model;

class Ratios extends ActiveRecord {

    protected static $tabla = 'ratios';
    protected static $columnasDB = ['id', 'imagen', 'descripcion'];

    public $id;
    public $imagen;
    public $descripcion;

    public function __construct($args = []) 
    {
        $this->id = $args['id'] ?? null;
        $this->imagen = $args['imagen'] ?? '';
        $this->descripcion = $args['descripcion'] ?? '';
    }

    public function validar() {

        if(!$this->imagen) {
            self::$errores[] = "La imagen es obligatoria";
        }

        if(!$this->descripcion) {
            self::$errores[] = "La descripcion es obligatoria.";
        }

        return self::$errores;
    }

}
<?php



namespace Model;

class Gobierno extends ActiveRecord {

    protected static $tabla = 'gobierno';
    protected static $columnasDB = ['id', 'nombre', 'cargo', 'profesion', 'descripcion', 'imagen'];

    public $id;
    public $nombre;
    public $cargo;
    public $profesion;
    public $descripcion;
    public $imagen;

    public function __construct($args = []) 
    {
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->cargo = $args['cargo'] ?? '';
        $this->profesion = $args['profesion'] ?? '';
        $this->descripcion = $args['descripcion'] ?? '';
        $this->imagen = $args['imagen'] ?? '' ;
    }

    

    public function validar() {

        if(!$this->nombre) {
            self::$errores[] = "El nombre es obligatorio.";
        }

        if(!$this->cargo) {
            self::$errores[] = "Falta el cargo.";
        }

        if(!$this->profesion) {
            self::$errores[] = "Falta la profesion.";
        }

        if(!$this->descripcion) {
            self::$errores[] = "Falta el desarrollo del miembro del gobierno.";
        }

        if(!$this->imagen) {
            self::$errores[] = "La imagen es obligatoria";
        }

        return self::$errores;
    }

}
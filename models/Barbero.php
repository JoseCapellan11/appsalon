<?php

namespace Model;

class Barbero extends ActiveRecord {
    protected static $tabla = 'barberos';
    protected static $columnasDB = ['id', 'nombre', 'apellido', 'imagen'];

    public $id;
    public $nombre;
    public $apellido;
    public $imagen;

    public function __construct($args = []) {
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->apellido = $args['apellido'] ?? '';
        $this->imagen = $args['imagen'] ?? '';
    }

    public function validar() {
        if(!$this->nombre) {
            self::$alertas['error'][] = 'El Nombre del Barbero es Obligatorio';
        }
        if(!$this->apellido) {
            self::$alertas['error'][] = 'El Apellido del Barbero es Obligatorio';
        }
        return self::$alertas;
    }
}
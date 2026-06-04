<?php

namespace Model;

class AdminCita extends ActiveRecord {
    protected static $tabla = 'citas';
    protected static $columnasDB = ['id', 'hora', 'cliente', 'email', 'telefono', 'barbero', 'servicio', 'precio'];

    public $id;
    public $hora;
    public $cliente;
    public $email;
    public $telefono;
    public $barbero;
    public $servicio;
    public $precio;

    public function __construct($args = []) {
        $this->id = $args['id'] ?? null;
        $this->hora = $args['hora'] ?? '';
        $this->cliente = $args['cliente'] ?? '';
        $this->email = $args['email'] ?? '';
        $this->telefono = $args['telefono'] ?? '';
        $this->barbero = $args['barbero'] ?? '';
        $this->servicio = $args['servicio'] ?? '';
        $this->precio = $args['precio'] ?? '';
    }
}
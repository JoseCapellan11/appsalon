<?php

namespace Controllers;

use Model\AdminCita;
use MVC\Router;

class AdminController {
    public static function index(Router $router) {

        isAdmin();

        $fecha = $_GET['fecha'] ?? date('Y-m-d');
        $fechas = explode('-', $fecha);

        if(!checkdate($fechas[1], $fechas[2], $fechas[0])) {
            header('Location: /404');
            exit;
        }

        $consulta  = " SELECT citas.id, citas.fecha, citas.hora, ";
        $consulta .= " CONCAT(usuarios.nombre, ' ', usuarios.apellido) as cliente, ";
        $consulta .= " usuarios.email, usuarios.telefono, ";
        $consulta .= " CONCAT(barberos.nombre, ' ', barberos.apellido) as barbero, ";
        $consulta .= " servicios.nombre as servicio, servicios.precio ";
        $consulta .= " FROM citas ";
        $consulta .= " LEFT OUTER JOIN usuarios ON citas.usuarioId = usuarios.id ";
        $consulta .= " LEFT OUTER JOIN barberos ON citas.barberoId = barberos.id ";
        $consulta .= " LEFT OUTER JOIN citasservicios ON citasservicios.citaId = citas.id ";
        $consulta .= " LEFT OUTER JOIN servicios ON servicios.id = citasservicios.servicioId ";
        $consulta .= " WHERE DATE(citas.fecha) = '{$fecha}' ";
        $consulta .= " ORDER BY citas.id ASC ";
        

        $citas = AdminCita::SQL($consulta);

        $router->render('admin/index', [
            'nombre' => $_SESSION['nombre'],
            'citas' => $citas,
            'fecha' => $fecha
        ]);
    }
}
<?php

namespace Controllers;

use Model\CitaServicio;
use Model\Cita;
use Model\Servicio;

class APIController {
    public static function index() {
        $servicios = Servicio::all();
        echo json_encode($servicios);
    }

    public static function guardar() {
        $cita = new Cita($_POST);
        $resultado = $cita->guardar();

        $id = $resultado['id']; // ← verificar que esto tenga valor

        if(!$id) {
            echo json_encode(['resultado' => false]);
            return;
        }

        $idServicios = explode(',', $_POST['servicios']);

        foreach($idServicios as $idServicio) {
            $idServicio = trim($idServicio); // ← limpiar espacios
            $args = [
                'citaId' => $id,
                'servicioId' => $idServicio
            ];
            $citaServicio = new CitaServicio($args);
            $citaServicio->guardar();
        }

        echo json_encode(['resultado' => (bool) $id]);
    }

    public static function eliminar() {
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'];
            $cita = Cita::find($id);
            $cita->eliminar();
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        }
    }
}
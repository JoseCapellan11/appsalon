<?php

namespace Controllers;

use Model\Barbero;
use MVC\Router;

class BarberoController {

    public static function index(Router $router) {
        isAdmin();

        $barberos = Barbero::all();

        $router->render('barberos/index', [
            'nombre' => $_SESSION['nombre'],
            'barberos' => $barberos
        ]);
    }

    public static function crear(Router $router) {
        isAdmin();

        $alertas = [];
        $barbero = new Barbero();

        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $barbero->sincronizar($_POST);
            $alertas = $barbero->validar();

            if(empty($alertas)) {
                $barbero->guardar();
                header('Location: /barberos');
                exit;
            }
        }

        $router->render('barberos/crear', [
            'nombre' => $_SESSION['nombre'],
            'alertas' => $alertas,
            'barbero' => $barbero
        ]);
    }

    public static function actualizar(Router $router) {
        isAdmin();

        $alertas = [];
        $id = $_GET['id'] ?? null;

        if(!$id) {
            header('Location: /barberos');
            exit;
        }

        $barbero = Barbero::find($id);

        if(!$barbero) {
            header('Location: /barberos');
            exit;
        }

        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $barbero->sincronizar($_POST);
            $alertas = $barbero->validar();

            if(empty($alertas)) {
                $barbero->guardar();
                header('Location: /barberos');
                exit;
            }
        }

        $router->render('barberos/actualizar', [
            'nombre' => $_SESSION['nombre'],
            'alertas' => $alertas,
            'barbero' => $barbero
        ]);
    }

    public static function eliminar(Router $router) {
        isAdmin();

        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'];
            $barbero = Barbero::find($id);
            $barbero->eliminar();
            header('Location: /barberos');
            exit;
        }
    }
}
<?php

namespace Controllers;

use Model\Barbero;
use MVC\Router;

class CitaController {

    public static function index(Router $router) { 

        isAuth();
        $barberos = Barbero::all();

        $router->render('cita/index', [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id'],
            'barberos' => $barberos
        ]);
    }
}
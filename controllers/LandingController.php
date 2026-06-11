<?php

namespace Controllers;

use Model\Barbero;
use Model\Servicio;
use MVC\Router;

class LandingController {
    public static function index(Router $router) {
        $barberos = Barbero::all();
        $servicios = Servicio::all();

        $router->render('landing/index', [
            'barberos' => $barberos,
            'servicios' => $servicios
        ], 'landing'); // ← usa layout landing
    }
}
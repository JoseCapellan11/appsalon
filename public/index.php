<?php 

require_once __DIR__ . '/../includes/app.php';

use Controllers\ServicioController;
use Controllers\AdminController;
use Controllers\APIController;
use Controllers\LoginController;
use Controllers\CitaController;
use Controllers\BarberoController;
use Controllers\LandingController; // ← agregar
use MVC\Router;

$router = new Router();

// Landing page pública
$router->get('/', [LandingController::class, 'index']); // ← nueva ruta

// Iniciar sesión - cambiar de / a /login
$router->get('/login', [LoginController::class, 'login']); // ← cambiar
$router->post('/login', [LoginController::class, 'login']); // ← cambiar
$router->get('/logout', [LoginController::class, 'logout']);

// Recuperar Password
$router->get('/olvide', [LoginController::class, 'olvide']);
$router->post('/olvide', [LoginController::class, 'olvide']);
$router->get('/recuperar', [LoginController::class, 'recuperar']);
$router->post('/recuperar', [LoginController::class, 'recuperar']);

// Crear una nueva cuenta
$router->get('/crear-cuenta', [LoginController::class, 'crear']);
$router->post('/crear-cuenta', [LoginController::class, 'crear']);

// Confirmar cuenta
$router->get('/confirmar-cuenta', [LoginController::class, 'confirmar']);
$router->get('/mensaje', [LoginController::class, 'mensaje']);

// Área privada
$router->get('/cita', [CitaController::class, 'index']);
$router->get('/admin', [AdminController::class, 'index']);

// API de servicios
$router->get('/api/servicios', [APIController::class, 'index']);
$router->post('/api/citas', [APIController::class, 'guardar']);
$router->post('/api/eliminar', [APIController::class, 'eliminar']);

// CRUD de servicios
$router->get('/servicios', [ServicioController::class, 'index']);
$router->get('/servicios/crear', [ServicioController::class, 'crear']);
$router->post('/servicios/crear', [ServicioController::class, 'crear']);
$router->get('/servicios/actualizar', [ServicioController::class, 'actualizar']);
$router->post('/servicios/actualizar', [ServicioController::class, 'actualizar']);
$router->post('/servicios/eliminar', [ServicioController::class, 'eliminar']);

// CRUD de barberos
$router->get('/barberos', [BarberoController::class, 'index']);
$router->get('/barberos/crear', [BarberoController::class, 'crear']);
$router->post('/barberos/crear', [BarberoController::class, 'crear']);
$router->get('/barberos/actualizar', [BarberoController::class, 'actualizar']);
$router->post('/barberos/actualizar', [BarberoController::class, 'actualizar']);
$router->post('/barberos/eliminar', [BarberoController::class, 'eliminar']);

$router->comprobarRutas();
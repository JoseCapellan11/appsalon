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

            // Subir imagen
            if(isset($_FILES['imagen']) && $_FILES['imagen']['error'] === 0) {
                $nombreImagen = md5(uniqid(rand(), true)) . '.jpg';
                $ruta = '../public/build/img/barberos/' . $nombreImagen;

                if(!is_dir('../public/build/img/barberos')) {
                    mkdir('../public/build/img/barberos', 0755, true);
                }

                move_uploaded_file($_FILES['imagen']['tmp_name'], $ruta);
                $barbero->imagen = $nombreImagen;
            }

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

            // Subir imagen
            if(isset($_FILES['imagen']) && $_FILES['imagen']['error'] === 0) {
                $nombreImagen = md5(uniqid(rand(), true)) . '.jpg';
                $ruta = '../public/build/img/barberos/' . $nombreImagen;

                if(!is_dir('../public/build/img/barberos')) {
                    mkdir('../public/build/img/barberos', 0755, true);
                }

                // Eliminar imagen anterior
                if($barbero->imagen) {
                    $imagenAnterior = '../public/build/img/barberos/' . $barbero->imagen;
                    if(file_exists($imagenAnterior)) {
                        unlink($imagenAnterior);
                    }
                }

                move_uploaded_file($_FILES['imagen']['tmp_name'], $ruta);
                $barbero->imagen = $nombreImagen;
            }

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

            // Eliminar imagen
            if($barbero->imagen) {
                $imagen = '../public/build/img/barberos/' . $barbero->imagen;
                if(file_exists($imagen)) {
                    unlink($imagen);
                }
            }

            $barbero->eliminar();
            header('Location: /barberos');
            exit;
        }
    }
}
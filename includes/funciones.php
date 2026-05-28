<?php

function debuguear($variable) : string {
    echo "<pre>";
    var_dump($variable);
    echo "</pre>";
    exit;
}

// Escapa / Sanitizar el HTML
function s($html) : string {
    $s = htmlspecialchars($html);
    return $s;
}

function esUltimo($actual, $proximo) : bool {
    return $actual !== $proximo;
}

// Funcion que revisa si el usuario esta autenticado

function isAuth() : void {
    if(!isset($_SESSION['login'])) {
        header('Location: /');
        exit;
    }
}

function isAdmin() : void {
    if(!isset($_SESSION['admin'])) {
        header('Location: /');
        exit;
    }
}

function calcularTotal(array $citas, $id) : float {
    $total = 0;
    foreach($citas as $cita) {
        if($cita->id === $id) {
            $total += $cita->precio;
        }
    }
    return $total;
}
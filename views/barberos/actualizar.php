<h1 class="nombre-pagina">Barberos</h1>
<p class="descripcion-pagina">Actualizar Barbero</p>

<?php include_once __DIR__ . '/../templates/barra.php'; ?>

<form class="formulario" method="POST" action="/barberos/actualizar?id=<?php echo $barbero->id; ?>">
    <?php include_once __DIR__ . '/formulario.php'; ?>

    <input type="submit" value="Actualizar Barbero" class="boton">
</form>
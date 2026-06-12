<h1 class="nombre-pagina">Barberos</h1>
<p class="descripcion-pagina">Agregar Nuevo Barbero</p>

<?php include_once __DIR__ . '/../templates/barra.php'; ?>

<form class="formulario" method="POST" action="/barberos/crear" enctype="multipart/form-data">
    <?php include_once __DIR__ . '/formulario.php'; ?>

    <input type="submit" value="Agregar Barbero" class="boton">
</form>
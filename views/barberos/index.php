<h1 class="nombre-pagina">Gestión de <span>Barberos</span></h1>
<p class="descripcion-pagina">Administra los barberos de la barbería</p>

<?php include_once __DIR__ . '/../templates/barra.php'; ?>

<div class="barra-servicios">
    <a href="/barberos/crear" class="boton">Nuevo Barbero</a>
</div>

<ul class="servicios">
    <?php foreach($barberos as $barbero) { ?>
        <li>
            <p>Nombre: <span><?php echo $barbero->nombre . ' ' . $barbero->apellido; ?></span></p>

            <div class="acciones">
                <a class="boton" href="/barberos/actualizar?id=<?php echo $barbero->id; ?>">Actualizar</a>
                <form action="/barberos/eliminar" method="POST">
                    <input type="hidden" name="id" value="<?php echo $barbero->id; ?>">
                    <input type="submit" value="Eliminar" class="boton-eliminar">
                </form>
            </div>
        </li>
    <?php } ?>
</ul>
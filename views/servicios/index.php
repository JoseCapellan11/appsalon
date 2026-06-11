<h1 class="nombre-pagina">Gestión de <span>Servicios</span></h1>
<p class="descripcion-pagina">Administra los servicios de la barbería</p>

<?php include_once __DIR__ . '/../templates/barra.php'; ?>

<div class="barra-servicios">
    <a href="/servicios/crear" class="boton">Nuevo Servicio</a>
</div>

<ul class="servicios">
    <?php foreach($servicios as $servicio) { ?>
        <li>
            <p>Nombre: <span><?php echo $servicio->nombre; ?></span></p>
            <p>Precio: <span>$<?php echo $servicio->precio; ?></span></p>

            <div class="acciones">
                <a class="boton" href="/servicios/actualizar?id=<?php echo $servicio->id; ?>">Actualizar</a>
                <form action="/servicios/eliminar" method="POST">
                    <input type="hidden" name="id" value="<?php echo $servicio->id; ?>">
                    <input type="submit" value="Eliminar" class="boton-eliminar">
                </form>
            </div>
        </li>
    <?php } ?>
</ul>
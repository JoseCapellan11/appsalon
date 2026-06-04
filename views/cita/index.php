<h1 class="nombre-pagina">Crear Nueva Cita</h1>
<p class="descripcion-pagina">ELige tus servicios y coloca tus datos</p>

<?php include_once __DIR__ . '/../templates/barra.php'; ?>

<div id="app">
    <nav class="tabs">
        <button class="actual" type="button" data-paso="1">Servicios</button>
        <button type="button" data-paso="2">Barbero</button>
        <button type="button" data-paso="3">Información Cita</button>
        <button type="button" data-paso="4">Resumen</button>
    </nav>

    <div id="paso-1" class="seccion">
        <h2>Servicios</h2>
        <p class="text-center">Elige tus servicios a continuación</p>
        <div id="servicios" class="listado-servicios"></div>
    </div>

    <div id="paso-2" class="seccion">
        <h2>Barbero</h2>
        <p class="text-center">Elige tu barbero a continuación</p>
        <div class="listado-barberos">
            <?php foreach($barberos as $barbero) { ?>
                <div class="barbero" data-id-barbero="<?php echo $barbero->id; ?>">
                    <p><?php echo $barbero->nombre . ' ' . $barbero->apellido; ?></p>
                </div>
            <?php } ?>
        </div>
    </div>

    <div id="paso-3" class="seccion">
        <h2>Tus Datos y Cita</h2>
        <p class="text-center">Coloca tus datos y fecha de tu cita</p>

        <form class="formulario">
            <div class="campo">
                <label for="nombre">Nombre</label>
                <input 
                    id="nombre"
                    type="text"
                    placeholder="Tu Nombre"
                    value="<?php echo $nombre; ?>"
                    disabled
                />
            </div>

            <div class="campo">
                <label for="fecha">Fecha</label>
                <input 
                    id="fecha"
                    type="date"
                    min="<?php echo date('Y-m-d', strtotime('+1 day')); ?>"
                />
            </div>

            <div class="campo">
                <label for="hora">Hora</label>
                <input 
                    id="hora"
                    type="time"
                />
            </div>
            <input type="hidden" id="id" value="<?php echo $id; ?>">
        </form>
    </div>

    <div id="paso-4" class="seccion">
        <h2>Resumen de Cita</h2>
        <p class="text-center">Verifica que la información sea correcta</p>
        <div class="contenido-resumen"></div>
    </div>

    <div class="paginacion">
        <button id="anterior" class="boton">&laquo; Anterior</button>
        <button id="siguiente" class="boton">Siguiente &raquo;</button>
    </div>
</div>

<?php 
    $script = "
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script src='build/js/app.js'></script>
    ";
?> 
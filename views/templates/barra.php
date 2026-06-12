<div class="barra">
    <p>Hola: <span><?php echo $nombre; ?></span></p>
    <div class="barra__acciones">
        <button id="btn-tema" class="btn-tema" title="Cambiar tema">☀️</button>
        <a class="boton" href="/logout">Cerrar Sesión</a>
    </div>
</div>

<?php if(isset($_SESSION['admin'])) { ?>
    <div class="barra-servicios">
        <a class="boton" href="/admin">Ver Citas</a>
        <a class="boton" href="/servicios">Ver Servicios</a>
        <a class="boton" href="/barberos">Ver Barberos</a>
    </div>    
<?php } ?>
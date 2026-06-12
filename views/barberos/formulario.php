<?php include_once __DIR__ . '/../templates/alertas.php'; ?>

<div class="campo">
    <label for="nombre">Nombre</label>
    <input 
        type="text"
        id="nombre"
        placeholder="Tu Nombre"
        name="nombre"
        value="<?php echo $barbero->nombre; ?>"
    />
</div>

<div class="campo">
    <label for="apellido">Apellido</label>
    <input 
        type="text"
        id="apellido"
        placeholder="Tu Apellido"
        name="apellido"
        value="<?php echo $barbero->apellido; ?>"
    />
</div>

<div class="campo">
    <label for="imagen">Foto</label>
    <input 
        type="file"
        id="imagen"
        name="imagen"
        accept="image/*"
    />
</div>

<?php if($barbero->imagen) { ?>
    <div class="imagen-actual">
        <img src="/build/img/barberos/<?php echo $barbero->imagen; ?>" alt="Foto del barbero">
    </div>
<?php } ?>
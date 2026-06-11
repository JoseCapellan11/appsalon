<h1 class="nombre-pagina">Iniciar <span>Sesión</span></h1>
<p class="descripcion-pagina">Ingresa tus credenciales para continuar</p>

<?php include_once __DIR__ . '/../templates/alertas.php'; ?>

<form class="formulario" method="POST" action="/login">
    <div class="campo">
        <label for="email">Email</label>
        <input 
            type="email"
            id="email"
            placeholder="Tu Email"
            name="email"
        />
    </div>

    <div class="campo">
        <label for="password">Password</label>
        <input 
            type="password"
            id="password"
            placeholder="Tu Password"
            name="password"
        />
    </div>

    <input type="submit" value="Iniciar Sesión" class="boton">
</form>

<div class="acciones-auth">
    <a href="/crear-cuenta">¿Aún no tienes una cuenta? Regístrate</a>
    <a href="/olvide">¿Olvidaste tu password?</a>
</div>
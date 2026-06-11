<!-- NAVBAR -->
<header class="navbar">
    <div class="navbar__contenedor">
        <a href="/" class="navbar__logo">Barber<span>Shop</span></a>
        <nav class="navbar__nav">
            <a href="#servicios">Servicios</a>
            <a href="#barberos">Barberos</a>
            <a href="#nosotros">Nosotros</a>
            <a href="#contacto">Contacto</a>
            <a href="/login" class="navbar__cta">Mi Cuenta</a>
        </nav>
    </div>
</header>

<!-- HERO -->
<section class="hero">
    <div class="hero__contenido">
        <h1>La Mejor <span>Barbería</span> de la Ciudad</h1>
        <p>Experiencia, estilo y precisión en cada corte. Reserva tu cita hoy.</p>
        <a href="/login" class="boton">Reservar Cita</a>
    </div>
</section>

<!-- SERVICIOS -->
<section class="landing-seccion" id="servicios">
    <div class="landing-contenedor">
        <h2 class="landing-titulo">Nuestros <span>Servicios</span></h2>
        <p class="landing-subtitulo">Ofrecemos los mejores servicios de barbería</p>

        <div class="landing-grid">
            <?php foreach($servicios as $servicio) { ?>
                <div class="landing-card">
                    <h3><?php echo $servicio->nombre; ?></h3>
                    <p class="landing-card__precio">$<?php echo $servicio->precio; ?></p>
                    <a href="/login" class="boton">Reservar</a>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

<!-- BARBEROS -->
<section class="landing-seccion landing-seccion--oscura" id="barberos">
    <div class="landing-contenedor">
        <h2 class="landing-titulo">Nuestros <span>Barberos</span></h2>
        <p class="landing-subtitulo">Profesionales con años de experiencia</p>

        <div class="landing-grid">
            <?php foreach($barberos as $barbero) { ?>
                <div class="landing-card landing-card--barbero">
                    <div class="landing-card__avatar">
                        <?php echo strtoupper(substr($barbero->nombre, 0, 1)); ?>
                    </div>
                    <h3><?php echo $barbero->nombre . ' ' . $barbero->apellido; ?></h3>
                    <p>Barbero Profesional</p>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

<!-- NOSOTROS -->
<section class="landing-seccion" id="nosotros">
    <div class="landing-contenedor landing-nosotros">
        <div class="landing-nosotros__texto">
            <h2 class="landing-titulo">Sobre <span>Nosotros</span></h2>
            <p>Somos una barbería con tradición y modernidad. Combinamos técnicas clásicas con tendencias actuales para ofrecerte el mejor servicio.</p>
            <p>Nuestro equipo de barberos profesionales está comprometido con tu satisfacción en cada visita.</p>
            <a href="/login" class="boton">Reservar Cita</a>
        </div>
        <div class="landing-nosotros__imagen"></div>
    </div>
</section>

<!-- CONTACTO -->
<section class="landing-seccion landing-seccion--oscura" id="contacto">
    <div class="landing-contenedor">
        <h2 class="landing-titulo">Cont<span>áctanos</span></h2>
        <p class="landing-subtitulo">Estamos aquí para atenderte</p>

        <div class="landing-contacto">
            <div class="landing-contacto__item">
                <h3>📍 Dirección</h3>
                <p>Calle Principal #123, Santo Domingo</p>
            </div>
            <div class="landing-contacto__item">
                <h3>📞 Teléfono</h3>
                <p>+1 (809) 000-0000</p>
            </div>
            <div class="landing-contacto__item">
                <h3>🕐 Horario</h3>
                <p>Lunes a Viernes: 9am - 7pm</p>
                <p>Sábados: 9am - 5pm</p>
            </div>
        </div>
    </div>
</section>

<!-- FOOTER -->
<footer class="footer">
    <div class="landing-contenedor">
        <p>© <?php echo date('Y'); ?> BarberShop. Todos los derechos reservados.</p>
        <a href="/login" class="footer__link">Iniciar Sesión</a>
    </div>
</footer>
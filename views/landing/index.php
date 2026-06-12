<!-- NAVBAR -->
<header class="navbar">
    <div class="navbar__contenedor">
        <a href="/" class="navbar__logo">Barber<span>Shop</span></a>
        <nav class="navbar__nav">
            <a href="#servicios">Servicios</a>
            <a href="#barberos">Barberos</a>
            <a href="#contacto">Contacto</a>
            <button id="btn-tema" class="btn-tema" title="Cambiar tema">☀️</button>
            <a href="/login" class="navbar__cta">Mi Cuenta</a>
        </nav>
    </div>
</header>

<!-- HERO -->
<section class="hero">
    <div class="hero__overlay"></div>
    <div class="hero__contenido">
        <p class="hero__subtitulo">Bienvenido a</p>
        <h1>Barber<span>Shop</span></h1>
        <p class="hero__descripcion">La mejor barbería de la ciudad. Maestros en cortes, fades modernos y estilo profesional. Reserva tu cita ahora.</p>
        <div class="hero__botones">
            <a href="/login" class="boton">Reservar Cita</a>
            <a href="#servicios" class="boton boton--outline">Ver Servicios</a>
        </div>
    </div>
    <div class="hero__scroll">
        <span>Scroll</span>
        <div class="hero__scroll-line"></div>
    </div>
</section>

<!-- SERVICIOS -->
<section class="landing-seccion" id="servicios">
    <div class="landing-contenedor">
        <p class="landing-etiqueta">Lo que ofrecemos</p>
        <h2 class="landing-titulo">Nuestros <span>Servicios</span></h2>
        <p class="landing-subtitulo">Ofrecemos los mejores servicios de barbería</p>

        <div class="servicios-filtros">
            <button class="filtro activo" data-filtro="todos">Todos</button>
            <button class="filtro" data-filtro="corte">Cortes</button>
            <button class="filtro" data-filtro="peinado">Peinados</button>
            <button class="filtro" data-filtro="otros">Otros</button>
        </div>

        <div class="landing-grid" id="servicios-grid">
            <?php foreach($servicios as $servicio) { 
                // Categorizar servicios automáticamente
                $nombre = strtolower($servicio->nombre);
                if(strpos($nombre, 'corte') !== false) {
                    $categoria = 'corte';
                } elseif(strpos($nombre, 'peinado') !== false) {
                    $categoria = 'peinado';
                } else {
                    $categoria = 'otros';
                }
            ?>
                <div class="landing-card" data-categoria="<?php echo $categoria; ?>">
                    <div class="landing-card__icono">✂️</div>
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
        <p class="landing-etiqueta">Conoce al equipo</p>
        <h2 class="landing-titulo">Nuestros <span>Barberos</span></h2>
        <p class="landing-subtitulo">Profesionales con años de experiencia</p>

        <div class="landing-grid">
            <?php foreach($barberos as $barbero) { ?>
                <div class="landing-card landing-card--barbero">
                    <?php if($barbero->imagen) { ?>
                        <div class="landing-card__foto">
                            <img src="/build/img/barberos/<?php echo $barbero->imagen; ?>" alt="<?php echo $barbero->nombre; ?>">
                        </div>
                    <?php } else { ?>
                        <div class="landing-card__avatar">
                            <?php echo strtoupper(substr($barbero->nombre, 0, 1)); ?>
                        </div>
                    <?php } ?>
                    <h3><?php echo $barbero->nombre . ' ' . $barbero->apellido; ?></h3>
                    <p>Barbero Profesional</p>
                    <a href="/login" class="boton">Reservar</a>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

<!-- COMO RESERVAR -->
<section class="landing-seccion" id="reservar">
    <div class="landing-contenedor">
        <p class="landing-etiqueta">Proceso simple</p>
        <h2 class="landing-titulo">¿Cómo <span>Reservar?</span></h2>
        <p class="landing-subtitulo">Reserva tu cita en pocos pasos</p>

        <div class="pasos">
            <div class="paso">
                <div class="paso__numero">01</div>
                <div class="paso__contenido">
                    <h3>Elige tu Servicio</h3>
                    <p>Selecciona entre nuestra variedad de servicios profesionales de barbería.</p>
                </div>
            </div>

            <div class="paso__linea"></div>

            <div class="paso">
                <div class="paso__numero">02</div>
                <div class="paso__contenido">
                    <h3>Elige tu Barbero</h3>
                    <p>Selecciona tu barbero de preferencia o déjanos elegir por ti.</p>
                </div>
            </div>

            <div class="paso__linea"></div>

            <div class="paso">
                <div class="paso__numero">03</div>
                <div class="paso__contenido">
                    <h3>Elige Fecha y Hora</h3>
                    <p>Selecciona el día y la hora que más te convenga.</p>
                </div>
            </div>

            <div class="paso__linea"></div>

            <div class="paso">
                <div class="paso__numero">04</div>
                <div class="paso__contenido">
                    <h3>Confirma tu Cita</h3>
                    <p>Revisa los detalles y recibe confirmación por email al instante.</p>
                </div>
            </div>
        </div>

        <div class="reservar-cta">
            <a href="/login" class="boton">Reservar Ahora</a>
        </div>
    </div>
</section>

<!-- UBICACION -->
<section class="landing-seccion landing-seccion--oscura" id="contacto">
    <div class="landing-contenedor">
        <p class="landing-etiqueta">Encuéntranos</p>
        <h2 class="landing-titulo">Visítanos <span>Hoy</span></h2>
        <p class="landing-subtitulo">Estamos aquí para atenderte</p>

        <div class="ubicacion">
            <div class="ubicacion__mapa">
                <div class="mapa-placeholder">
                    <p>📍</p>
                    <p>Dirección por confirmar</p>
                    <p>Santo Domingo, República Dominicana</p>
                </div>
            </div>

            <div class="ubicacion__info">
                <div class="ubicacion__item">
                    <div class="ubicacion__icono">📍</div>
                    <div>
                        <h3>Dirección</h3>
                        <p>Calle Principal #123, Santo Domingo</p>
                    </div>
                </div>

                <div class="ubicacion__item">
                    <div class="ubicacion__icono">📞</div>
                    <div>
                        <h3>Teléfono</h3>
                        <p><a href="tel:+18090000000">+1 (809) 000-0000</a></p>
                        <p><a href="https://wa.me/18090000000" target="_blank">WhatsApp</a></p>
                    </div>
                </div>

                <div class="ubicacion__item">
                    <div class="ubicacion__icono">🕐</div>
                    <div>
                        <h3>Horario</h3>
                        <div class="ubicacion__horario">
                            <div class="horario__fila">
                                <span>Lunes - Viernes</span>
                                <span>9:00 AM - 7:00 PM</span>
                            </div>
                            <div class="horario__fila">
                                <span>Sábados</span>
                                <span>9:00 AM - 5:00 PM</span>
                            </div>
                            <div class="horario__fila horario__fila--cerrado">
                                <span>Domingos</span>
                                <span>Cerrado</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="ubicacion__item">
                    <div class="ubicacion__icono">📱</div>
                    <div>
                        <h3>Síguenos</h3>
                        <div class="redes-sociales">
                            <a href="#" target="_blank" class="red-social">Instagram</a>
                            <a href="#" target="_blank" class="red-social">Facebook</a>
                            <a href="#" target="_blank" class="red-social">TikTok</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FOOTER -->
<footer class="footer">
    <div class="landing-contenedor">
        <div class="footer__grid">
            <div class="footer__columna">
                <a href="/" class="navbar__logo">Barber<span>Shop</span></a>
                <p class="footer__descripcion">La mejor barbería de la ciudad. Maestros en cortes, fades modernos y estilo profesional.</p>
                <div class="redes-sociales">
                    <a href="#" target="_blank" class="red-social">Instagram</a>
                    <a href="#" target="_blank" class="red-social">Facebook</a>
                    <a href="#" target="_blank" class="red-social">TikTok</a>
                </div>
            </div>

            <div class="footer__columna">
                <h4 class="footer__titulo">Enlaces</h4>
                <ul class="footer__lista">
                    <li><a href="#servicios">Servicios</a></li>
                    <li><a href="#barberos">Barberos</a></li>
                    <li><a href="#nosotros">Nosotros</a></li>
                    <li><a href="#contacto">Contacto</a></li>
                </ul>
            </div>

            <div class="footer__columna">
                <h4 class="footer__titulo">Horario</h4>
                <div class="ubicacion__horario">
                    <div class="horario__fila">
                        <span>Lunes - Viernes</span>
                        <span>9:00 AM - 7:00 PM</span>
                    </div>
                    <div class="horario__fila">
                        <span>Sábados</span>
                        <span>9:00 AM - 5:00 PM</span>
                    </div>
                    <div class="horario__fila horario__fila--cerrado">
                        <span>Domingos</span>
                        <span>Cerrado</span>
                    </div>
                </div>
            </div>

            <div class="footer__columna">
                <h4 class="footer__titulo">Contacto</h4>
                <ul class="footer__lista">
                    <li>📍 Santo Domingo, RD</li>
                    <li>📞 <a href="tel:+18090000000">+1 (809) 000-0000</a></li>
                    <li>💬 <a href="https://wa.me/18090000000" target="_blank">WhatsApp</a></li>
                    <li>✉️ <a href="mailto:info@barbershop.com">info@barbershop.com</a></li>
                </ul>
            </div>
        </div>

        <div class="footer__bottom">
            <p>© <?php echo date('Y'); ?> BarberShop. Todos los derechos reservados.</p>
            <a href="/login" class="footer__link">Iniciar Sesión</a>
        </div>
    </div>
</footer>

<?php
    $script = "<script src='/build/js/landing.js'></script>";
?>

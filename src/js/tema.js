document.addEventListener('DOMContentLoaded', function() {
    const btnTema = document.querySelector('#btn-tema');
    const html = document.documentElement;

    // Verificar preferencia guardada
    const temaGuardado = localStorage.getItem('tema');
    
    if(temaGuardado) {
        html.setAttribute('data-tema', temaGuardado);
        actualizarIcono(temaGuardado);
    } else {
        // Detectar preferencia del sistema
        const prefiereClaroOS = window.matchMedia('(prefers-color-scheme: light)').matches;
        const temaInicial = prefiereClaroOS ? 'claro' : 'oscuro';
        html.setAttribute('data-tema', temaInicial);
        actualizarIcono(temaInicial);
    }

    if(btnTema) {
        btnTema.addEventListener('click', function() {
            const temaActual = html.getAttribute('data-tema');
            const nuevoTema = temaActual === 'oscuro' ? 'claro' : 'oscuro';
            
            html.setAttribute('data-tema', nuevoTema);
            localStorage.setItem('tema', nuevoTema);
            actualizarIcono(nuevoTema);
        });
    }
});

function actualizarIcono(tema) {
    const btnTema = document.querySelector('#btn-tema');
    if(btnTema) {
        btnTema.textContent = tema === 'oscuro' ? '☀️' : '🌙';
        btnTema.title = tema === 'oscuro' ? 'Cambiar a modo claro' : 'Cambiar a modo oscuro';
    }
}
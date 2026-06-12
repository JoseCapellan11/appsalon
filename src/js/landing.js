document.addEventListener('DOMContentLoaded', function() {
    filtrarServicios();
});

function filtrarServicios() {
    const filtros = document.querySelectorAll('.filtro');
    const cards = document.querySelectorAll('.landing-card');

    if(!filtros.length) return;

    filtros.forEach(filtro => {
        filtro.addEventListener('click', function() {
            // Quitar activo de todos
            filtros.forEach(f => f.classList.remove('activo'));
            // Agregar activo al clickeado
            this.classList.add('activo');

            const categoria = this.dataset.filtro;

            cards.forEach(card => {
                if(categoria === 'todos') {
                    card.style.display = 'block';
                } else if(card.dataset.categoria === categoria) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    });
}
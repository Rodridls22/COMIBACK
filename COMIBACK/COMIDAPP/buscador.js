
document.getElementById('buscar').addEventListener('input', function() {
    const query = this.value.trim();
    const resultados = document.getElementById('resultados');

    if (query.length > 2) { // Solo busca si hay más de 2 caracteres
        fetch(`/controlador/buscar.php?q=${encodeURIComponent(query)}`)
            .then(response => response.json())
            .then(data => {
                resultados.innerHTML = ''; // Limpia resultados anteriores

                if (data.length > 0) {
                    data.forEach(item => {
                        const li = document.createElement('li');
                        li.textContent = `${item.Nombre} - ${item.Direccion}`;
                        li.className = 'list-group-item';
                        resultados.appendChild(li);
                    });
                } else {
                    resultados.innerHTML = '<li class="list-group-item">Sin resultados</li>';
                }
            })
            .catch(error => {
                console.error('Error en la búsqueda:', error);
                resultados.innerHTML = '<li class="list-group-item">Error en la búsqueda</li>';
            });
    } else {
        resultados.innerHTML = ''; // Limpia si el input es corto
    }
});

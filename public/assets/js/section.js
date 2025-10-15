document.getElementById('seccionesForm').addEventListener('submit', function(e) {
    e.preventDefault();

    const data = {
        _token: document.querySelector('input[name="_token"]').value,
        section_matricula: document.getElementById('matricula').checked ? 1 : 0,
        section_semana_u: document.getElementById('semana_u').checked ? 1 : 0,
    };

    fetch("{{ route('secciones.update') }}", {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
            "Accept": "application/json",
            "X-CSRF-TOKEN": data._token,
        },
        body: JSON.stringify(data)
    })
    .then(res => res.json())
    .then(response => {
        const alertBox = document.getElementById('alerta');
        alertBox.style.display = 'block';
        alertBox.className = 'alert alert-success show';
        alertBox.textContent = response.message;



        setTimeout(() => {
            alertBox.classList.remove('show');
            alertBox.style.display = 'none';
        }, 2500);
    })
    .catch(err => {
        const alertBox = document.getElementById('alerta');
        alertBox.style.display = 'block';
        alertBox.className = 'alert alert-danger show';
        alertBox.textContent = 'Error al actualizar las secciones.';
        console.error(err);
    });
});

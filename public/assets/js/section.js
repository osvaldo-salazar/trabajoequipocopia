document.querySelectorAll('.toggle-section').forEach(toggle => {
    toggle.addEventListener('change', function() {
        const section = this.dataset.section;
        const estado = this.checked ? 1 : 0;

        fetch(sectionUrl, {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': csrfToken,
            'Accept': 'application/json',
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({ section, estado })
        })
        .then(res => res.json())
        .then(data => {
            if (data.success) {
                document.getElementById('successMsg').textContent = data.message;
                new bootstrap.Toast(document.getElementById('successToast')).show();
            } else {
                new bootstrap.Toast(document.getElementById('errorToast')).show();
            }
        })
        .catch(() => new bootstrap.Toast(document.getElementById('errorToast')).show());
    });
});

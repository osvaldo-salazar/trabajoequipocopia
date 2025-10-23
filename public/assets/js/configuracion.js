function previewImage(input, key) {
    const file = input.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = e => document.getElementById(`preview_${key}`).src = e.target.result;
        reader.readAsDataURL(file);
    }
}

document.getElementById('configForm').addEventListener('submit', function(e) {
    e.preventDefault();
    let formData = new FormData(this);

    fetch(updateUrl, {
    method: 'POST',
    body: formData,
    headers: {
        'X-CSRF-TOKEN': csrfToken
    }
    })
    .then(res => res.json())
    .then(data => {
        if (data.success) {
            new bootstrap.Toast(document.getElementById('successToast')).show();
        } else {
            new bootstrap.Toast(document.getElementById('errorToast')).show();
        }
    })
    .catch(() => new bootstrap.Toast(document.getElementById('errorToast')).show());
});

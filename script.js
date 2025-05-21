document.getElementById('contact-form').addEventListener('submit', function(e) {
    e.preventDefault();
    const form = this;
    const formData = new FormData(form);
    const formMessage = document.querySelector('.form-message');

    fetch('sendmail.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(text => {
        formMessage.textContent = text;
        form.reset();
    })
    .catch(() => {
        formMessage.textContent = 'Error al enviar el mensaje.';
    });
});
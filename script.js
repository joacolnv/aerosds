// Simple form handler for demo purposes
const form = document.getElementById('contact-form');
const message = document.querySelector('.form-message');

if(form) {
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        message.textContent = "Thank you for your message! We'll get back to you soon.";
        form.reset();
    });
}
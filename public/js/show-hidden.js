document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.toggle-button').forEach(button => {
        button.addEventListener('click', function() {
            const targetId = this.getAttribute('data-target');
            const content = document.getElementById(targetId);
            content.classList.toggle('hidden');
            this.querySelectorAll('.icon').forEach(icon => {
                icon.classList.toggle('hidden');
            });
        });
    });
});
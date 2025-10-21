// JavaScript untuk interaksi tambahan
document.addEventListener('DOMContentLoaded', function() {
    console.log('Daily Journal JS Loaded!');
    
    // Auto-hide alerts setelah 5 detik
    const alerts = document.querySelectorAll('.alert');
    alerts.forEach(alert => {
        setTimeout(() => {
            const bsAlert = new bootstrap.Alert(alert);
            bsAlert.close();
        }, 5000);
    });

    // Konfirmasi sebelum menghapus
    const deleteButtons = document.querySelectorAll('a.btn-danger');
    deleteButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            if (!confirm('Yakin ingin menghapus journal ini?')) {
                e.preventDefault();
            }
        });
    });

    // Character counter untuk textarea
    const textareas = document.querySelectorAll('textarea');
    textareas.forEach(textarea => {
        const counter = document.createElement('div');
        counter.className = 'form-text text-end mt-2';
        counter.innerHTML = '<small><span class="char-count">0</span> karakter</small>';
        textarea.parentNode.appendChild(counter);
        
        function updateCounter() {
            const count = textarea.value.length;
            counter.querySelector('.char-count').textContent = count;
            
            if (count > 1000) {
                counter.classList.add('text-warning');
                counter.classList.remove('text-success');
            } else {
                counter.classList.remove('text-warning');
                counter.classList.add('text-success');
            }
        }
        
        textarea.addEventListener('input', updateCounter);
        updateCounter();
    });

    // Animasi untuk cards
    const cards = document.querySelectorAll('.journal-card, .feature-card');
    cards.forEach((card, index) => {
        card.style.opacity = '0';
        card.style.transform = 'translateY(20px)';
        
        setTimeout(() => {
            card.style.transition = 'all 0.5s ease';
            card.style.opacity = '1';
            card.style.transform = 'translateY(0)';
        }, index * 100);
    });

    // Smooth scroll untuk navigasi
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });
});
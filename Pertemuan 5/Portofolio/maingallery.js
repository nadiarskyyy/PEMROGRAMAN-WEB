// Inisialisasi AOS untuk animasi grid
AOS.init({ duration: 1000, once: true });

// Hover scale + rotate effect untuk semua foto
document.querySelectorAll('.abstract-frame img').forEach(img => {
  img.addEventListener('mouseenter', () => {
    img.style.transform = 'scale(1.1) rotate(2deg)';
    img.style.transition = 'transform 0.5s ease';
  });
  img.addEventListener('mouseleave', () => {
    img.style.transform = 'scale(1) rotate(0deg)';
  });
});

// Optional: klik gambar untuk lightbox sederhana
document.querySelectorAll('.abstract-frame img').forEach(img => {
  img.addEventListener('click', () => {
    const overlay = document.createElement('div');
    overlay.style.position = 'fixed';
    overlay.style.top = '0';
    overlay.style.left = '0';
    overlay.style.width = '100%';
    overlay.style.height = '100%';
    overlay.style.background = 'rgba(0,0,0,0.8)';
    overlay.style.display = 'flex';
    overlay.style.alignItems = 'center';
    overlay.style.justifyContent = 'center';
    overlay.style.zIndex = '9999';
    
    const imgClone = img.cloneNode();
    imgClone.style.maxWidth = '90%';
    imgClone.style.maxHeight = '90%';
    overlay.appendChild(imgClone);
    
    overlay.addEventListener('click', () => overlay.remove());
    document.body.appendChild(overlay);
  });
});

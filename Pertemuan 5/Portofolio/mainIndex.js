// Inisialisasi AOS untuk animasi section
AOS.init({ duration: 800, once: true });

// Smooth scroll untuk anchor link
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', function(e){
    e.preventDefault();
    const target = document.querySelector(this.getAttribute('href'));
    if(target){
      target.scrollIntoView({ behavior: 'smooth', block: 'start' });
    }
  });
});

// Perubahan background dan shadow navbar saat scroll
const navbar = document.getElementById('navbar');
const body = document.body;

if(navbar){
  window.addEventListener('scroll', () => {
    const scroll = window.scrollY;
    if(scroll < 300){
      body.style.background = "linear-gradient(to bottom, #ffffff, #e0e7ff, #ffe4e6)";
    } else if(scroll < 800){
      body.style.background = "linear-gradient(to bottom, #f0f9ff, #ffebf0, #dbeafe)";
    } else{
      body.style.background = "linear-gradient(to bottom, #e0f7fa, #ffe0f0, #dbeafe)";
    }
    navbar.classList.toggle('shadow-2xl', scroll > 20);
  });
});

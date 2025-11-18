<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title', 'Kedai RR')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;800&display=swap" rel="stylesheet">
    <style>
        body { 
            font-family: 'Poppins', sans-serif !important; 
        }
        .fade-in { 
            opacity: 0; 
            transform: translateY(20px); 
            transition: all 1.2s ease; 
        }
        .fade-in.show { 
            opacity: 1; 
            transform: translateY(0); 
        }
        .pulse-btn { 
            animation: pulse 2s infinite; 
        }
        @keyframes pulse {
            0% { box-shadow: 0 0 0 0 rgba(34,197,94,0.6); }
            70% { box-shadow: 0 0 0 25px rgba(34,197,94,0); }
            100% { box-shadow: 0 0 0 0 rgba(34,197,94,0); }
        }
        .bg-gradient-overlay {
            background: linear-gradient(to bottom, rgba(0,0,0,0.6), rgba(0,0,0,0.7));
        }
        .floating { 
            animation: floating 3s ease-in-out infinite; 
        }
        @keyframes floating {
            0% { transform: translate(0, 0px); }
            50% { transform: translate(0, -15px); }
            100% { transform: translate(0, 0px); }
        }
        .text-shadow { 
            text-shadow: 2px 2px 8px rgba(0,0,0,0.6); 
        }
        .logo-glow { 
            text-shadow: 0 0 10px rgba(34,197,94,0.7), 0 0 20px rgba(34,197,94,0.5); 
        }
        .shine { 
            animation: shine 3s ease-in-out infinite alternate; 
        }
        @keyframes shine {
            from { opacity: 0.5; }
            to { opacity: 1; }
        }
    </style>
    @stack('styles')
</head>
<body class="antialiased">
    @include('layouts.partials.header')
    
    <main>
        @yield('content')
    </main>

    @include('layouts.partials.footer')

    <script>
        // Tahun di footer
        document.addEventListener('DOMContentLoaded', function() {
            const yearElement = document.getElementById("year");
            if (yearElement) {
                yearElement.textContent = new Date().getFullYear();
            }

            // Mobile nav toggle
            const mobileBtn = document.getElementById("mobileBtn");
            const mobileNav = document.getElementById("mobileNav");
            if(mobileBtn && mobileNav) {
                mobileBtn.addEventListener("click", () => {
                    mobileNav.classList.toggle("hidden");
                });
            }

            // Homepage animation
            const fadeElements = document.querySelectorAll('.fade-in');
            if(fadeElements.length > 0) {
                window.addEventListener('load', () => {
                    setTimeout(() => {
                        fadeElements.forEach(el => {
                            el.classList.add('show');
                        });
                    }, 400);
                });
            }
        });
    </script>
    
    @stack('scripts')
</body>
</html>
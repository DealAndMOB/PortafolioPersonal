<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Portafolio Personal</title>
    <link type="text/css" rel="stylesheet" href="{{asset('css/index.css')}}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body>
    <nav>
        <div class="nav-container">
            <a href="#" class="nav-logo">Logo</a>
            <div class="nav-toggle" id="navToggle">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <ul class="nav-menu" id="navMenu">
                <li><a href="#inicio">Inicio</a></li>
                <li><a href="#proyectos">Proyectos</a></li>
                <li><a href="#habilidades">Habilidades</a></li>
                <li><a href="#contacto">Contacto</a></li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <section id="inicio" class="hero">
            <div class="hero-content">
                <h1>Dilan Raul Martinez Hernandez</h1>
                <div class="subtitle">Desarrollador Web &amp; UI/UX Designer</div>
                <p>Soy un desarrollador web apasionado por crear experiencias digitales únicas. Con experiencia en Laravel y diseño UI/UX, me especializo en construir aplicaciones web robustas y atractivas que no solo funcionan bien, sino que también se ven increíbles.</p>
                <a href="#" class="btn-download">Descargar CV <i class="fas fa-download"></i></a>
                <div class="social-icons">
                    <a href="#"><i class="fab fa-github"></i></a>
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
                <div class="skills">
                    <span class="skill-tag">HTML5</span>
                    <span class="skill-tag">CSS3</span>
                    <span class="skill-tag">JavaScript</span>
                    <span class="skill-tag">Laravel</span>
                    <span class="skill-tag">UI/UX Design</span>
                </div>
            </div>
            <div class="hero-image">
                <img src="{{ asset('images/foto-perfil.jpeg') }}" alt="Tu foto de perfil" class="profile-pic">
            </div>
        </section>
    </div>
</body>
</html>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const navToggle = document.getElementById('navToggle');
        const navMenu = document.getElementById('navMenu');

        navToggle.addEventListener('click', function() {
            navMenu.classList.toggle('active');
        });

        // Cerrar el menú al hacer clic en un enlace
        document.querySelectorAll('.nav-menu a').forEach(link => {
            link.addEventListener('click', () => {
                navMenu.classList.remove('active');
            });
        });
    });
</script>
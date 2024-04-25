<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Villa Las Acacias</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Estilos personalizados -->
    <style>
        /* Estilos para el encabezado */
        header {
            background-color: #343a40;
            color: #fff;
            padding: 20px 0;
            margin-bottom: 20px;
        }

        /* Estilos para la barra de navegación */
        .navbar-toggler {
            border-color: #fff;
        }

        .navbar-toggler-icon {
            background-color: #fff;
        }

        .navbar-nav .nav-link {
            color: #fff;
        }

        /* Estilos para la imagen de fondo */
        .bg-image {
        height: 800px; /* Altura ajustable según tu preferencia */
        width: 100%;
        background-size: cover;
        background-position: center;
        position: relative;
        color: #ffffff; /* Color del texto */
        text-align: center;
        display: flex;
        align-items: flex-start; /* Alineación en la parte superior */
        justify-content: center;
        text-shadow: 2px 2px 4px rgba(13, 241, 62, 0.5); /* Sombra de texto */
        }

    .bg-image h2 {
        font-size: 2rem; /* Tamaño de la fuente del título */
        margin-bottom: 2.5rem; /* Espaciado inferior del título */
    }

    .bg-image p {
        font-size: 1.5rem; /* Tamaño de la fuente del párrafo */
        margin-bottom: 2rem; /* Espaciado inferior del párrafo */
    }
       
    </style>
</head>
<body class="font-sans antialiased">
    <header>
        <div class="container mb-4">
            <div class="row align-items-center">
                <div class="col-lg-8 col-md-6 col-sm-12">
                    <h1 class="display-5 text-uppercase">RESIDENCIAL VILLA LAS ACACIAS</h1>
                </div>
                <nav class="col-lg-4 col-md-6 col-sm-12 d-flex justify-content-end align-items-center">
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/dashboard') }}" class="btn btn-outline-light me-2">Panel de control</a>
                        @else
                            <a href="{{ route('login') }}" class="btn btn-outline-light me-2">Iniciar sesión</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="btn btn-outline-light me-4">Registrar</a>
                            @endif
                        @endauth
                    @endif
                </nav>
            </div>
        </div>
    </header>
    
    <div class="bg-image" id="background-carousel" style="background-image: url('{{ asset('images/img1.jpg') }}');">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 text-center">
                    <h2 class="mb-2">¡Bienvenido a nuestro sitio web!</h2>
                    <p class="lead">Descubre el confort y la tranquilidad en Residencial Villa Las Acacias. ¡Tu hogar te espera!</p>
              
                </div>
            </div>
        </div>
    </div>
    
    
    <footer class="bg-dark text-white py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-4 order-lg-3">
                    <h5>Contacto</h5>
                    <address>
                        <strong>Residencial Villa Las Acacias</strong><br>
                        Dirección: Residencial el Sauce, Villa Las Acacias<br>
                        Ciudad: Tegucigalpa M.D.C<br>
                        Teléfono: (123) 456-7890<br>
                        Correo electrónico Junta Directiva: jdvillalasacacias@gmail.com<br>
                        Correo electrónico Administracion: admonlasacacias@gmail.com<br>
                    </address>
                </div>
                <div class="col-lg-3 mb-4 order-lg-2">
                    <h5>Visión</h5>
                    <p class="text-justify">Ser reconocidos como una comunidad ejemplar, donde la convivencia pacífica, el respeto mutuo y la 
                        responsabilidad compartida son fundamentales. Aspiramos a ser un modelo de gestión eficiente y 
                        participación ciudadana, brindando un ambiente acogedor y sostenible que perdure para las 
                        generaciones futuras.</p>
                </div>
                <div class="col-lg-3 mb-4 order-lg-1">
                    <h5>Misión</h5>
                    <p class="text-justify">Fomentar un entorno residencial seguro, armonioso y sostenible, promoviendo la participación de la 
                        Asamblea de Residentes, la Junta Directiva y el Administrador. Buscamos mejorar la calidad de vida de 
                        nuestros residentes, preservar nuestro entorno y fortalecer la comunidad a través de la colaboración y 
                        el compromiso</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <p>&copy; 2024 Residencial Villa Las Acacias. Todos los derechos reservados.</p>
                </div>
            </div>
        </div>
    </footer>
    
    
    

    

    <!-- Bootstrap JS (opcional, si necesitas funcionalidades como dropdowns, modals, etc.) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const backgrounds = [
            '{{ asset('images/img1.jpg') }}',
            '{{ asset('images/img2.jpeg') }}',
            '{{ asset('images/img3.jpeg') }}',
            '{{ asset('images/img4.jpeg') }}',
        ];
    
        let currentIndex = 0;
        const backgroundCarousel = document.getElementById('background-carousel');
    
        function changeBackground() {
            backgroundCarousel.style.backgroundImage = `url('${backgrounds[currentIndex]}')`;
            currentIndex = (currentIndex + 1) % backgrounds.length;
        }
    
        setInterval(changeBackground, 2000); // Cambia la imagen cada 5 segundos
    </script>
      <!-- Bootstrap JS -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

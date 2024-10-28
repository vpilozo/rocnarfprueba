<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('title')
    <base href="{{url('/')}}">
    <link rel='stylesheet' href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel='stylesheet' href="{{asset('css/styles.css')}}" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    @include('components.navbar')
    @yield('menu')
    @yield('slider')
    @yield('detalle')
    <br>
    @yield('categorias')
    <br>
    <br>
    @yield('productos_')
    @yield('banner1')
    @yield('banner2')
    @yield('footer')
    <div class="whatsapp-modal" id="whatsappModal">
        <div class="modal-content">
            <div class="modal-header">
                <span>WhatsApp</span>
                <span class="close" id="closeModal">&times;</span>
            </div>
            <div class="modal-body">
                <p>¡Hola! #BioFemmeLover ¿En qué te podemos ayudar? 💕 ✨</p>
                <a href="https://wa.me/1234567890" class="chat-btn" target="_blank">Ir al Chat <i class="fas fa-paper-plane"></i></a>
            </div>
        </div>
    </div>
    <script>
        /*Modal Whatsapp */
        document.addEventListener("DOMContentLoaded", function() {
            const whatsappBtn = document.getElementById("whatsappBtn");
            const whatsappModal = document.getElementById("whatsappModal");
            const closeModal = document.getElementById("closeModal");

            let hoverTimer;

            // Mostrar modal después de 3 segundos de hover
            whatsappBtn.addEventListener("mouseenter", function() {
                hoverTimer = setTimeout(() => {
                    whatsappModal.style.display = "block";
                }, 3000); // 3000 ms = 3 segundos
            });

            // Cancelar el temporizador si el mouse sale antes de los 3 segundos
            whatsappBtn.addEventListener("mouseleave", function() {
                clearTimeout(hoverTimer);
            });

            // Mostrar modal al hacer clic en el botón
            whatsappBtn.addEventListener("click", function(event) {
                event.preventDefault(); // Evita que el enlace abra WhatsApp
                whatsappModal.style.display = "block";
            });

            // Cerrar modal al hacer clic en la "X"
            closeModal.addEventListener("click", function() {
                whatsappModal.style.display = "none";
            });
        });


        /* */
        /*Slider */
        <?php
        if (isset($slider)) {
        ?>
            let currentIndex = 0;
            const slides = document.querySelectorAll('.slide');
            const dots = document.querySelectorAll('.dot');

            // Función para mostrar la slide actual
            function showSlide(index) {
                if (index >= slides.length) {
                    currentIndex = 0;
                } else if (index < 0) {
                    currentIndex = slides.length - 1;
                } else {
                    currentIndex = index;
                }

                const slider = document.getElementById('slider');
                slider.style.transform = `translateX(-${currentIndex * 100}%)`;

                dots.forEach(dot => dot.classList.remove('active'));
                dots[currentIndex].classList.add('active');
            }

            // Mostrar siguiente slide
            function nextSlide() {
                showSlide(currentIndex + 1);
            }

            // Mostrar slide anterior
            function prevSlide() {
                showSlide(currentIndex - 1);
            }

            // Seleccionar slide por punto
            function currentSlide(index) {
                showSlide(index);
            }

            // Cambiar de slide automáticamente cada 5 segundos
            setInterval(nextSlide, 5000);

            // Iniciar mostrando la primera slide
            showSlide(currentIndex);
        <?php
        }
        ?>
        /*Menu */
        function toggleMenu(event) {
            event.preventDefault();
            document.getElementById("menuToggle").classList.toggle("show");
        }

        // Escuchar el evento de clic en el documento
        document.addEventListener("click", function(event) {
            var menuToggle = document.getElementById("menuToggle");
            var menuContent = document.getElementById("menuContent");

            // Verificar si el clic ocurrió dentro del menú o en el botón
            var isClickInsideMenu = menuContent.contains(event.target);
            var isClickOnToggle = menuToggle.contains(event.target);

            // Solo cierra el menú si el clic no fue dentro del menú ni en el botón
            if (!isClickInsideMenu && !isClickOnToggle) {
                menuToggle.classList.remove("show");
            }
        });
        /* */
    </script>
</body>

</html>
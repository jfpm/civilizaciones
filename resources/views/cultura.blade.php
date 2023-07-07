<x-app-layout>
<div class="py-12" style="background-image: url('/img/fondo_principal.jpg'); background-position: center top; background-repeat: no-repeat; background-size: cover; height:900px">    
    <x-slot name="header">
        
    </x-slot>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    

    <div class="container mx-auto">
        <div class="flex flex-col">
            <div class="border-l-2 border-gray-300">
                <div class="glider">
                @php
                    $isLeft = true;
                    $slideIndex = 0; // Variable para almacenar la posición del carrusel
                @endphp
                @foreach ($events as $index => $event)
                    <div class="py-4 pl-4 pr-6 border-l-2 border-gray-300 flex flex-wrap flex-row ">
                        <div class="w-full md:w-1/2 pr-2">
                            <div class="font-serif-egyptian text-white">
                            <div class="font-serif-egyptian text-white"
                            style="animation: moverTexto 2s infinite;">{{ $event['date'] }}</div>
                            <style>
    @keyframes moverTexto {
        0% {
            transform: translateX(0);
        }
        50% {
            transform: translateX(20px);
        }
        100% {
            transform: translateX(0);
        }
    }
</style>
                            <div class="mt-2 text-xl font-semibold">{{ $event['title'] }}</div>
                            <div class="bg-[#0e0e07b8] shadow rounded-lg p-4" >{{ $event['description'] }}</div>
                            </div>
                        </div>
                        <div class="w-full md:w-1/2 pl-2">
                            @if (isset($event['photo']))
                                <div class="mt-4">
                                    <img src="{{ asset($event['photo']) }}" alt="{{ $event['title'] }}" class="max-w-full">
                                </div>
                            @endif

                            @if (isset($event['video']))
                                <div class="mt-4">
                                    <iframe width="90%" height="250"  src="{{ htmlspecialchars($event['video']) }}" frameborder="0" allowfullscreen ></iframe>
                                </div>
                            @endif

                            @if (isset($event['iframe']))
                                <div class="mt-4">
                                    {!! $event['iframe'] !!}
                                </div>
                            @endif
                        </div>
                    </div>
                    @php
                        $isLeft = !$isLeft;
                        // Verificar si es la diapositiva seleccionada
                            if ($slideIndex === $index) {
                                $slideIndex++; // Incrementar la posición del carrusel en cada iteración
                            }
                    @endphp
                @endforeach
                </div>
            </div>
        </div>
    </div>


    <button class="glider-prev"><i class="fas fa-chevron-left"></i></button>
    <button class="glider-next"><i class="fas fa-chevron-right"></i></button>
    

    <script src="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const glide = new Glider(document.querySelector('.glider'), {
                // Opciones de configuración
                slidesToShow: 3,
                slidesToScroll: 1,
                draggable: true,
                dots: '.dots',
                arrows: {
                    prev: '.glider-prev',
                    next: '.glider-next'
                },
                responsive: [
                    // Opciones específicas para pantallas más pequeñas
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            itemWidth: 300,
                            duration: 0.5
                        }
                    },
                    // Opciones específicas para pantallas aún más pequeñas
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            itemWidth: 200,
                            duration: 0.3
                        }
                    }
                ]
            });

            glide.go({{ $slideIndex }}); // Establecer la posición inicial del carrusel

            glide.on('slide.after', function () {
                const currentPosition = glide.index; // Obtener la posición actual del carrusel
                localStorage.setItem('carouselPosition', currentPosition.toString());
            });
        });
    </script>

</x-app-layout>

<x-app-layout>

    <x-slot name="header">
        
        <!-- Encabezado de la página -->
    </x-slot>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.css">

    <div class="container mx-auto">
        <div class="flex flex-col">
            <div class="border-l-2 border-gray-300">
                <div class="glider">
                @php
                    $isLeft = true;
                    $slideIndex = 0; // Variable para almacenar la posición del carrusel
                @endphp
                @foreach ($events as $index => $event)
                    <div
                        class="py-4 pl-4 pr-6 border-l-2 border-gray-300 flex flex-wrap flex-row ">
                        <div class="w-full md:w-1/2 pr-2">
                            <div class="text-gray-600">{{ $event['date'] }}</div>
                            <div class="mt-2 text-xl font-semibold">{{ $event['title'] }}</div>
                            <div class="mt-1 text-gray-800">{{ $event['description'] }}</div>
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


    <button class="glider-prev">Anterior</button>
    <button class="glider-next">Siguiente</button>
    

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

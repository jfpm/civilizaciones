<x-app-layout>
    @push('styles')
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    @endpush
    <x-slot name="header">
        <div class="breadcrumb">
            <a href="dashboard">Inicio</a>
            <span class="separator">/</span>
            <a class="text-xl font-semibold leading-tight text-gray-800"
                href="/curiosidades">{{ __('Adoraciones divinas') }}</a>
        </div>
    </x-slot>
    <div class="mt-2">
        <div class="bg-white border border-gray-200 rounded-lg p-6">
            <div class="flex flex-wrap">
                @foreach ($itemsAdoraciones as $index => $event)
                    <div class="bg-white p-4 shadow-md">
                        <a href="#"
                            class="text-xl font-semibold leading-tight text-gray-800 @if ($event->im_color == 'bg-red-500') bg-red-500 @else {{ $event->im_color }} @endif hover:bg-gray-500 text-white px-4 py-2 rounded-md"
                            onclick="toggleInfo(event, '{{ $event->im_guid }}', '{{ $index }}')">{{ $event->im_item }}</a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    @foreach ($itemsAdoraciones as $index => $event)
        <div id="info{{ $index }}" class="mt-4 hidden">
            <div class="bg-white border border-gray-200 rounded-lg p-6">
                <h2 class="text-xl font-semibold leading-tight text-gray-800">{{ $event->im_item }}</h2>
                <p>{{ $event->im_descripcion }}</p>

                @if (isset($event->im_img) && $event->im_img != '')
                    <div class="mt-4">
                        <img src="{{ asset($event->im_img) }}" alt="{{ $event->im_item }}" class="max-w-full">
                    </div>
                @endif

                @if (isset($event->im_video) && $event->im_video != '')
                    <div class="mt-4">
                        <iframe width="90%" height="480" src="{{ $event->im_video }}" frameborder="0"
                            allowfullscreen></iframe>
                    </div>
                @endif

                @if (isset($event->im_frame) && $event->im_frame != '')
                    <div class="mt-4">
                        {!! $event->im_frame !!}
                    </div>
                @endif

            </div>

        </div>
    @endforeach

    @push('scripts')
        <!-- Swiper JS -->
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <script>
            var swiper = new Swiper(".mySwiper", {
                cssMode: true,
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
                pagination: {
                    el: ".swiper-pagination",
                },
                mousewheel: true,
                keyboard: true,
            });

            function toggleInfo(event, guid, index) {
                event.preventDefault();
                //alert(index);
                var infoDiv = document.getElementById("info" + index);
                var allInfoDivs = document.querySelectorAll("[id^='info']");

                allInfoDivs.forEach(function(div) {
                    if (div.id === "info" + index) {
                        div.classList.toggle("hidden");
                    } else {
                        div.classList.add("hidden");
                    }
                });

                // Enviar la solicitud AJAX al servidor
                updateEstado(guid);
            }



            function updateEstado(guid) {
                var csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
                // Enviar la solicitud AJAX al servidor utilizando la biblioteca Axios o la función nativa de JavaScript
                var xhr = new XMLHttpRequest();

                xhr.open('POST', '/actualizarEstado', true);
                xhr.setRequestHeader('Content-Type', 'application/json');
                xhr.setRequestHeader('X-CSRF-TOKEN', csrfToken); // Include CSRF token in the request headers

                xhr.onload = function() {
                    if (xhr.status === 200) {
                        // Manejar la respuesta del servidor si es necesario
                        var response = JSON.parse(xhr.responseText);
                        console.log(response);
                    } else {
                        // Manejar errores de la solicitud AJAX
                        console.error('Error en la solicitud AJAX. Código de estado: ' + xhr.status);
                    }
                };

                xhr.onerror = function() {
                    // Manejar errores de la solicitud AJAX
                    console.error('Error en la solicitud AJAX. No se pudo realizar la conexión.');
                };

                var data = JSON.stringify({
                    guid: guid
                });

                xhr.send(data);
            }
        </script>
    @endpush
</x-app-layout>

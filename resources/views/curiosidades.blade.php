<x-app-layout>
    @push('styles')
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    @endpush
    <x-slot name="header">
        <div class="breadcrumb">
            <a href="dashboard">Inicio</a>
            <span class="separator">/</span>
            <a class="text-xl font-semibold leading-tight text-gray-800" href="/curiosidades">{{ __('Curiosidades') }}</a>
        </div>
    </x-slot>
    <div class="mt-2">
        <div class="bg-white border border-gray-200 rounded-lg p-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                @foreach ($itemsCuriosidades as $index => $event)
                    <div class="bg-white p-4 shadow-md">
                        <button
                            class="text-xl font-semibold leading-tight text-gray-800 bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md"
                            onclick="toggleInfo({{ $index }})">
                            {{ $event->im_item }}
                        </button>
                        <div id="info{{ $index }}" style="display: none;">
                            <!-- Contenido oculto -->
                            <!-- Texto -->
                            <p>{{ $event->texto }}</p>
                            <!-- Imagen -->
                            <img src="{{ $event->imagen }}" alt="Imagen">
                            <!-- Video -->
                            <video src="{{ $event->video }}" controls></video>
                            <!-- Frame -->
                            <iframe src="{{ $event->frame }}"></iframe>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>






    <div class="mt-2">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Laravel 9 Slider') }}
        </h2>
    </div>
    <div class="swiper mySwiper mt-3">
        <div class="swiper-wrapper">
            @foreach ($events as $event)
                @if (isset($event['photo']) && $event['photo'] != null)
                    <div class="swiper-slide flex flex-row items-center">
                        <div class="flex-grow">
                            <h3>{{ $event['title'] }}</h3>
                            <p>{{ $event['description'] }}</p>
                        </div>
                        <div>
                            <img class="object-cover w-full h-96" src="{{ asset($event['photo']) }}"
                                alt="{{ $event['title'] }}" />
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </div>



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
        </script>

        <script>
            function toggleInfo(index) {
                var infoDiv = document.getElementById("info" + index);
                if (infoDiv.style.display === "none") {
                    infoDiv.style.display = "block";
                } else {
                    infoDiv.style.display = "none";
                }
            }
        </script>
    @endpush
</x-app-layout>

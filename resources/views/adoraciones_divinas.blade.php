<x-app-layout>
    @push('styles')
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    @endpush
    <x-slot name="header">
        <div class="breadcrumb">
            <a href="dashboard">Inicio</a>
            <span class="separator">/</span>
            <a class="text-xl font-semibold leading-tight text-gray-800" href="/curiosidades">{{ __('Adoraciones divinas') }}</a>
        </div>
    </x-slot>
    <div class="mt-2">
        <div class="bg-white border border-gray-200 rounded-lg p-6">
            <div class="flex flex-wrap">
                @foreach ($itemsAdoraciones as $index => $event)
                    <div class="bg-white p-4 shadow-md">
                        <button
                            class="text-xl font-semibold leading-tight text-gray-800 bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md"
                            onclick="toggleInfo({{ $index }})">
                            {{ $event->im_item }}
                        </button>
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
        </script>

        <script>
            function toggleInfo(index) {
                var infoDiv = document.getElementById("info" + index);
                var allInfoDivs = document.querySelectorAll("[id^='info']");

                allInfoDivs.forEach(function(div) {
                    if (div.id === "info" + index) {
                        div.classList.toggle("hidden");
                    } else {
                        div.classList.add("hidden");
                    }
                });
            }
        </script>


    @endpush
</x-app-layout>




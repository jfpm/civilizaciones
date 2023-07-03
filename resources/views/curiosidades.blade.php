
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
                        <img class="object-cover w-full h-96" src="{{ asset($event['photo']) }}" alt="{{ $event['title'] }}" />
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
    @endpush
</x-app-layout>

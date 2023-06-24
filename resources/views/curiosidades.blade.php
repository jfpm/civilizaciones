<x-app-layout>
    <div class="container mx-auto">
        <div class="flex flex-col">
            <div class="border-l-2 border-gray-300">
                @php
                    $isLeft = true;
                @endphp
                @foreach ($events as $event)
                    <div
                        class="py-4 pl-4 pr-6 border-l-2 border-gray-300 flex flex-wrap @if ($isLeft) flex-row @else flex-row-reverse @endif">
                        <div class="w-full md:w-1/2 pr-2">
                            <div class="text-gray-600">{{ $event['date'] }}</div>
                            <div class="mt-2 text-xl font-semibold">{{ $event['title'] }}</div>
                            <div class="mt-1 text-gray-800">{{ $event['description'] }}</div>
                        </div>
                        <div class="w-full md:w-1/2 pl-2">
                            @if (isset($event['photo']))
                                <div class="mt-4">
                                    <img src="{{ $event['photo'] }}" alt="{{ $event['title'] }}" class="max-w-full">
                                </div>
                            @endif

                            @if (isset($event['video']))
                                <div class="mt-4">
                                    <iframe width="100%" height="480"  src="{{ htmlspecialchars($event['video']) }}" frameborder="0" allowfullscreen ></iframe>
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
                    @endphp
                @endforeach
            </div>
        </div>
    </div>

</x-app-layout>

<x-app-layout>
    <x-slot name="header">
        <div class="breadcrumb">
            <a href="dashboard">Inicio</a>
            <span class="separator">/</span>
            <a class="text-xl font-semibold leading-tight text-gray-800"
                href="/evaluacion_curiosidad">{{ __('Evaluacuón curiosidades') }}</a>
        </div>
    </x-slot>
    <div class="container mx-auto mt-3">
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <div class="p-4 mb-5 py-5">
                <div class="overflow-x-auto">

                    <form method="POST" action="{{ route('storeCuriosidad') }}">
                        @csrf
                        @foreach ($questions as $question)
                            <!-- Campo de texto -->
                            <div class="mb-4">
                                <label for="{{ $question->p_identificador }}" class="block mb-2">{{ $question->p_pregunta }}:</label>
                                @if (isset($question->respuestas))
                                    @foreach ($question->respuestas as $respuesta)
                                        @if ($respuesta->r_state == 1)
                                            <input type="radio" name="response[{{ $question->p_identificador }}]" value="{{ $respuesta->id }}" required>
                                            {{ $respuesta->r_respuesta }}<br>
                                        @endif
                                    @endforeach
                                @endif
                            </div>
                        @endforeach

                        <div class="mb-4">
                            <label for="answeropen" class="block mb-2">Dejanos tus comentarios sobre curiosidades:</label>
                            <input type="text" name="answeropen" id="answeropen" class="border-gray-400 border rounded-md px-4 py-2 w-full">
                        </div>

                        <!-- Botón de envío -->
                        <div>
                            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">Enviar</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>

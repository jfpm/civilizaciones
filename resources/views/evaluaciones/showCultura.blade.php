<x-app-layout>
    <x-slot name="header">
        <div class="breadcrumb">
            <a href="dashboard">Inicio</a>
            <span class="separator">/</span>
            <a class="text-xl font-semibold leading-tight text-gray-800" href="/ver_evaluacion_cultura">{{ __('Resultados de Encuestas Cultura') }}</a>
        </div>
    </x-slot>
    <div class="container mx-auto mt-3">
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <div class="p-4">
                <div class="overflow-x-auto">
                    <table id="example1" class="table-auto w-full">
                        <caption class="text-lg font-bold">Encuesta Cultura</caption>
                        <thead>
                            <tr>
                                <th class="py-2">Pregunta</th>
                                <th class="py-2">Respuesta</th>
                                <th class="py-2">Resultado</th>
                                <th class="py-2">Fecha</th>
                                @if(Auth::user()->rol == 1)<th class="py-2">Nombre Usuario</th>@endif
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $value)
                            <tr>
                                <td class="py-2">{{ $value->ecl_pregunta}}</td>
                                <td class="py-2">{{ $value->ecl_respuesta}}</td>
                                <td class="py-2">@if($value->ecl_resultado == 1) Correcto @else Incorrecto @endif</td>
                                <td class="py-2">{{ $value->created_at}}</td>
                                @if(Auth::user()->rol == 1)<td class="py-2">@if(isset($value->responde_encuesta)){{$value->responde_encuesta->name}}@endif</td>@endif
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>       
    </div>
</x-app-layout>

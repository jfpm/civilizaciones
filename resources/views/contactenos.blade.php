<x-app-layout>
    <x-slot name="header">
        <div class="breadcrumb">
            <a href="dashboard">Inicio</a>
            <span class="separator">/</span>
            <a class="text-xl font-semibold leading-tight text-gray-800"
                href="/contactenos">{{ __('Contactenos') }}</a>
        </div>
    </x-slot>
    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200 flex">

                <div class="sm:w-1/2 pr-4">
                    <form action="{{ route('storecontactenos') }}" method="POST">
                        @csrf

                        <div class="mb-4">
                            <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Nombre</label>
                            <input type="text" name="name" id="name"
                                class="form-input rounded-md shadow-sm block w-full" value="{{ old('name') }}"
                                required autofocus>
                            @error('name')
                                <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Correo
                                electrónico</label>
                            <input type="email" name="email" id="email"
                                class="form-input rounded-md shadow-sm block w-full" value="{{ old('email') }}"
                                required>
                            @error('email')
                                <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="message" class="block text-gray-700 text-sm font-bold mb-2">Mensaje</label>
                            <textarea name="message" id="message" class="form-textarea rounded-md shadow-sm block w-full" rows="4" required>{{ old('message') }}</textarea>
                            @error('message')
                                <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
                            @enderror
                        </div>

                        <div>
                            <button type="submit" class="inline-block bg-blue-500 text-white px-4 py-2 rounded-md">
                                Enviar mensaje
                            </button>
                        </div>
                    </form>
                </div>
                <div class="sm:w-1/2 pr-4">
                    <div class="mt-4">
                        <img src="{{ asset('img/egytponice.jpg') }}" alt="Egypt nice" class="max-w-full">
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

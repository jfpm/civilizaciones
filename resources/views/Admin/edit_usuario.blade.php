<x-app-layout>

    <div class="container mx-auto mt-3">
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <div class="p-4">
                <div class="overflow-x-auto">
                    <form method="POST" action="{{ route('usuario.update', $editarUsuario->id) }}">
                        @csrf

                        <!-- Name -->
                        <div>
                            <x-input-label class="dark:text-gray-700" for="name" :value="__('Name')" />
                            <x-text-input id="name" class="block mt-1 w-full dark:bg-gray-100 dark:text-gray-700" type="text" name="name"
                                value="{{ old('name', $editarUsuario->name) }}" required autofocus
                                autocomplete="name" />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                        <!-- Username -->
                        <div>
                            <x-input-label class="dark:text-gray-700" for="username" :value="__('Username')" />
                            <x-text-input id="username" class="block mt-1 w-full dark:bg-gray-100 dark:text-gray-700" type="text" name="username"
                                value="{{ old('name', $editarUsuario->username) }}" required autofocus
                                autocomplete="username" />
                            <x-input-error :messages="$errors->get('username')" class="mt-2" />
                        </div>

                        <!-- Email Address -->
                        <div class="mt-4">
                            <x-input-label class="dark:text-gray-700" for="email" :value="__('Email')" />
                            <x-text-input id="email" class="block mt-1 w-full dark:bg-gray-100 dark:text-gray-700" type="email" name="email"
                                value="{{ old('name', $editarUsuario->email) }}" required autocomplete="username" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <div class="mt-4">
                            <x-input-label class="dark:text-gray-700" for="Roles" :value="__('Roles')" />
                            <select name="Roles" id="Roles" class="block mt-1 w-full dark:bg-gray-100 dark:text-gray-700" required
                                autocomplete="username">
                                <option disabled>Seleccionar</option>
                                @foreach ($roles as $rol)
                                    @if ($rol->id == $editarUsuario->rol)
                                        <option selected value="{{ $rol->id }}">
                                            {{ $rol->nombre_rol }}</option>
                                    @else
                                        <option value="{{ $rol->id }}">
                                            {{ $rol->nombre_rol }}</option>
                                    @endif
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('Roles')" class="mt-2" />
                        </div>

                        <div class=" items-center  mt-4" style="margin-bottom: 10px;">
                            <button type="submit" class="btn success" title="Editar Datos">Guardar Cambios</button>
                            <a class="btn_re success" href="/usuarios">Regresar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<style>
    .btn_re {
        border: none;
        background-color: gray;
        padding: 14px 28px;
        font-size: 12px;
        cursor: pointer;
        display: inline-block;
        border-radius: 15px;
    }

    .btn {
        border: none;
        border-radius: 15px;
        background-color: #261fee;
        padding: 14px 28px;
        font-size: 12px;
        cursor: pointer;
        display: inline-block;
    }

    .btn:hover {
        background: #9896d38d;
    }

    .sucess:hover {
        background-color: #04AA6D;
    }

    .success {
        color: white;
    }
</style>

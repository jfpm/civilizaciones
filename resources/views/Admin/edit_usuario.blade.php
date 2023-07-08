<x-app-layout>
    <form method="POST" action="{{ route('usuario.update',$editarUsuario->id) }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{ old('name', $editarUsuario->name) }}" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Username -->
        <div>
            <x-input-label for="username" :value="__('Username')" />
            <x-text-input id="username" class="block mt-1 w-full" type="text" name="username" value="{{ old('name', $editarUsuario->username) }}"  required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('username')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" value="{{ old('name', $editarUsuario->email) }}"  required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="Roles" :value="__('Roles')" />
            <select name="Roles" id="Roles" class="block mt-1 w-full" required autocomplete="username">
                                                    <option selected disabled>Seleccionar</option>
                                                    @foreach ($roles as $rol)
                                                        <option value="{{ $rol->id }}">
                                                            {{ $rol->nombre_rol }}</option>
                                                    @endforeach
                                                </select>
            <x-input-error :messages="$errors->get('Roles')" class="mt-2" />
        </div>

        <div class=" items-center  mt-4" style="margin-bottom: 10px;">
            <button type="submit" class="btn success" title="Editar Datos">Guardar Cambios</button>
            <a class="btn_re success" href="/usuarios">Regresar</a>
        </div>
    </form>
</x-app-layout>
<style>
    .btn_re{
        border: none; 
        background-color:gray; 
        padding: 14px 28px;
        font-size: 12px; 
        cursor: pointer; 
        display: inline-block;
        border-radius: 15px;
    }

    .btn{
        border: none;
        border-radius: 15px;
        background-color:#04AA6D; 
        padding: 14px 28px; 
        font-size: 12px; 
        cursor: pointer; 
        display: inline-block;
    }

    .btn:hover {
            background: #eee;
    }

    .sucess:hover {
        background-color: #04AA6D;}

    .success {
        color: white;
    }
    
</style>
<x-app-layout>
    <x-slot name="header">
        <div class="breadcrumb">
            <a href="dashboard">Inicio</a>
            <span class="separator">/</span>
            <a class="text-xl font-semibold leading-tight text-gray-800" href="/usuarios">{{ __('Listado de usuarios del sistema') }}</a>
        </div>
    </x-slot>
    <div class="container mx-auto mt-3">
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <div class="p-4">
                <div class="overflow-x-auto">
                    <table id="example1" class="table-auto w-full">
                        <caption class="text-lg font-bold">USUARIOS</caption>
                        <thead>
                            <tr>
                                <th class="py-2">Nombre</th>
                                <th class="py-2">Correo electrónico</th>
                                <th class="py-2">Username</th>
                                <th class="py-2">Rol</th>
                                <th class="py-2">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($usuarios as $usuario)
                            <tr>
                                <td class="py-2">{{ $usuario->name}}</td>
                                <td class="py-2">{{ $usuario->email}}</td>
                                <td class="py-2">{{ $usuario->username}}</td>
                                <td class="py-2">{{ $usuario->roles->nombre_rol}}</td>
                                <td class="py-2">
                                    <div class="flex space-x-2">
                                        <a title="Editar Información" href="{{ route('usuario.editar', $usuario->id) }}" class="btn btn-sm">
                                            <svg class="h-5 w-5 text-black-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                            </svg>
                                        </a>
                                        <form id="deleteForm" action="{{ route('usuario.delete', $usuario->id) }}" method="POST"> 
                                            @method('POST')
                                            @csrf
                                            <button type="submit" class="btn btn-sm" title="Eliminar Usuario" onclick="return confirmarEliminacion(event)">
                                                <svg class="h-5 w-5 text-red-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <polyline points="3 6 5 6 21 6" />
                                                    <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2" />
                                                    <line x1="10" y1="11" x2="10" y2="17" />
                                                    <line x1="14" y1="11" x2="14" y2="17" />
                                                </svg>
                                            </button>
                                        </form>
                                    </div>
                                    @csrf
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>       
    </div>
</x-app-layout>
<script>
    function confirmarEliminacion(event) {
        if (!confirm('¿Estás seguro de que deseas eliminar este usuario?')) {
            event.preventDefault();
        }
    }
</script>
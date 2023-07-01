<x-app-layout>
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
                                        <a title="Editar Información" href="{{ route('profile.edit') }}" class="btn btn-sm">
                                            <svg class="h-5 w-5 text-black-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                            </svg>
                                        </a>
                                        <a title="Eliminar Usuario" href="{{ route('profile.edit') }}" class="btn btn-sm">
                                            <svg class="h-5 w-5 text-red-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <polyline points="3 6 5 6 21 6" />
                                                <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2" />
                                                <line x1="10" y1="11" x2="10" y2="17" />
                                                <line x1="14" y1="11" x2="14" y2="17" />
                                            </svg>
                                        </a>
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

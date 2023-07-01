<x-app-layout>
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">

                {{--<div class="row">
                        <div class="col-xs-12 col-md-3 col-sm-3">
                            <a class="btn btn-primary btn-sm mt-3 mb-3 float-left" href="{{route('crear_usuario')}}">Crear Nuevo Usuario</a>
                        </div>
                </div>--}}
            
                <div class="table-responsive">
                    <table id="example1" class=" table table-bordered table-striped">
                        <caption>USUARIOS</caption>
                        <thead>
                            <tr>
                                <td>Nombre</td>
                                <td>Correo electronico</td>
                                <td>username</td>
                                <td>Rol</td>
                                <td>Acciones</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($usuarios as $usuario)
                            <tr>
                                <td>{{ $usuario->name}}</td>
                                <td>{{ $usuario->email}}</td>
                                <td>{{ $usuario->username}}</td>
                                <td>{{ $usuario->roles->nombre_rol}}</td>
                                <td>
                                    <div class="link-group">
                                        <a title="Editar Informacion" href="{{ route('profile.edit') }}" class="btn btn-block btn-sm">
                                            <svg class="h-5 w-5 text-black-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                            </svg>
                                        </a>
                                        <a title="Eliminar Usuario" href="{{ route('profile.edit') }}" class="btn btn-block btn-sm">
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
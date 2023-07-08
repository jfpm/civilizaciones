<?php

namespace App\Http\Controllers;

use Toastr;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{   
    public function __construct()
    {
        $this->middleware('admin');
        
    }

    public static function usuarios(){

        $usuarios = User::all();
        return view('Admin.usuarios',compact('usuarios'));
    }

    public static function delete(Request $request, $id){
        $data = User::findOrFail($id);
        $data -> delete();
        Toastr::success('¡El usuario se ha eliminado correctamente!', 'Éxito');

        return redirect('usuarios');
    }

    public static function editar(Request $request, $id){
        $roles =  Role::all();
        $editarUsuario = User::findOrFail($id);
        return view('Admin.edit_usuario', compact('editarUsuario', 'roles'));
    }

    public static function update(Request $request, $id) {
        
        $data = User::findOrFail($id);
        //dd($data);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->username = $request->username;
        
        $data->save();

        Toastr::success('¡El usuario se ha Actualizado correctamente!', 'Éxito');

        return redirect('usuarios');
    }
}

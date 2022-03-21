<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{

    public function index()
    {
        //select * from usuarios
        $usuarios = Usuarios::all();

        return view('usuario.index', ['usuarios'=>$usuarios]);
    }


    public function create()
    {
        return view('usuario.create', []);
    }


    public function store(Request $request)
    {
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $perfil_id = $_POST["perfil_id"];

        $usuario = new Usuarios();
        $usuario->nome = $nome;
        $usuario->email = $email;
        $usuario->perfil_id = $perfil_id;
        $usuario->save();

        //insert into usuarios (nome, email, perfil_id) values ('$nome','$email','$perfil_id')
        //execute()
        return redirect('/usuarios/listar');
    }


    public function show(Usuarios $usuarios)
    {
        //
    }


    public function edit(Usuarios $usuarios)
    {
        //
    }


    public function update(Request $request, Usuarios $usuarios)
    {
        //
    }


    public function destroy($id)
    {
        //select * from usuarios where id=$id
        //delete from usuarios where id=$id
        $usuario = Usuarios::find($id)->delete();
        return redirect('/usuarios/listar');
    }
}

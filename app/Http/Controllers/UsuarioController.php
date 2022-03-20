<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{

    public function index()
    {
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
        return redirect('/');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}

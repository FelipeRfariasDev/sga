@extends('layouts.app')
@section('content')

<h1>Usuários

    <a href="/usuarios/create" class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">add</i></a>
</h1>

<table class="striped">
        <thead>
          <tr>
              <th>Nome</th>
              <th>Email</th>
              <th>Perfil</th>
              <th></th>
          </tr>
        </thead>

        <tbody>

        @foreach($usuarios as $usuario)
          <tr>
            <td>{{$usuario->nome}}</td>
            <td>{{$usuario->email}}</td>
            <td>{{$usuario->perfil_id}}</td>
            <td>


                <i class="material-icons dp48">delete</i>

                <i class="material-icons dp48">edit</i>

            </td>
          </tr>
        @endforeach

        </tbody>
      </table>

@endsection

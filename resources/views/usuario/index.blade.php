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
          <tr>
            <td>Felipe</td>
            <td>felipe@gmail.com</td>
            <td>Auditor/Auditaro</td>
            <td>

            
                <i class="material-icons dp48">delete</i>

                <i class="material-icons dp48">edit</i>

            </td>
          </tr>
          <tr>
            <td>Pable</td>
            <td>pable@gmail.com</td>
            <td>Administrador</td>

            <td>

            
                <i class="material-icons dp48">delete</i>

                <i class="material-icons dp48">edit</i>

            </td>
          </tr>
         
        </tbody>
      </table>

@endsection
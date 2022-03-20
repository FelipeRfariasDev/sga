@extends('layouts.app')
@section('content')

<h1>Novo Usuário</h1>


<div class="row">
    <form class="col s12" method="POST" action="/usuarios/store">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="row">
        <div class="input-field col s12">
          <input placeholder="Qual é o seu nome?" name="nome" type="text" required>
          <label>Nome</label>
        </div>
      </div>

      <div class="row">
        <div class="input-field col s12">
          <input type="email" required name="email">
          <label>Email</label>
        </div>

      </div>
      <div class="row">
        <div class="input-field col s12">
            <select class="browser-default" name="perfil_id" required>
                <option value="" disabled selected>Selecione o Perfil</option>
                <option value="1">Auditor/Auditado</option>
                <option value="2">Administrador</option>
                <option value="3">Técnico de Segurança</option>
                <option value="4">Engenheiro de Segurança</option>
            </select>
        </div>
    </div>


    <div class="row">
        <div class="input-field col s12">
            <input type="submit" value="salvar">
        </div>
    </div>


    </form>
  </div>


@endsection

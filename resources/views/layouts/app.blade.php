<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>SGA Sistema de Gestão de Auditoria</title>
  <link rel="icon" href="https://materializecss.com/images/favicon/favicon-32x32.png" sizes="32x32">
  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://materializecss.com/dist/css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="https://materializecss.com/templates/starter-template/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="/" class="brand-logo">Logo</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="/usuarios/listar">Usuários</a></li>
        <li><a href="#">Auditoria</a></li>
      </ul>

      <ul id="nav-mobile" class="sidenav">
        <li><a href="/usuarios/listar">Usuários</a></li>
        <li><a href="#">Auditoria</a></li>
      </ul>

      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>
  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      @yield('content')
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="https://materializecss.com/bin/materialize.js"></script>
  <script src="https://materializecss.com/templates/starter-template/js/init.js"></script>

  </body>
</html>

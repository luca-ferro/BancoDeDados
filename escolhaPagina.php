<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BlueVelvet Admin</title>
    <link rel="stylesheet" href="templates\style.css" />
    <link rel="stylesheet" href="templates\escolhaP.css" />

  </head>

  <body>
    <header>
      <nav>
        <a class="logo" href="/easysports/index.php" ><img class="logo-image" src="templates\logoEasy.png"></a>
        <div class="mobile-menu">
          <div class="line1"></div>
          <div class="line2"></div>
          <div class="line3"></div>
        </div>

        <ul class="nav-list">
          <li><a href="#">Categorias</a></li>
          <li><a href="#">Pedidos</a></li>
          <li><a href="/easysports/escolhaPagina.php">Cliente</a></li>
          <li><a href="#">Detalhes</a></li>
          <li><a href="/usuario">Produto</a></li>
        </ul>

      </nav>
    </header>

    <main>
      <div class="backimg"></div>

        <ul class="navP">
          <li  class="navt"><a href="/easysports/registroMusica.php" style="color: black;">Inserção</a></li>
          <br>
          <li class="navt"><a href="/easysports/atualizacao.php" style="color: black;">Atualização</a></li>
          <br>          
          <li class="navt"><a href="/easysports/remove.php" style="color: black;">Remove</a></li>
          <br>
          <li class="navt"><a href="/easysports/recuperaClientes.php" style="color: black;">Listagem</a></li>
        </ul>

    </main>

    <footer class="rodape">
        <h5 class="rodape-copyright">Copyright © 2022 BlueVelvet Music Store – Todos os direitos reservados.</h5>
    </footer>

    <script src="mobile-navbar.js"></script>
  </body>
</html>
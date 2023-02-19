<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BlueVelvet Admin</title>
    <link rel="stylesheet" href="templates\style.css" />
    <link rel="stylesheet" href="templates\produtos.css" />

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

    <!-- Form começa aqui -->
    <form class="formularios" action="adiciona_dados.php" method="POST">
    <h2>Adicionar novo cliente</h2>
    
    <label>Nome:</label>
    <input type="text" name="pnome" required>
    <br>
    <br>
    <label>Sobrenome:</label>
    <input type="text" name="unome" required>
    <br>
    <br>
    <label>Email:</label>
    <input type="text" name="email" required>
    <br>
    <br>
    <label>Senha:</label>
    <input type="password" name="senha" required>
    <br>
    <br>
    <label>Endereco:</label>
    <input type="text" name="endereco" required> 
    <br>
    <br>
    <label>Celular:</label>
    <input type="text" name="celular" required>
    <br>
    <br>
    <input type="submit" value="Enviar dados"/>
</form>

    </main>


    <footer class="rodape">
        <h5 class="rodape-copyright">Copyright © 2022 BlueVelvet Music Store – Todos os direitos reservados.</h5>
    </footer>

    <script src="mobile-navbar.js"></script>
  </body>
  <script>
    document.querySelector("form").addEventListener("submit", function(event) {
      alert("Formulário enviado com sucesso!");
    });
  </script>

  </html>
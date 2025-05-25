<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GuiaFut</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
      body {
        background-color:	snow;
      }

      .navbar {
        background-color:	snow;
        padding: 15px 30px;
      }

      .logo-img {
        height: 40px;
      }

      .form-control {
        border-radius: 25px;
      }

      .login-btn {
        background-color: mediumblue;
        color: white;
        border: none;
        padding: 6px 12px;
        border-radius: 5px;
      }

      .nav-link {
        color: black !important;
        font-weight: 500;
        color: mediumblue;
      }

      .search-wrapper {
        flex-grow: 1;
        display: flex;
        justify-content: center;
      }

      .search-input {
        width: 60%;
      }

      .button{
        color: mediumblue;
      }
    </style>
  </head>
  <body>

    <nav class="navbar d-flex align-items-center">
      <!-- Botão Home com imagem -->
      <a href="?aaa=home">
        <img src="views/images/gflogo.png" alt="Logo MyCine" class="logo-img">
      </a>

      <div class="search-wrapper">
        <input class="form-control search-input" type="search" placeholder="Adicionar Time" aria-label="Search">
      </div>

      <div class="d-flex align-items-center gap-3">
        <?php if (isset($_SESSION['usuario_id'])): ?>
          <!-- Exibe o nome do usuário e um link para a dashboard -->
          <a class="nav-link" href="?aaa=perfil"><?php echo $_SESSION['usuario_nome']; ?></a>
        <!-- Botão de Logout -->
        <a href="controllers/logout.php">
          <button class="login-btn">Sair</button>
        </a>
        <?php else: ?>
          <a class="nav-link" href="?aaa=cadastro">Cadastrar-se</a>
          <a href="?aaa=login">
            <button class="login-btn">Entrar</button>
          </a>
        <?php endif; ?>
      </div>
    </nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>

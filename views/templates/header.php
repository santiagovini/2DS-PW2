<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GuiaFut</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
  body {
    background-color: snow;
  }

  .navbar {
    background-color: snow;
    padding: 15px 30px;
  }

  .logo-img {
    height: 40px;
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
    text-decoration: none;
  }

  .nav-link:hover {
    color: mediumblue !important;
  }
</style>
<body>
  <nav class="navbar d-flex justify-content-between align-items-center">
  <!-- Logo -->
  <a href="?aaa=home" class="d-flex align-items-center gap-2 text-decoration-none">
    <img src="views/images/gflogo.png" alt="Logo GuiaFut" class="logo-img">
    <span class="fw-bold fs-5 text-primary">GuiaFut</span>
  </a>

  <!-- Menu -->
  <div class="d-flex gap-4">
    <a class="nav-link" href="?aaa=adicionar">Adicionar</a>
    <a class="nav-link" href="?aaa=times">Times</a>
    <a class="nav-link" href="?aaa=paises">Países</a>
    <a class="nav-link" href="?aaa=sobrenos">Sobre Nós</a>
  </div>

  <!-- Login/Cadastro ou Perfil -->
  <div class="d-flex align-items-center gap-3">
    <?php if (isset($_SESSION['usuario_id'])): ?>
      <a class="nav-link" href="?aaa=perfil"><?php echo $_SESSION['usuario_nome']; ?></a>
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
  
 </body>
  </head>
  <nav class="navbar d-flex justify-content-between align-items-center">
</html>

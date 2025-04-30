<?php
if (isset($_GET['erro'])) {
    if ($_GET['erro'] === 'usuario') {
        echo '<div class="alert alert-danger" role="alert">Nome de usuário não encontrado!</div>';
    } elseif ($_GET['erro'] === 'senha') {
        echo '<div class="alert alert-danger" role="alert">Senha incorreta!</div>';
    } elseif ($_GET['erro'] === 'acesso') {
        echo '<div class="alert alert-warning" role="alert">Você precisa estar logado para acessar essa página.</div>';
    }
}
?>

<div class="container mt-5">
  <h2>Login</h2>
  <form action="control/auth_controller.php" method="POST">
    <div class="mb-3">
      <label for="username" class="form-label">Nome de usuário</label>
      <input type="text" class="form-control" id="username" name="username" required>
    </div>

    <div class="mb-3">
      <label for="senha" class="form-label">Senha</label>
      <input type="password" class="form-control" id="senha" name="senha" required>
    </div>

    <button type="submit" class="btn btn-success">Entrar</button>
  </form>
</div>

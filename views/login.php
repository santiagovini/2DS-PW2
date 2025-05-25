<style>
.btn-success {
  background-color: mediumblue;
  color: white;
  border: none;
  padding: 6px 12px;
  border-radius: 5px;
}
</style>

<?php
if (isset($_GET['erro'])) {
    if ($_GET['erro'] === 'usuario') {
        echo '<div class="alert alert-danger text-center" role="alert">Nome de usuário não encontrado!</div>';
    } elseif ($_GET['erro'] === 'senha') {
        echo '<div class="alert alert-danger text-center" role="alert">Senha incorreta!</div>';
    } elseif ($_GET['erro'] === 'acesso') {
        echo '<div class="alert alert-warning text-center" role="alert">Você precisa estar logado para acessar essa página.</div>';
    }
}
?>

<div class="container vh-100 d-flex justify-content-center align-items-center">
  <div class="card shadow p-4" style="width: 100%; max-width: 400px;">
    <h3 class="text-center mb-4">Login</h3>

    <form action="controllers/auth_controller.php" method="POST">
      <div class="mb-3 text-center">
        <label for="username" class="form-label small">Nome de usuário</label>
        <input type="text" class="form-control text-center" id="username" name="username" required>
      </div>

      <div class="mb-3 text-center">
        <label for="senha" class="form-label small">Senha</label>
        <input type="password" class="form-control text-center" id="senha" name="senha" required>
      </div>

      <div class="d-grid">
        <button type="submit" class="btn btn-success">Entrar</button>
      </div>
    </form>
  </div>
</div>

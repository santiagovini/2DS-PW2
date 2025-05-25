<style>
  .btn-success{
  background-color: mediumblue;
  color: white;
  border: none;
  padding: 6px 12px;
  border-radius: 5px;
}
</style>
<?php if (isset($_GET['erro']) && $_GET['erro'] === 'senhas'): ?>
  <div class="alert alert-danger text-center" role="alert">
    As senhas não coincidem!
  </div>
<?php endif; ?>

<div class="container vh-100 d-flex justify-content-center align-items-center">
  <div class="card shadow p-4" style="width: 100%; max-width: 400px;">
    <h3 class="text-center mb-4">Cadastro</h3>

    <form action="controllers/processa_cadastro.php" method="POST">
      <div class="mb-3 text-center">
        <label for="email" class="form-label small">E-mail</label>
        <input type="email" class="form-control text-center" id="email" name="email" required>
      </div>

      <div class="mb-3 text-center">
        <label for="username" class="form-label small">Nome de usuário</label>
        <input type="text" class="form-control text-center" id="username" name="username" required>
      </div>

      <div class="mb-3 text-center">
        <label for="senha" class="form-label small">Senha</label>
        <input type="password" class="form-control text-center" id="senha" name="senha" required>
      </div>

      <div class="mb-3 text-center">
        <label for="confirmar_senha" class="form-label small">Confirmar senha</label>
        <input type="password" class="form-control text-center" id="confirmar_senha" name="confirmar_senha" required>
      </div>

      <div class="d-grid">
        <button type="submit" class="btn btn-success">Cadastrar</button>
      </div>
    </form>
  </div>
</div>

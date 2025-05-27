<?php
// adicionar.php
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <title>Adicionar Equipe</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body class="bg-light">

<div class="container vh-100 d-flex justify-content-center align-items-center">
  <div class="card shadow p-4" style="max-width: 600px; width: 100%;">
    <h3 class="text-center mb-4">Adicionar Equipe</h3>
    <form action="processa_adicionar.php" method="POST">
      <div class="mb-3">
        <label for="nome_equipe" class="form-label">Nome da Equipe</label>
        <input type="text" class="form-control" id="nome_equipe" name="nome_equipe" required />
      </div>

      <div class="mb-3">
        <label for="pais" class="form-label">País</label>
        <select class="form-select" id="pais" name="pais" required>
          <option value="" disabled selected>Selecione o país</option>
          <option value="Brasil">Brasil</option>
          <option value="Argentina">Argentina</option>
          <option value="Alemanha">Alemanha</option>
          <option value="Espanha">Espanha</option>
          <option value="França">França</option>
          <!-- Adicione outros países que desejar -->
        </select>
      </div>

      <div class="mb-3">
        <label for="ano_fundacao" class="form-label">Ano de Fundação</label>
        <input type="number" class="form-control" id="ano_fundacao" name="ano_fundacao" min="1800" max="<?php echo date('Y'); ?>" required />
      </div>

      <div class="mb-3">
        <label for="principais_jogadores" class="form-label">Principais Jogadores</label>
        <textarea class="form-control" id="principais_jogadores" name="principais_jogadores" rows="3"></textarea>
      </div>

      <div class="mb-3">
        <label for="historia" class="form-label">História</label>
        <textarea class="form-control" id="historia" name="historia" rows="4"></textarea>
      </div>

      <button type="submit" class="btn btn-primary w-100">Adicionar</button>
    </form>
  </div>
</div>

</body>
</html>

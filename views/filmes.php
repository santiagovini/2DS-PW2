<?php
if (!isset($_SESSION['usuario_id'])) {
    header("Location: ../index.php?aaa=login&erro=acesso");
    exit();
}
?>

<div class="container mt-5">
  <h2>Adicionar Filme</h2>
  <form action="actions/salvar_filme.php" method="POST" enctype="multipart/form-data">
    
    <div class="mb-3">
      <label for="capa" class="form-label">Capa do Filme</label>
      <input type="file" class="form-control" id="capa" name="capa" accept="image/*" required>
    </div>

    <div class="mb-3">
      <label for="nome" class="form-label">Nome do Filme</label>
      <input type="text" class="form-control" id="nome" name="nome" required>
    </div>

    <div class="mb-3">
      <label for="duracao" class="form-label">Duração (em minutos)</label>
      <input type="text" class="form-control" id="duracao" name="duracao"required>
    </div>

    <div class="mb-3">
    <label for="genero" class="form-label">Gênero</label>
        <select class="form-select" id="genero" name="genero" required>
            <option value="" disabled selected>Selecione um gênero</option>
            <option value="Ação">Ação</option>
            <option value="Aventura">Aventura</option>
            <option value="Comédia">Comédia</option>
            <option value="Drama">Drama</option>
            <option value="Ficção Científica">Ficção Científica</option>
            <option value="Romance">Romance</option>
            <option value="Terror">Terror</option>
            <option value="Animação">Animação</option>
            <option value="Suspense">Suspense</option>
            <option value="Documentário">Documentário</option>
        </select>
    </div>


    <div class="mb-3">
      <label for="descricao" class="form-label">Descrição</label>
      <textarea class="form-control" id="descricao" name="descricao" rows="4" required></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Salvar Filme</button>
  </form>
</div>

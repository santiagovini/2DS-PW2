<?php
if (!isset($_SESSION['usuario_id'])) {
    header("Location: ../index.php?aaa=login&erro=acesso");
    exit();
}
?>

<!-- Conteúdo do dashboard -->
<h1>Bem-vindo ao seu Dashboard, <?php echo $_SESSION['usuario_nome']; ?>!</h1>

<button onclick="window.location.href='index.php?aaa=filmes'">Ir para Filmes</button>


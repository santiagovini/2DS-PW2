<?php
session_start();
if (!isset($_SESSION['usuario_id'])) {
    header("Location: ../index.php?aaa=login&erro=acesso");
    exit();
}
?>

<!-- Conteúdo do dashboard -->
<h1>Bem-vindo ao seu Dashboard, <?php echo $_SESSION['usuario_nome']; ?>!</h1>

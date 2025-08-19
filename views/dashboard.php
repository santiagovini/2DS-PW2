<?php
if (!isset($_SESSION['usuario_id'])) {
    header("Location: ../index.php?aaa=login&erro=acesso");
    exit();
}
?>

<div class="container vh-100 d-flex justify-content-center align-items-center">
  <p class="text-muted text-center" style="font-size: 16px;">
    Ainda não foi registrado nenhum time
  </p>

</div>

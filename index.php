<?php
session_start(); // Inicia a sessão

$pagina = isset($_GET['aaa']) ? $_GET['aaa'] : 'home'; // Caso 'aaa' não seja passado, assume 'home'

// Inclui o cabeçalho
include 'views/templates/header.php';
?>

<?php if (isset($_SESSION['login_success'])): ?>
  <div id="loginPopup" 
       class="position-fixed top-50 start-50 translate-middle px-4 py-3 rounded shadow-lg text-white text-center"
       style="background-color: mediumblue; z-index: 9999; min-width: 250px;">
    Login realizado com sucesso 🚀
  </div>

  <script>
    // some o popup em 3 segundos
    setTimeout(() => {
      const popup = document.getElementById('loginPopup');
      if (popup) {
        popup.style.transition = "opacity 0.5s ease";
        popup.style.opacity = "0";
        setTimeout(() => popup.remove(), 500); // remove da DOM depois da animação
      }
    }, 3000);
  </script>

  <?php unset($_SESSION['login_success']); ?>
<?php endif; ?>

<?php
// --- CONTEÚDO PRINCIPAL ---
switch ($pagina) {
    case 'home':
        include 'views/home.php';
        break;
    case 'login':
        include 'views/login.php';
        break;
    case 'cadastro':
        include 'views/cadastro.php';
        break;
    case 'perfil':
        include 'views/dashboard.php';
        break;
    default:
        include 'views/home.php';
        break;
    case 'adicionar':
        include 'views/adicionar.php';
        break;    
}

// Inclui o rodapé
include 'views/templates/footer.php';
?>

<?php

include 'views/templates/header.php';

// Obtém o parâmetro 'aaa' da URL
$pagina = $_GET['aaa'] ?? 'views/home'; // Caso 'aaa' não seja passado, assume 'home'

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
}

include 'views/templates/footer.php';
?>

<?php
session_start();
include '../app/Usuario.php'; // Incluindo o model de usuário ou equipe

// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recebe os dados do formulário e faz a limpeza básica
    $nome_equipe = trim($_POST['nome_equipe']);
    $pais = trim($_POST['pais']);
    $ano_fundacao = intval($_POST['ano_fundacao']);
    $principais_jogadores = trim($_POST['principais_jogadores']);

    // Validações simples
    if (empty($nome_equipe) || empty($pais) || empty($ano_fundacao)) {
        $_SESSION['error'] = "Preencha todos os campos obrigatórios!";
        header("Location: adicionar.php");
        exit;
    }

    // Conexão com banco de dados
    $conn = new mysqli("localhost", "root", "", "futguia");
    if ($conn->connect_error) {
        die("Erro na conexão: " . $conn->connect_error);
    }

    // Prepara a query para evitar SQL Injection
    $stmt = $conn->prepare("INSERT INTO equipes (nome_equipe, pais, ano_fundacao, principais_jogadores) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssis", $nome_equipe, $pais, $ano_fundacao, $principais_jogadores);

    if ($stmt->execute()) {
        $_SESSION['success'] = "Equipe adicionada com sucesso!";
        header("Location: dashboard.php"); // Redireciona para o dashboard
    } else {
        $_SESSION['error'] = "Erro ao adicionar a equipe: " . $stmt->error;
        header("Location: adicionar.php");
    }

    $stmt->close();
    $conn->close();
} else {
    header("Location: adicionar.php");
}
?>

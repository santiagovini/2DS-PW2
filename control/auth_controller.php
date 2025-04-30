<?php
session_start();

// Conexão com o banco de dados
$servername = "localhost";
$username = "root";
$password = ""; // padrão do XAMPP
$dbname = "mycine_db";

// Criando a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificando a conexão
if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

// Pegando os dados do formulário
$username_input = $_POST['username'];
$senha = $_POST['senha'];

// Consultando o banco com base no nome de usuário
$sql = "SELECT id, username, senha FROM usuarios WHERE username = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $username_input);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
    $user = $result->fetch_assoc();

    // Verificando a senha
    if (password_verify($senha, $user['senha'])) {
        // Login bem-sucedido
        $_SESSION['usuario_id'] = $user['id'];
        $_SESSION['usuario_nome'] = $user['username'];

        // Redireciona para o dashboard
        header("Location: ../index.php?aaa=perfil");
        exit();
    } else {
        // Senha incorreta
        header("Location: ../index.php?aaa=login&erro=senha");
        exit();
    }
} else {
    // Usuário não encontrado
    header("Location: ../index.php?aaa=login&erro=usuario");
    exit();
}

$stmt->close();
$conn->close();
?>

<?php
// Conexão com o banco de dados
$servername = "localhost";
$username = "root";
$password = ""; // padrão do XAMPP
$dbname = "guiafut_db";

// Criando a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificando a conexão
if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

// Pegando os dados do formulário
$email = $_POST['email'];
$username = $_POST['username'];
$senha = $_POST['senha'];
$confirmar_senha = $_POST['confirmar_senha'];

// Verificando se as senhas coincidem
if ($senha !== $confirmar_senha) {
    header("Location: ../index.php?aaa=cadastro&erro=senhas");
    exit();
}

// Verificando se o e-mail já está cadastrado
$sql_verifica = "SELECT id FROM usuarios WHERE email = ?";
$stmt_verifica = $conn->prepare($sql_verifica);
$stmt_verifica->bind_param("s", $email);
$stmt_verifica->execute();
$stmt_verifica->store_result();

if ($stmt_verifica->num_rows > 0) {
    $stmt_verifica->close();
    $conn->close();
    header("Location: ../index.php?aaa=cadastro&erro=email");
    exit();
}
$stmt_verifica->close();

// Criptografando a senha
$senha_hash = password_hash($senha, PASSWORD_DEFAULT);

// Inserindo no banco
$sql = "INSERT INTO usuarios (email, username, senha) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $email, $username, $senha_hash);

if ($stmt->execute()) {
    // Redireciona para o login com mensagem de sucesso
    header("Location: ../index.php?aaa=login&cadastro=sucesso");
    exit();
} else {
    echo "Erro ao cadastrar: " . $stmt->error;
}

// Fechando conexões
$stmt->close();
$conn->close();
?>

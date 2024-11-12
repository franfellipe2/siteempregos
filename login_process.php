<?php
// Configurações do banco de dados
include './config.php';
session_start();
function sair(){
    $conn->close();
     exit();
}

// Conectar ao banco de dados
$conn = new mysqli(DB_HOST, DB_USER_NAME, DB_PASSWORD, DB_NAME);

// Verificar a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Obter os dados do formulário
$email = $_POST['email'];
$senha = $_POST['senha'];

// Preparar a consulta SQL
$sql = "SELECT * FROM usuarios WHERE email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

// Verificar as credenciais
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if (password_verify($senha, $row['senha'])) {
        // Credenciais corretas, iniciar a sessão
        $_SESSION[LOGIN_USUARIO] = $row['email'];
        header("Location: index.php");
        sair();
    } else {
        $_SESSION['erro_msg'] = "Senha incorreta.";
        header("Location: login_candidato.php");
        sair();
    }
} else {
    $_SESSION['erro_msg'] = "Usuário não encontrado.";
    header("Location: login_candidato.php");
   
}
sair()
?>

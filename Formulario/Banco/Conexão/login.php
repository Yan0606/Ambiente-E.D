<?php
session_start();

// Dados de conexão com o banco de dados (substitua com suas próprias informações)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ambienteed";

// Conectar ao banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar a conexão
if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}

// Obter dados do formulário
$username = $_POST['username'];
$password = $_POST['password'];

// Consulta SQL para verificar as credenciais no banco de dados
$sql = "SELECT * FROM usuarios WHERE nome='$username' AND senha='$password'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    // Credenciais válidas, inicie a sessão
    $_SESSION["username"] = $username;
    header("Location: ../../../web/index.php"); // Redirecione para a página inicial ou para onde desejar após o login
    exit();
} else {
    // Credenciais inválidas, exiba uma mensagem de erro
    $_SESSION["login_error"] = "Credenciais inválidas. Tente novamente.";
    header("Location: ../../formulario-main/form.html"); // Redirecione de volta para a página de login
    exit();
}

$conn->close();

?>


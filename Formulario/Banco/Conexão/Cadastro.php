<?php
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
$nome = $_POST['nome'];
$email = $_POST['email'];
$datanasc = $_POST['datanasc'];
$senha = $_POST['senha'];

var_dump($nome);
var_dump($email);
var_dump($datanasc);
var_dump($senha);

// Inserir dados no banco de dados
$sql = "INSERT INTO usuarios (nome, email, data_nascimento, senha)
        VALUES ('$nome', '$email', '$datanasc', '$senha')";

if ($conn->query($sql) === TRUE) {
    header("Location: ../../formulario-main/form.html");
    exit();
} else {
    echo "Erro ao cadastrar: " . $conn->error;
}

$conn->close();

?>
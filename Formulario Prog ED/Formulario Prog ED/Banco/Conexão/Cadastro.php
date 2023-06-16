<?php
include("conexao.php");

$nome = $_POST['inputCadastroNome'];
$email = $_POST['inputCadastroemail'];
$senha = $_POST['inputCadastrosenha'];
$datanasc = $_POST['inputCadastrodatanasc'];

$sql="INSERT INTO dados(nome, email, senha,datanasc) VALUES ('$nome', '$email','$senha', '$datanasc')";

if(mysqli_query($conexao, $sql)){
    echo"Usuário Cadastrado com sucesso";
}
else {
    echo "Erro!".mysqli_connect_error($conexao);
}

mysqli_close($conexao);

?>
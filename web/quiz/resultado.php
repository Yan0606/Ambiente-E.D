<?php
session_start();

//verifica
if (!isset($_SESSION["username"])) {
  header("../../formulario-main/form.html");
  exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resultado do Quiz</title>
  <link rel="stylesheet" href="../css/quiz.css">
</head>

<body>
  <div class="result-container">
    <?php
    // Perguntas e respostas corretas
    $perguntas = [
      "pergunta1" => 3,
      "pergunta2" => 10,
      "pergunta3" => 80,
      "pergunta4" => 49,
      "pergunta5" => "Sim" // Resposta correta em string
    ];

    // Inicializa a pontuação
    $pontuacao = 0;

    // Processa as respostas e calcula a pontuação
    foreach ($perguntas as $pergunta => $respostaCorreta) {
      if (isset($_POST[$pergunta])) {
        $respostaUsuario = $_POST[$pergunta];

        if ($respostaUsuario == $respostaCorreta) {
          $pontuacao++;
        }
      }
    }

    // Exibe a pontuação
    echo "<h2>Resultado do Quiz</h2>";
    echo "<p>Você acertou $pontuacao de " . count($perguntas) . " perguntas.</p>";

    // Conexão com o banco de dados
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "ambienteed";

    // Cria uma conexão com o banco de dados
    $conn = new mysqli($servername, $username, $password, $database);

    // Verifica a conexão
    if ($conn->connect_error) {
      die("Erro na conexão com o banco de dados: " . $conn->connect_error);
    }

    // Obtém o ID do usuário logado (você deve ter uma tabela de usuários com um campo 'id')
    $username = $_SESSION["username"];
    $sql = "SELECT id FROM usuarios WHERE nome = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
      $row = $result->fetch_assoc();
      $usuario_id = $row["id"];

      // INSERE OS PONTOS NO BANCO DE DADOS DA TABELA resultados_quiz
      $sql = "INSERT INTO resultados_quiz (usuario_id, resultado) VALUES ('$usuario_id', '$pontuacao')";

      if ($conn->query($sql) === TRUE) {
        echo "Pontos inseridos com sucesso!";
      } else {
        echo "Erro ao inserir pontos: " . $conn->error;
      }
    }

    // Fecha a conexão com o banco de dados
    $conn->close();

    // Exibe uma mensagem de acordo com a pontuação
    if ($pontuacao == count($perguntas)) {
      echo "<p>Parabéns! Você acertou todas as perguntas!</p>";
    } elseif ($pontuacao >= 3) {
      echo "<p>Você se saiu bem, continue estudando!</p>";
    } else {
      echo "<p>Estude mais para melhorar sua pontuação.</p>";
    }
    ?>
    <a href="../index.php"><button>SAIR</button></a>
  </div>
</body>

</html>
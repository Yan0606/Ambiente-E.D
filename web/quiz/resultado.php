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
      "pergunta1" =>"Uma coleção de elementos sem nenhuma ordem especifica",
      "pergunta2" =>"Inserção e remoção eficientes em qualquer direção",
      "pergunta3" =>"Um conjunto de operações bem definido em um tipo de dado, ocultando a aplicação subjacente",
      "pergunta4" =>"Inserir elementos no topo e remover elementos do topo.",
      "pergunta5" =>"A fila encadeada segue o princípio FIFO, enquanto a pilha segue o princípio LIFO.", // Resposta correta em string
      "pergunta6" =>"Uma fila que mantém os elementos organizados de acordo com um valor de prioridade associado a cada elemento.",
      "pergunta7" =>"return items.Count == 0;",
      "pergunta8" =>"public int Dequeue(){if (!IsEmpty()){return items.Dequeue();}else{return -1;}}",
      "pergunta9" =>"Eficiência e correção.",
      "pergunta10"=>"Melhorar a eficiência do programa e facilitar a manipulação de dados."
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
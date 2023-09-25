<?php
  session_start();
  if(empty($_SESSION)){
    print "<script>location.href='../../Formulario/formulario-main/form.html'</script>";
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Quiz em PHP</title>
  <link rel="stylesheet" href="../css/quiz.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RwuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>

  <div class="quiz-container">
    <h2>TESTE SEU CONHECIMENTO</h2>
    <form action="resultado.php" method="post">
      <!-- Pergunta 1 -->
      <fieldset>
        <legend>1. Quanto é 1 + 2?</legend>
        <label>
          <input type="radio" name="pergunta1" value="3" required> 3
        </label>
        <label>
          <input type="radio" name="pergunta1" value="2"> 2
        </label>
        <label>
          <input type="radio" name="pergunta1" value="4"> 4
        </label>
        <label>
          <input type="radio" name="pergunta1" value="5"> 5
        </label>
      </fieldset>

      <!-- Pergunta 2 -->
      <fieldset>
        <legend>2. Quanto é 5 x 2?</legend>
        <label>
          <input type="radio" name="pergunta2" value="9"> 9
        </label>
        <label>
          <input type="radio" name="pergunta2" value="10" required> 10
        </label>
        <label>
          <input type="radio" name="pergunta2" value="11"> 11
        </label>
        <label>
          <input type="radio" name="pergunta2" value="12"> 12
        </label>
      </fieldset>

      <!-- Pergunta 3 -->
      <fieldset>
        <legend>3. Quanto é 10 x 8?</legend>
        <label>
          <input type="radio" name="pergunta3" value="70"> 70
        </label>
        <label>
          <input type="radio" name="pergunta3" value="90"> 90
        </label>
        <label>
          <input type="radio" name="pergunta3" value="80" required> 80
        </label>
        <label>
          <input type="radio" name="pergunta3" value="100"> 100
        </label>
      </fieldset>

      <!-- Pergunta 4 -->
      <fieldset>
        <legend>4. Quanto é 7 x 7?</legend>
        <label>
          <input type="radio" name="pergunta4" value="42"> 42
        </label>
        <label>
          <input type="radio" name="pergunta4" value="63"> 63
        </label>
        <label>
          <input type="radio" name="pergunta4" value="49" required> 49
        </label>
        <label>
          <input type="radio" name="pergunta4" value="56"> 56
        </label>
      </fieldset>

      <!-- Pergunta 5 -->
      <fieldset>
        <legend>5. Rafael é lindo?</legend>
        <label>
          <input type="radio" name="pergunta5" value="Sim" required> Sim
        </label>
        <label>
          <input type="radio" name="pergunta5" value="Mais ou menos"> Mais ou menos
        </label>
        <label>
          <input type="radio" name="pergunta5" value="Não"> Não
        </label>
      </fieldset>

      <button type="submit">Enviar</button>
    </form>
  </div>
</body>
</html>

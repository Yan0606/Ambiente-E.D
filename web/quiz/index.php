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
        <legend>1. O que é uma lista encadeada?</legend>
        <label>
          <input type="radio" name="pergunta1" value="Uma coleção de elementos sem nenhuma ordem especifica" required> Uma coleção de elementos sem nenhuma ordem especifica
        </label>
        <label>
          <input type="radio" name="pergunta1" value="Uma sequência ordenada de elementos onde cada elemento pode indicar para o proximo elemento"> Uma sequência ordenada de elementos onde cada elemento pode indicar para o proximo elemento
        </label>
        <label>
          <input type="radio" name="pergunta1" value="Uma matriz multidimensional"> Uma matriz multidimensional
        </label>
        <label>
          <input type="radio" name="pergunta1" value="Um conjunto de elementos em que cada elemento pode ter valores múltiplos"> Um conjunto de elementos em que cada elemento pode ter valores múltiplos
        </label>
      </fieldset>

      <!-- Pergunta 2 -->
      <fieldset>
        <legend>2. Qual é a vantagem de uma lista duplamente encadeada em relação a uma lista simplesmente encadeada?</legend>
        <label>
          <input type="radio" name="pergunta2" value="Acesso mais rápido"> Acesso mais rápido
        </label>
        <label>
          <input type="radio" name="pergunta2" value="Inserção e remoção eficientes em qualquer direção" required> Inserção e remoção eficientes em qualquer direção
        </label>
        <label>
          <input type="radio" name="pergunta2" value="Menor uso de memória"> Menor uso de memória
        </label>
        <label>
          <input type="radio" name="pergunta2" value="Facilidade de implementação"> Facilidade de implementação
        </label>
      </fieldset>

      <!-- Pergunta 3 -->
      <fieldset>
        <legend>3. O que é um Tipo Abstrato de Dados (TAD)?</legend>
        <label>
          <input type="radio" name="pergunta3" value="Uma representação concreta de um conjunto de dados."> Uma representação concreta de um conjunto de dados.
        </label>
        <label>
          <input type="radio" name="pergunta3" value="Um algoritmo de ordenação para dados encadeados."> Um algoritmo de ordenação para dados encadeados.
        </label>
        <label>
          <input type="radio" name="pergunta3" value="Um conjunto de operações bem definido em um tipo de dado, ocultando a aplicação subjacente" required> Um conjunto de operações bem definido em um tipo de dado, ocultando a aplicação subjacente
        </label>
        <label>
          <input type="radio" name="pergunta3" value="Um método para criar estruturas de dados complexas."> Um método para criar estruturas de dados complexas.
        </label>
      </fieldset>

      <!-- Pergunta 4 -->
      <fieldset>
        <legend>4. Quais operações são comuns em uma pilha encadeada?</legend>
        <label>
          <input type="radio" name="pergunta4" value="Inserir e remover elementos em qualquer posição."> Inserir e remover elementos em qualquer posição.
        </label>
        <label>
          <input type="radio" name="pergunta4" value="Inserir elementos no final e remover elementos do início."> Inserir elementos no final e remover elementos do início.
        </label>
        <label>
          <input type="radio" name="pergunta4" value="Inserir elementos no topo e remover elementos do topo." required> Inserir elementos no topo e remover elementos do topo.
        </label>
        <label>
          <input type="radio" name="pergunta4" value="Inserir elementos no início e remover elementos do final."> Inserir elementos no início e remover elementos do final.
        </label>
      </fieldset>

      <!-- Pergunta 5 -->
      <fieldset>
        <legend>5. Qual é a principal diferença entre uma fila encadeada e uma pilha encadeada?</legend>
        <label>
          <input type="radio" name="pergunta5" value="A fila encadeada segue o princípio FIFO, enquanto a pilha segue o princípio LIFO." required> A fila encadeada segue o princípio FIFO, enquanto a pilha segue o princípio LIFO.
        </label>
        <label>
          <input type="radio" name="pergunta5" value="A fila encadeada permite inserção e remoção em qualquer posição, enquanto a pilha não permite."> A fila encadeada permite inserção e remoção em qualquer posição, enquanto a pilha não permite.
        </label>
        <label>
          <input type="radio" name="pergunta5" value="A fila encadeada permite acesso direto aos seus elementos, enquanto a pilha não permite."> A fila encadeada permite acesso direto aos seus elementos, enquanto a pilha não permite.
        </label>
        <label>
            <input type="radio" name="pergunta5" value="A fila encadeada mantém os elementos organizados em ordem alfabética, enquanto a pilha não mantém."> A fila encadeada mantém os elementos organizados em ordem alfabética, enquanto a pilha não mantém.
          </label>
      </fieldset>

       <!-- Pergunta 6 -->
       <fieldset>
        <legend>6. O que é uma fila de prioridades encadeada?</legend>
        <label>
          <input type="radio" name="pergunta6" value="Uma fila que mantém os elementos organizados de acordo com um valor de prioridade associado a cada elemento." required> Uma fila que mantém os elementos organizados de acordo com um valor de prioridade associado a cada elemento.
        </label>
        <label>
          <input type="radio" name="pergunta6" value="Uma fila onde os elementos são organizados em ordem alfabética."> Uma fila onde os elementos são organizados em ordem alfabética.
        </label>
        <label>
          <input type="radio" name="pergunta6" value="Uma fila que segue o princípio FIFO, mas com inserção e remoção em qualquer posição."> Uma fila que segue o princípio FIFO, mas com inserção e remoção em qualquer posição.
        </label>
        <label>
            <input type="radio" name="pergunta6" value="Uma fila onde os elementos são organizados de acordo com um valor de tamanho associado a cada elemento."> Uma fila onde os elementos são organizados de acordo com um valor de tamanho associado a cada elemento.
          </label>
      </fieldset>

      <!-- Pergunta 7 -->
      <fieldset>
        <legend>7. Onde está o erro?public bool IsEmpty(){return items.Count = 0;}</legend>
        <label>
          <input type="radio" name="pergunta7" value="public bolo IsEmpty()"> public bolo IsEmpty()
        </label>
        <label>
          <input type="radio" name="pergunta7" value="return items.Count == 0;" required> return items.Count == 0;
        </label>
        <label>
          <input type="radio" name="pergunta7" value="return items.Count ==> 0;">return items.Count ==> 0;
        </label>
        <label>
          <input type="radio" name="pergunta7" value="return itens.Count <= 0;"> return itens.Count <= 0;
        </label>
      </fieldset>

      
      <!-- Pergunta 8 -->
      <fieldset>
        <legend>8. Onde está o erro?public int Dequeue()if (!IsEmpty()){return items.Dequeue();}else{return -1;}</legend>
        <label>
          <input type="radio" name="pergunta8" value="public int Dequeue()if (!IsEmpty()){return items.Dequeue();else{return -1;"> public int Dequeue()if (!IsEmpty()){return items.Dequeue();else{return -1;
        </label>
        <label>
          <input type="radio" name="pergunta8" value="public int Dequeue(){if (!IsEmpty()){return items.Dequeue();}else{return -1;}}" required> public int Dequeue(){if (!IsEmpty()){return items.Dequeue();}else{return -1;}}
        </label>
        <label>
          <input type="radio" name="pergunta8" value="public int Dequeue if (!IsEmpty() return items.Dequeue();}else{return -1;}">public int Dequeue if (!IsEmpty() return items.Dequeue();}else{return -1;}
        </label>
        <label>
          <input type="radio" name="pergunta8" value="public int Dequeue()if (!IsEmpty(){return itens.Dequeue();}else{return -1;}">public int Dequeue()if (!IsEmpty(){return itens.Dequeue();}else{return -1;}
        </label>
      </fieldset>

      <!-- Pergunta 9 -->
      <fieldset>
        <legend>9. Quais são os dois principais aspectos a serem considerados ao codificar uma estrutura de dados?</legend>
        <label>
          <input type="radio" name="pergunta9" value="Nomes de variáveis e formatação de texto.">Nomes de variáveis e formatação de texto.
        </label>
        <label>
          <input type="radio" name="pergunta9" value="Uso de núcleos e tipos de fonte."> Uso de núcleos e tipos de fonte.
        </label>
        <label>
          <input type="radio" name="pergunta9" value="Comentários de código e histórico de versão."> Comentários de código e histórico de versão.
        </label>
        <label>
          <input type="radio" name="pergunta9" value="Eficiência e correção."  required> Eficiência e correção.
        </label>
      </fieldset>

        <!-- Pergunta 10 -->
        <fieldset>
            <legend>10. Qual é o objetivo principal ao codificar uma estrutura de dados?</legend>
            <label>
              <input type="radio" name="pergunta10" value="Tornar o código mais complexo para desafiar os programadores."> Tornar o código mais complexo para desafiar os programadores.
            </label>
            <label>
              <input type="radio" name="pergunta10" value="Melhorar a eficiência do programa e facilitar a manipulação de dados." required> Melhorar a eficiência do programa e facilitar a manipulação de dados.
            </label>
            <label>
              <input type="radio" name="pergunta10" value="Reduzir a legibilidade do código para proteger informações sensíveis.">Reduzir a legibilidade do código para proteger informações sensíveis.
            </label>
            <label>
              <input type="radio" name="pergunta10" value="Adicionar cores e estilos visuais para tornar o código mais atraente.">Adicionar cores e estilos visuais para tornar o código mais atraente.
            </label>
          </fieldset>

      <button type="submit">Enviar </button>
    </form>
  </div>
</body>
</html>

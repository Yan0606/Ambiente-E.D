let questions = [
    {
    numb: 1,  //NUMERO DA QUESTÃO
    question: "O que é uma lista encadeada?", //COLOCAR PERGUNTA
    answer: "Uma coleção de elementos sem nenhuma ordem especifica", //COLOCAR RESPOSTA DA PERGUNTA
    options: [
      "Uma sequência ordenada de elementos onde cada elemento pode indicar para o proximo elemento",                   //COLOCAR OPÇÕES DE RESPOSTA E ENTRE ELAS A RESPOSTA CORRETA DA PERGUNTA QUE ESTÁ LOGO ACIMA!
      "Uma matriz multidimensional",
      "Uma coleção de elementos sem nenhuma ordem especifica",
      "Um conjunto de elementos em que cada elemento pode ter valores múltiplos"
    ]
  },
    {
    numb: 2,
    question: "Qual é a vantagem de uma lista duplamente encadeada em relação a uma lista simplesmente encadeada?",
    answer: "Inserção e remoção eficientes em qualquer direção",
    options: [
      "Acesso mais rápido",
      "Menor uso de memória",
      "Facilidade de implementação",
      "Inserção e remoção eficientes em qualquer direção"
    ]
  },
    {
    numb: 3,
    question: "O que é um Tipo Abstrato de Dados (TAD)?",
    answer: "Um conjunto de operações bem definido em um tipo de dado, ocultando a aplicação subjacente",
    options: [
      "Uma representação concreta de um conjunto de dados.",
      "Um conjunto de operações bem definido em um tipo de dado, ocultando a aplicação subjacente",
      "Um algoritmo de ordenação para dados encadeados.",
      " Um método para criar estruturas de dados complexas. "
    ]
  },
    {
    numb: 4,
    question: "Quais operações são comuns em uma pilha encadeada? ",
    answer: "Inserir elementos no topo e remover elementos do topo.",
    options: [
      "Inserir e remover elementos em qualquer posição.",
      "Inserir elementos no final e remover elementos do início.",
      "Inserir elementos no início e remover elementos do final.",
      "Inserir elementos no topo e remover elementos do topo."
    ]
  },
    {
    numb: 5,
    question: "Qual é a principal diferença entre uma fila encadeada e uma pilha encadeada?",
    answer: "A fila encadeada segue o princípio FIFO, enquanto a pilha segue o princípio LIFO.",
    options: [
      "A fila encadeada segue o princípio FIFO, enquanto a pilha segue o princípio LIFO.",
      "A fila encadeada permite inserção e remoção em qualquer posição, enquanto a pilha não permite.",
      "A fila encadeada permite acesso direto aos seus elementos, enquanto a pilha não permite.",
      "A fila encadeada mantém os elementos organizados em ordem alfabética, enquanto a pilha não mantém."
    ]
  },
  {
    numb: 6,
    question: "O que é uma fila de prioridades encadeada?",
    answer: "Uma fila que mantém os elementos organizados de acordo com um valor de prioridade associado a cada elemento.",
    options: [
      "Uma fila onde os elementos são organizados em ordem alfabética.",
      "Uma fila que segue o princípio FIFO, mas com inserção e remoção em qualquer posição.",
      "Uma fila que mantém os elementos organizados de acordo com um valor de prioridade associado a cada elemento.",
      "Uma fila onde os elementos são organizados de acordo com um valor de tamanho associado a cada elemento."
    ]
  },
  {
    numb: 7,
    question: "Qual é o objetivo principal ao codificar uma estrutura de dados?",
    answer: "Melhorar a eficiência do programa e facilitar a manipulação de dados.",
    options: [
      "Tornar o código mais complexo para desafiar os programadores.",
      "Reduzir a legibilidade do código para proteger informações sensíveis.",
      "Melhorar a eficiência do programa e facilitar a manipulação de dados.",
      "Adicionar cores e estilos visuais para tornar o código mais atraente."
    ]
  },
  {
    numb: 8,
    question: "Quais são os dois principais aspectos a serem considerados ao codificar uma estrutura de dados?",
    answer: "Eficiência e correção.",
    options: [
      "Nomes de variáveis e formatação de texto.",
      "Uso de núcleos e tipos de fonte.",
      "Eficiência e correção.",
      "Comentários de código e histórico de versão."
    ]
  },
  {
    numb: 9,
    question: "Por que a escolha de uma estrutura de dados é importante ao codificar?",
    answer: "A estrutura de dados pode afetar a eficiência, a escalabilidade e a facilidade de manutenção do código.",
    options: [
      "Uma estrutura de dados não afeta o desempenho do código.",
      "A escolha da estrutura de dados é apenas uma questão de preferência pessoal.",
      "A estrutura de dados pode afetar a eficiência, a escalabilidade e a facilidade de manutenção do código.",
      "Estruturas de dados não têm impacto na organização do código."
    ]
  },
  {
    numb: 10,
    question: "Na encomenda de uma árvore binária, quais são os nós que não temos filhos?",
    answer: "Nós folha.",
    options: [
      "Nós internos.",
      "Nós raiz.",
      "Nós folha.",
      "Nós intermediários."
    ]
  },
 
  {
    numb: 11,
    question: "Onde está o erro?public bool IsEmpty(){return items.Count = 0;}",
    answer: "return items.Count == 0;",
    options: [
      "public bolo IsEmpty()",
      "return items.Count == 0;",
      "return itens.Count <= 0;",
      "return items.Count ==> 0;"
    ]
  },
  {
    numb: 12,
    question: "Onde está o erro?public int Dequeue()if (!IsEmpty()){return items.Dequeue();}else{return -1;}",
    answer: "public int Dequeue(){if (!IsEmpty()){return items.Dequeue();}else{return -1;}}",
    options: [
      "public int Dequeue()if (!IsEmpty()){return items.Dequeue();else{return -1;",
      "public int Dequeue if (!IsEmpty() return items.Dequeue();}else{return -1;}",
      "public int Dequeue()if (!IsEmpty(){return itens.Dequeue();}else{return -1;}",
      "public int Dequeue(){if (!IsEmpty()){return items.Dequeue();}else{return -1;}}"
    ]
  },
];

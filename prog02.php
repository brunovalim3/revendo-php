<?php
    include "biblioteca.php";

    /*
    Aqui vão alguns conceitos que não tem como esquecer e são os básicos do php
    ou quase qualquer linguagem.
  */

  //Comentários de Linha
  // Um comentário.
  # Outro comentário

  // Comandos de saída
  // Temos como comando de saída: echo, print, var_dump, print_r

  // Tipos de dados

  // Boleano
  # $luzAcesa = TRUE;

  // Numérico
  # $num = 10;

  // String
  # $minhaString = 'Hello, world!';
  # $minhaString = "Hello, world!";

  // Array
  # $linguagens = Array('C', 'C++', 'C#', 'Java', 'PHP', 'Ruby', 'Python');
  # $linguagens = ['C', 'C++', 'C#', 'Java', 'PHP', 'Ruby', 'Python'];

  // Objeto
  class Pessoa {
    private string $nome;
    function __construct(string $nome) {
      $this->nome = $nome;
    }
    public function falarNome(bool $modoTexto = false) {
      $quebraLinha = $modoTexto === true ? "\n" : "";
      echo "Olá, meu nome é " . $this->nome . $quebraLinha;
    }
  }
  $fulano = new Pessoa('Fulano');
  $fulano->falarNome(true);

  /*
    Tipo callback
    Sinceramente eu particularmente nunca usei o tipo callback no php, já vi o
    conceito no javascript mas mais a frente crio um exemplo usando esse tipo.
  */

  // Tipo null
  # $temperatura = NULL;

  // Constantes
  # define("TEMPERATURA", 2);

  // Operadores
  // atribuição (+=, -=, *=, /=);
  // Aritméticos (+, -, *, /, %);
  // Relacionais (==, ===, !=, <, >, <=, >=)
  // Lógicos (and, or, xor[o qual eu nunca usei], !, &&, ||)

  // Estruturas de controle(vou somente citá-las para não ser cansativo)
  // if, else, while, for, switch, foreach

  // Requisição de arquivos
  /*
    A requisição está aplicada no topo do arquivo na linha 1,
    mas vou replicá-la aqui, dentro do arquivo temos a função "soma"
    soma(float $a, float $b): float
    include "biblioteca.php";

    include da warning caso dê erro e o require da fatal error
    ou seja, um tenta executar o script e o outro trava logo na requisição

    include_once e require_once não requisita novamente se o arquivo já
    tiver sido requisitado.
  */
  $resultado = soma(5.5, 3);
  echo "O valor da soma é: " . $resultado. "\n";

  // Funções
  # Criando
  function subtracao(float $a, float $b) {
    return $a - $b;
  }
  # Usando
  $resultadoSubtracao = subtracao(5.1, 2);
  /*
    Uma coisa bacana(ou não) que eu encontrei foi uma função
    que pega os argumentos passados para uma função que não foram
    pré-definidos: func_get_args e func_num_args.
  */
  // Função recursiva, eu entendo o conceito mas é muito específico o seu uso

  // Manipulação de arquivos ficará em uma pasta separada: prog03



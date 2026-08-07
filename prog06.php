<?php
// Manipulação de objetos

// Criando classe de exemplo
class Pessoa {
  private string $nome;

  // public string $nome;

  function __construct(string $nome) {
    $this->nome = $nome;
  }
  public function falarNome(bool $modoTexto = false) {
    $quebraLinha = $modoTexto === true ? "\n" : "";
    echo "Olá, meu nome é " . $this->nome . $quebraLinha;
  }
}
// Objeto de exemplo
$fulano = new Pessoa('Fulano');

/*
  Ao debugar o resultado eu aproveito para ver a
  diferença do var_dump para o print_r.
  Vemos que este método retorna um array com
  o nome dos métodos da classe
*/
// var_dump(get_class_methods('Pessoa'));
// print_r(get_class_methods('Pessoa'));

// Testando o get_class_vars
/*
  Gera um array vazio porque a unica propriedade que tem está como "private",
  para aparecer basta mudar para public.
  Ao mudar para public vemos que retorna um array de chave e valor com o
  nome da propriedade e valor.
*/
// var_dump(get_class_vars('Pessoa'));
// print_r(get_class_vars('Pessoa'));

// Além dessas tem outras diversas funçoes, assim como para arrays
/*
  get_object_vars = Retorna propriedades de um objeto
  get_class = Retorna o nome da classe de um objeto
  get_parent_class = Retorna o nome da classe pai de um objeto
  is_subclass_off, call_user_func e entre outros mais...
*/

class Pintor extends Pessoa {
  private $precoMetroQuadrado = 200;

  function retornarOrcamento(float $metragemObra = 0) {
    return $metragemObra * $this->precoMetroQuadrado;
  }
}

$pintor = new Pintor("Fulano");
echo $pintor->retornarOrcamento(260);

// echo get_class($pintor) . "\n";
// echo get_parent_class($pintor) . "\n";

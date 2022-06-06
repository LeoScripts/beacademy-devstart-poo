<?php


declare(strict_types=1);

class Produto {
  // private = atributo privado
  private string $nome; 
  private float $valor;

  // metodos --------------------------------------

  // acessando o atributo privdo nome
  public function pegarNome(): string
  {
    return $this->nome;
  }

  // acessando o atributo privado nome e alterando o seu valor
  public function alterarNome(string $novoNome): void
  {
     $this->nome = $novoNome;
  }

  // acessando o atributo privado valor e alterando o seu valor se 
  public function alterarValor(float $novoValor): void
  {
    // aqui estamos corrigindo a questao do valor
    // ou seja nao aceitamos numeros negativos 
    // porque isso e um preco
    if($novoValor < 0){
      die('Ops, valor nao pode ser negativo');
    }
     $this->valor = $novoValor;
  }
}

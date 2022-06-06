<?php


declare(strict_types=1);

class Produto {
  // private = atributo privado
  private string $nome; 
  private float $valor;

  // metodos --------------------------------------

  // pegando o atributo privdo nome
  // metos get sempre retornam alguma coisa
  public function getNome(): string
  {
    return $this->nome;
  }

  public function getValor(): string
  {
    return $this->valor;
  }

  // acessando o atributo privado nome e alterando o seu valor
  // dificilmente retorna algum valor
  // os metodos set pois sua função e so alterar
  public function setNome(string $novoNome): void
  {
     $this->nome = $novoNome;
  }

  public function setValor(float $novoValor): void
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

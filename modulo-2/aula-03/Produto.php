<?php


declare(strict_types=1);

class Produto {
  private string $nome; 
  private float $valor;
  private string $descricao; // inserindo atributo opcional

  // metodo construtor = metodo magico de contrução do objeto
  // agora e obrigatorio passar pomo paramentro na hora da criaçao 
  // la no nosso arquivo
  // pois no momento da criação do objeto este metodo e invocado
  public function __construct(string $novoNome, float $novoValor)
  {
    $this->nome = $novoNome;
    $this->valor = $novoValor;
  }

  public function getNome(): string
  {
    return $this->nome;
  }

  public function getValor(): string
  {
    return $this->valor;
  }

  public function setNome(string $novoNome): void
  {
     $this->nome = $novoNome;
  }

  public function setValor(float $novoValor): void
  {
    if($novoValor < 0){
      die('Ops, valor nao pode ser negativo');
    }
     $this->valor = $novoValor;
  }

  // lendo metodo opcional
  public function getDescricao(): string
  {
    return $this->descricao;
  }

  // inserindo metodo opcional
  public function setDescricao(string $novaDescricao): void
  {
    $this->descricao = $novaDescricao;
  }

}

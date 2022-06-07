<?php


declare(strict_types=1);

class Produto {
  private string $nome; 
  private float $valor;

  // isso esta disponivel apenas no PHP 8.1
  private readonly string $descricao; 

  // inserindo relacinamento com categoria
  private Categoria $categoria;

                                                              // inserindo a categoria
                                                              // com o tipo Categoria
  public function __construct(string $novoNome, float $novoValor, Categoria $categoria)
  {
    $this->nome = $novoNome;
    $this->valor = $novoValor;
    $this -> categoria = $categoria;
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

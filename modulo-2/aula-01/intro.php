<?php

include 'Aluno.php';

// intanciano aluno
$a1 = new Aluno(); 
$a1->nome = 'Alessandro';
$a2->cpf = '123.123.123-12';
// -------------------------------

$aluno = [
  'nome' => 'Alessandro',
  'cpf' => '123.123.123-12',
];

$aluno2 = [
  'Nome' => 'Brno',
  'cpf' => '123.123.123-33',
];

$aluno3 = [
  'NOME' => 'Rachel',
  'CPF' => '123.123.123-23',
];
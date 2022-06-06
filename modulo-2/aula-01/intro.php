<?php

include 'Aluno.php';
include 'Professor.php';
include 'Curso.php';

// intanciano aluno
$a1 = new Aluno(); 
$a1->nome = 'Alessandro';
$a1->cpf = '123.123.123-12';

// instaciando curso
$cursoPHP = new Curso();
$cursoPHP-> nome = 'Introfução ao PHP';
$cursoPHP-> duracao = 88;
$cursoPHP-> decricao = 'Aprender o basico e intermediario do PHP';

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

// exibindo no browser
echo "<h1>Aluno: {$a1->nome}</h1>";

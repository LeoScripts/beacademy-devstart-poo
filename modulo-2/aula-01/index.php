<?php



include 'Aluno.php';
include 'Professor.php';
include 'Curso.php';

$p1 = new Professor();
$p1->nome = 'Alessandro';
$p1->cpf = '  023.123.123-12';
$p1->salario = 1000;

var_dump($p1);
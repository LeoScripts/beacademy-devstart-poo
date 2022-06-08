<?php

ini_set('display_errors', 1);

include 'Logar.php';
include 'Diretor.php';

$email = 'zezim@email.com';
$senha ='12345679abc';

$g1 = new Diretor();
$g1->logarEmail($email, $senha);


echo 'usuario logado';
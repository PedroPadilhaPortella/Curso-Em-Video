<?php
require_once "Caneta.php";

$caneta01 = new Caneta;

$caneta01->cor = "Azul";

$caneta01->ponta = 0.5;

$caneta01->tampado = false;

$caneta01->Tampar();

$caneta01->Rabiscar();

print_r($caneta01);

$caneta01->Destampar();

$caneta01->Rabiscar();

print_r($caneta01);

?>
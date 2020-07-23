<?php
require_once "Mouse.php";
require_once "Treino.php";

$mouseOptico = new Mouse;
$mouseOptico->corLed = "Vermelho";
$mouseOptico->conexao = "USB";
$mouseOptico->ligado = false;
$mouseOptico->Usar();
$mouseOptico->Conectar();
$mouseOptico->Usar();


$peito = new Treino;
$peito->treino = "peito";
$peito->energia = 10;
$peito->repeticao = 0;
$peito->Treinar();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animais</title>
</head>
<body>
<h1>Classe de Animais</h1>
    <pre>
<?php

require_once "Mamifero.php";
require_once "Reptil.php";
require_once "Peixe.php";
require_once "Ave.php";
require_once "Animal.php";

require_once "Arara.php";
require_once "Tartaruga.php";
require_once "Cobra.php";
require_once "Jacu.php";
require_once "Cachorro.php";
require_once "Canguru.php";


//$animal = new Animal();

$mamifero = new Mamifero();
$reptil = new Reptil();
$peixe = new Peixe();
$ave = new Ave();

$arara = new Arara();
$tartaruga = new Tartaruga();
$cobra = new Cobra();
$jacu = new Jacu();
$cachorro = new Cachorro();
$canguru = new Canguru();

$mamifero->locomover();
$reptil->locomover();
$peixe->locomover();
$ave->locomover();

$arara->locomover();
$tartaruga->locomover();
$canguru->locomover();
$jacu->locomover();
$cachorro->locomover();
$cobra->locomover();


$mamifero->emitirSom();
$cachorro->emitirSom();
?>
    </pre>
</body>
</html>
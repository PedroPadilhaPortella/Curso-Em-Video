<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1></h1>
    <pre>
<?php

require_once 'Mamifero.php';
require_once 'Lobo.php';
require_once 'Cachorro.php';

$mamifero = new Mamifero();
$lobo = new Lobo();
$cachorro = new Cachorro();

$mamifero->emitirSom();
$lobo->emitirSom();
$cachorro->emitirSom();

$cachorro->reagirDono('Pedro');
$cachorro->reagirDono('Edwin');
$cachorro->reagirHorario(8);
$cachorro->reagirHorario(18);
$cachorro->reagirFrase("Cala boca");



?>
    </pre>
</body>
</html>
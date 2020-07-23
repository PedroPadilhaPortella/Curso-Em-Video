<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Controle Remoto Orientado a Objetos</h2>
<pre>
    <?php
require_once "ControleRemoto.php";

$control = new ControleRemoto();

$control->ligar();
$control->menosVolume();
$control->menosVolume();
$control->menosVolume();
$control->maisVolume();
$control->ligarMudo();
$control->play();
$control->desligarMudo();
$control->abrirMenu();
$control->pause();
$control->desligar();


    ?>
</pre>
</body>
</html>
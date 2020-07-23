<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
    <?php
require_once "Caneta.php";

$caneta = new Caneta;
$caneta->modelo = "BIC Cristal";
$caneta->cor = "preta";
//$caneta->ponta = 0.5;  private
//$caneta->carga = 70;  protected
//$caneta->tampada = true;  protected

$caneta->Rabiscar();

$caneta->Tampar();
$caneta->Destampar();

print_r($caneta);
?>
    </pre>
</body>
</html>
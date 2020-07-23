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
require_once "ContaBancaria.php";

$conta001 = new ContaBancaria(); //Jubileu
$conta002 = new ContaBancaria(); //Creuza

$conta001->abrirConta("cc");
$conta001->setCliente("Jubileu");
$conta001->depositar(600);
$conta001->pagarAnuidade();
$conta001->fecharConta();
$conta001->sacar(638);
$conta001->fecharConta();

$conta002->abrirConta("cp");
$conta002->setCliente("Creuza");
$conta002->depositar(400);
$conta002->sacar(100);
$conta002->pagarAnuidade();
$conta002->sacar(10000);
$conta001->fecharConta();


print_r($conta001);
print_r($conta002);
?>
</pre>
</body>
</html>
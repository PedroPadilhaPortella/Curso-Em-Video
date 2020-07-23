<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
<pre>
<?php
require_once "Pessoa.php";
require_once "Livro.php";

$pessoa[0] = new Pessoa ('Pedro', 19, 'Masculino');
$pessoa[1] = new Pessoa ('Maria', 15, 'Feminino');

$livro[0] = new Livro ('C# para Leigos', "Diego Mariano", 270, $pessoa[0]);
$livro[1] = new Livro ('Javascript moderno', "Guanabara", 320, $pessoa[1]);
$livro[2] = new Livro ('MVC Avancado e TDD', "Donny Roney", 100, $pessoa[0]);

$livro[0]->abrir();
$livro[0]->folhear(12);
$livro[0]->voltarPagina();
$livro[0]->fechar();
$livro[0]->detalhes();


?>
</pre>
</body>
</html>
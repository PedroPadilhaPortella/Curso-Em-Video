<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Herança</title>
</head>
<body>
<h1></h1>
<pre>
<?php
require_once "Pessoa.php";
require_once "Aluno.php";
require_once "Professor.php";
require_once "Funcionario.php";

$p1 = new Pessoa();
$p2 = new Aluno();
$p3 = new Professor();
$p4 = new Funcionario();

$p1->setNome("Casalli");
$p2->setNome("Pedro");
$p3->setNome("Nariboy");
$p4->setNome("Vandeco");

$p2->setCurso("Analise e desenvolvimento de sistemas");
$p3->setSalario(1600);
$p4->setSexo("Masculino");
$p4->mudarTrabalho("Horta");
$p1->setSexo("Masculino");
$p1->setIdade(19);
$p2->setMatricula(true);
$p2->setIdade(19);
$p3->setIdade(45);
$p4->setIdade(60);
$p2->setSexo("Masculino");
$p3->setSexo("Masculino");
$p4->setSexo("Masculino");
$p3->setEspecialidade("Matemática");
$p4->setSetor("Horta");


print_r($p1);
print_r($p2);
print_r($p3);
print_r($p4);
?>
</pre>
</body>
</html>
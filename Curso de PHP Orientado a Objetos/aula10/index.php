<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula 11</title>
</head>
<body>
<h1></h1>
    <pre>
<?php

require_once "Visitante.php";
require_once "Aluno.php";
require_once "Bolsista.php";
require_once "Professor.php";
require_once "Tecnico.php";

$visit = new Visitante();
$visit->setNome("Pedro");
$visit->setIdade(19);
$visit->setSexo("Masculino");
print_r($visit);

$aluno = new Aluno();
$aluno->setNome("Casalli");
$aluno->setIdade(19);
$aluno->setMatricula(202013001);
$aluno->setCurso("Engenharia Civil");
$aluno->setSexo("Masculino");
$aluno->pagarMensalidade();
print_r($aluno);

$bolsista = new Bolsista();
$bolsista->setNome("Bunhak");
$bolsista->setBolsa(12.5);
$bolsista->setIdade(18);
$bolsista->setSexo("Masculino");
$bolsista->setMatricula(20201943012);
$bolsista->setCurso("ADS");
$bolsista->pagarMensalidade();
print_r($bolsista);

$professor = new Professor();
$professor->setNome("José");
$professor->setIdade(44);
$professor->setSexo("Masculino");
$professor->receberAumento(1200);
$professor->setEspecialidade("Matematica");

$tecnico = new Tecnico();
$tecnico->setNome("Caroline");
$tecnico->setIdade(22);
$tecnico->setMatricula(00101010001001001);
$tecnico->setCurso("Informática");
$tecnico->setRegistroProfissional('2019-003190');
$tecnico->setSexo("Feminino");
$tecnico->praticar();





print_r($professor);
print_r($tecnico);
?>
    </pre>
</body>
</html>
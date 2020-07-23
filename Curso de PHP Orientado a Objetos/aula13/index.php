<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Videos</title>
</head>
<body>
    <h1></h1>
<pre>
<?php
require_once "Video.php";
require_once "Aluno.php";
require_once "Visualizacao.php";

$video[0] = new Video("Aula 12 de PHP");
$video[1] = new Video("Aula 2 de Banco de Dados");
$video[2] = new Video("Aula 6 de HTML");

$aluno[0] = new Aluno("Pedro", 19, 'Masculino', 'Pedro.kadjin');

$visualizacao[0] = new Visualizacao($aluno[0], $video[1]);
$visualizacao[1] = new Visualizacao($aluno[0], $video[2]);
$visualizacao[0]->avaliar();
$visualizacao[1]->avaliarNota(10);
print_r($visualizacao);

?>
</pre>
</body>
</html>
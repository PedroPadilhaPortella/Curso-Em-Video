<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ultima Fighting Championship</title>
</head>
<body>
    <h1>Ultimate Fighting Championship</h1>
    <pre>
<?php
require_once "Lutador.php";
require_once "Lutas.php";

$lutador = array();
$lutador[0] = new Lutador ('Yuri Mironov', 'Russia', 'Masculino', 25,   72.9,   1.75, 11,  2, 1);
$lutador[1] = new Lutador ('Pedro Portella', 'Brasil', 'Masculino', 19, 69.8,   1.73, 19,  0, 3);
$lutador[2] = new Lutador ('Danny Boy', 'Inglaterra', 'Masculino', 29,  67.1,   1.76, 15,  5, 2);
$lutador[3] = new Lutador ('Black Johnny', 'EUA', 'Masculino', 33,      104.9,  2.03, 17,  5, 5);
$lutador[4] = new Lutador ('Klaus Faust', 'Alemanha', 'Masculino', 27,  98.3,   1.83, 20,  3, 7);
$lutador[5] = new Lutador ('Katsuro Masaru', 'Japão', 'Masculino', 21,  59.1,   1.61, 10,  1, 4);
$lutador[6] = new Lutador ('Sun Tuan', 'China', 'Masculino', 20,        83.6,   1.65,  7,  2, 1);
$lutador[7] = new Lutador ('Afif Boulos', 'Egito', 'Masculino', 25,     73.8,   1.66, 11,  6, 0);

$lutador[8] = new Lutador ('Mulan Tsao', 'Coréia do Sul', 'Feminino', 34,     81.3, 1.69, 12,  4,  6);
$lutador[9] = new Lutador ('Clarice Cailot', 'França', 'Feminino', 28,        77.9, 1.82,  9,  5,  3);
$lutador[10] = new Lutador ('Aurora Dahl', 'Noruega', 'Feminino', 19,         71.3, 1.76,  6,  7,  7);
$lutador[11] = new Lutador ('Isabela Cavalcanti', 'Portugal', 'Feminino', 22, 64.8, 1.52,  5,  2,  4);
$lutador[12] = new Lutador ('Sabrina Dixon', 'EUA', 'Feminino', 34,           73.3, 1.69, 18,  2,  3);
$lutador[13] = new Lutador ('Natalie Bijlsma', 'Holanda', 'Feminino', 28,     84.9, 1.82, 14, 12, 18);
$lutador[14] = new Lutador ('Fahimah Maraam', 'Marrocos', 'Feminino', 19,     64.3, 1.76, 20,  1,  1);
$lutador[15] = new Lutador ('Ariana Sandoval', 'Argentina', 'Feminino', 22,   56.4, 1.52,  1,  0,  0);

$luta01 = new Lutas;
//$luta01->marcarLuta($lutador[], $lutador[]);
//$luta01->lutar();

print_r($lutador);

?>
    </pre>
</body>
</html>
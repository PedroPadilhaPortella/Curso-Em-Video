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

$caneta01 = new Caneta("BIC", "Azul", 0.5, true);
$caneta02 = new Caneta("Fabercastel", "Preta", 0.7, false);


print_r($caneta01);
print_r($caneta02);
?>
</pre>
</body>
</html>
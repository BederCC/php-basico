<?php
// Definición de variables
$course = "Curso de PHP";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $course?></title>
</head>
<body>
    <h1>
        Bienvenido al <?= $course; ?>
    </h1>

    <p>
        En este curso aprenderás desde lo más básico hasta lo más avanzado de PHP. 
        Comenzaremos con la sintaxis básica, variables, tipos de datos y estructuras de control.
    </p>
</body>
</html>
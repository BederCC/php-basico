<?php
// Definición de variables
$course = "Curso de PHP";
$archived = true;
$status = $archived ? "archivado" : "activo";

$tags = [
    "PHP",
    "Programación",
    "Desarrollo Web"
];
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

    <p>
        El estado del curso es: <?= $status; ?>.
    </p>

    <p>
        Este curso está etiquetado con: 
        <ul>
            <!-- Recorrer el arreglo de etiquetas -->
            <?php foreach ($tags as $tag): ?>
                <li><?= $tag; ?></li>
            <?php endforeach; ?>
        </ul>
    </p>
</body>
</html>
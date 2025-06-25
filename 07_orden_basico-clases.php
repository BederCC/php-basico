<?php

require 'Course.php';

$course = new Course(
    title: 'Curso de PHP',
    subtitle: 'Desde cero hasta avanzado',
    status: 'En progreso', // Estado del curso
    description: 'Aprende PHP desde lo más básico hasta lo más avanzado, incluyendo programación orientada a objetos y desarrollo de aplicaciones web.',
    tags: ['PHP', 'Programación', 'Backend', 'Desarrollo Web']
);

$course->addTag('Desarrollo de Software');
$course->addTag('Backend Development');
$course->addTag('');
$course->addTag('Web Development');
$course->addTag('PHP');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $course->getTitle()?></title>
</head>
<body>
    <h1>
        Bienvenido al <?= $course->getTitle(); ?>
    </h1>
    <h2>
        <?= $course->getSubtitle(); ?>
    <p>
        <?= $course->getDescription(); ?>
    </p>

    <p>
        El estado del curso es: <?= $course->getStatus(); ?>.
    </p>

    <p>
        Este curso está etiquetado con: 
        <ul>
            <!-- Recorrer el arreglo de etiquetas -->
            <?php foreach ($course->getTags() as $tag): ?>
                <li><?= $tag; ?></li>
            <?php endforeach; ?>
        </ul>
    </p>
</body>
</html>
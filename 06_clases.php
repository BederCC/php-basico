<?php
class Course {
    
    public function __construct(
        public string $title,
        public string $subtitle,
        public string $status, // Estado del curso
        public string $description,
        public array $tags
    ) {
        // Constructor para inicializar las propiedades del curso
    }
}

$course = new Course(
    title: 'Curso de PHP',
    subtitle: 'Desde cero hasta avanzado',
    status: 'En progreso', // Estado del curso
    description: 'Aprende PHP desde lo más básico hasta lo más avanzado, incluyendo programación orientada a objetos y desarrollo de aplicaciones web.',
    tags: ['PHP', 'Programación', 'Backend', 'Desarrollo Web']
);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $course->title?></title>
</head>
<body>
    <h1>
        Bienvenido al <?= $course->title; ?>
    </h1>
    <h2>
        <?= $course->subtitle; ?>
    <p>
        <?= $course->description; ?>
    </p>

    <p>
        El estado del curso es: <?= $course->status; ?>.
    </p>

    <p>
        Este curso está etiquetado con: 
        <ul>
            <!-- Recorrer el arreglo de etiquetas -->
            <?php foreach ($course->tags as $tag): ?>
                <li><?= $tag; ?></li>
            <?php endforeach; ?>
        </ul>
    </p>
</body>
</html>
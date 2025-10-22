<?php
  define("SITE_NAME", "TASKFLOW");
  $page_title =SITE_NAME." - Página de Inicio"; //Título de la página
  $userName = "Abel Gámez Kmiec"; // Tipo String
  $userAge = 19;                 // Tipo Integer
  $isPremiumUser = true;        // Tipo Boolean
  $tasks=[
    [
        'title' => 'Preparar la presentación del proyecto',
        'completed' => false,
        'priority' => 'alta'
    ],
    [
        'title' => 'Enviar informe semanal al jefe',
        'completed' => true,
        'priority' => 'media'
    ],
    [
        'title' => 'Actualizar el sitio web',
        'completed' => false,
        'priority' => 'alta'
    ],
    [
        'title' => 'Hacer copia de seguridad de los datos',
        'completed' => true,
        'priority' => 'baja'
    ],
    [
        'title' => 'Revisar correos pendientes',
        'completed' => false,
        'priority' => 'media'
    ]
];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title><?php echo $page_title; ?></title>
</head>
<body>
    <?php include "../app/views/header.php"; ?>
    <h2>Tareas Pendientes</h2>
    <ul>
        <?php
    foreach ($tasks as $task) {
        // Clase base para cada tarea
        $taskClasses = 'task-item';

        // Si la tarea está completada, añade la clase 'completed'
        if ($task['completed']) {
            $taskClasses .= ' completed';
        }

        // Añade la clase de prioridad según el valor de 'priority'
        switch ($task['priority']) {
            case 'alta':
                $taskClasses .= ' priority-alta';
                break;
            case 'media':
                $taskClasses .= ' priority-media';
                break;
            case 'baja':
                $taskClasses .= ' priority-baja';
                break;
        }

        // Imprime la tarea como un elemento <li>
        echo "<li class='$taskClasses'>{$task['title']}</li>";
    }
    ?>
    </ul>
<main>
    <h2>Perfil del Usuario</h2>
        <p><strong>Nombre:</strong> <?php echo $userName; ?></p>
        <p><strong>Edad:</strong> <?php echo $userAge; ?> años</p>
        <p><strong>Estado de la cuenta:</strong> Usuario <?php echo $isPremiumUser ? "Premium" : "Estándar"; ?></p>
</main>
</body>
<?php include "../app/views/footer.php"; ?>
</html>
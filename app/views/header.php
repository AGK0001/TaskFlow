<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title><?php echo $page_title; ?></title>
    <style>
    .task-list {
        list-style: none;
        padding: 0;
        font-family: sans-serif;
    }
    .task-item {
        margin-bottom: 10px;
        padding: 10px;
        border-radius: 5px;
        border-left: 5px solid gray; /* Base color */
        background-color: #f9f9f9;
        color: #333;
    }

    /* Clases de Prioridad (Reemplaza border-left) */
    .priority-alta { border-left-color: red; }
    .priority-media { border-left-color: orange; }
    .priority-baja { border-left-color: green; }

    /* Clase de Completado (Reemplaza color y tachado) */
    .completed {
        text-decoration: line-through;
        background-color: #e6ffe6;
        color: #888;
        opacity: 0.7;
    }
</style>

</head>
<body>
    <h1>Bienvenido a <?php echo SITE_NAME; ?></h1>
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
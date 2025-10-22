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
    <h1>Bienvenido a <?php echo SITE_NAME; ?></h1>
    <?php include "header.php"; ?>
    <h2>Tareas Pendientes</h2>
    <ul>

    </ul>
    <?php include "footer.php"; ?>
<main>
    <h2>Perfil del Usuario</h2>
        <p><strong>Nombre:</strong> <?php echo $userName; ?></p>
        <p><strong>Edad:</strong> <?php echo $userAge; ?> años</p>
        <p><strong>Estado de la cuenta:</strong> Usuario <?php echo $isPremiumUser ? "Premium" : "Estándar"; ?></p>
</main>
</body>
</html>
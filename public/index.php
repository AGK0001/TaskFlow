<?php
  define("SITE_NAME", "TASKFLOW");
  $page_title =SITE_NAME." - Página de Inicio"; //Título de la página
  $userName = "Abel Gámez Kmiec"; // Tipo String
  $userAge = 19;                 // Tipo Integer
  $isPremiumUser = true;        // Tipo Boolean
  $tareas = [
    ['titulo' => 'Configurar el entorno de desarrollo', 'completado' => true, 'prioridad' => 'alta'],
    ['titulo' => 'Crear la estructura de carpetas', 'completado' => true, 'prioridad' => 'alta'],
    ['titulo' => 'Diseñar la base de datos', 'completado' => false, 'prioridad' => 'media'],
    ['titulo' => 'Implementar el sistema de login', 'completado' => false, 'prioridad' => 'alta'],
    ['titulo' => 'Crear la vista de tareas', 'completado' => false, 'prioridad' => 'baja']
];
    require_once "../app/functions.php";
    include "../app/views/header.php"; 
?>
    

    <h2>Perfil del Usuario</h2>
        <p><strong>Nombre:</strong> <?php echo $userName; ?></p>
        <p><strong>Edad:</strong> <?php echo $userAge; ?> años</p>
        <p><strong>Estado de la cuenta:</strong> Usuario <?php echo $isPremiumUser ? "Premium" : "Estándar"; ?></p>

    <?php include "../app/views/footer.php"; ?>

<?php
  define("SITE_NAME", "TASKFLOW");
  $page_title =SITE_NAME." - Página de Inicio"; //Título de la página
  $userName = "Abel Gámez Kmiec"; // Tipo String
  $userAge = 19;                 // Tipo Integer
  $isPremiumUser = true;        // Tipo Boolean
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title><?php echo $page_title; ?></title>
</head>
<body>
    <h1>Bienvenido a <?php echo SITE_NAME; ?></h1>

<main>
    <h2>Perfil del Usuario</h2>
        <p><strong>Nombre:</strong> <?php echo $userName; ?></p>
        <p><strong>Edad:</strong> <?php echo $userAge; ?> años</p>
        <p><strong>Estado de la cuenta:</strong> Usuario <?php echo $isPremiumUser ? "Premium" : "Estándar"; ?></p>
</main>
</body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title><?php echo $page_title; ?></title>
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f5f5f5;
        margin: 0;
        padding: 20px;
    }

    h1 {
        color: #333;
        text-align: center;
    }

    .task-list {
        max-width: 600px;
        margin: 0 auto;
        background: #fff;
        border-radius: 10px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        padding: 20px;
    }

    .task {
        border-bottom: 1px solid #ddd;
        padding: 10px 0;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .task:last-child {
        border-bottom: none;
    }

    .title {
        font-size: 16px;
    }

    .completed {
        text-decoration: line-through;
        color: gray;
    }

    .priority {
        padding: 4px 8px;
        border-radius: 5px;
        font-size: 14px;
        text-transform: capitalize;
    }

    .alta {
        background-color: #ff4d4d;
        color: white;
    }

    .media {
        background-color: #ffcc00;
        color: #333;
    }

    .baja {
        background-color: #4caf50;
        color: white;
    }
</style>

</head>
<body>
    <h1>Bienvenido a <?php echo SITE_NAME; ?></h1>

<main>
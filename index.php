<?php
include 'config.php';


$query = "SELECT * FROM registros";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Registros</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            background: white;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #003366;
            color: white;
        }
        .btn {
            padding: 5px 10px;
            margin-right: 5px;
            text-decoration: none;
            color: white;
            background-color: #003366;
            border-radius: 3px;
        }
        .btn:hover {
            background-color: #0056b3;
        }
        .btn-delete {
            background-color: #d9534f;
        }
        .btn-delete:hover {
            background-color: #c9302c;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Gestión de Registros</h1>
        <a href="add.php" class="btn">Agregar Nuevo Registro</a>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Teléfono</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?= $row['id']; ?></td>
                        <td><?= $row['nombre']; ?></td>
                        <td><?= $row['correo']; ?></td>
                        <td><?= $row['telefono']; ?></td>
                        <td>
                            <a href="view.php?id=<?= $row['id']; ?>" class="btn">Ver</a>
                            <a href="edit.php?id=<?= $row['id']; ?>" class="btn">Editar</a>
                            <a href="delete.php?id=<?= $row['id']; ?>" class="btn btn-delete">Eliminar</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #eafaf1; /* Fondo claro */
            color: #333333;
            margin: 0;
            padding: 0;
        }

        h1 {
            color: #027373; /* Color turquesa oscuro */
            text-align: center;
            padding: 20px 0;
        }

        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
        }

        th, td {
            text-align: left;
            padding: 8px;
            border: 1px solid #027373; /* Borde turquesa */
        }

        thead {
            background-color: #029393; /* Turquesa más oscuro */
            color: #ffffff;
        }

        tr:nth-child(even) {
            background-color: #b2d8d8; /* Turquesa más claro */
        }

        tr:hover {
            background-color: #d1e0e0;
        }
    </style>
</head>
<body>
    <h1>Lista de productos</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Category</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($productos as $producto){
                echo "<tr>";
                echo "<td>" . htmlspecialchars($producto['ID']) . "</td>";
                echo "<td>" . htmlspecialchars($producto['Nombre']) . "</td>";
                echo "<td>" . htmlspecialchars($producto['Categoria']) . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>
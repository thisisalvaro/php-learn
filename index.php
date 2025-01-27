
<!DOCTYPE html>
<html>
<head>
    <title>Lista de Libros</title>
</head>
<body>
    <h2>Lista de Libros</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Título</th>
            <th>Autor</th>
            <th>Año</th>
            <th>Género</th>
            <th>Acciones</th>
        </tr>
        <?php
        // Incluye el archivo de conexión a la base de datos
        include 'db.php';

        // Consulta SQL para seleccionar todos los registros de la tabla 'libros'
        $sql = "SELECT * FROM libros";
        $result = $conn->query($sql);

        // Verifica si hay resultados en la consulta
        if ($result->num_rows > 0) {
            // Itera sobre cada fila de resultados y genera una fila de tabla HTML
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row["id"]. "</td>
                        <td>" . $row["titulo"]. "</td>
                        <td>" . $row["autor"]. "</td>
                        <td>" . $row["anio"]. "</td>
                        <td>" . $row["genero"]. "</td>
                        <td>
                            <a href='update.php?id=" . $row["id"] . "'>Editar</a>
                            <a href='delete.php?id=" . $row["id"] . "'>Eliminar</a>
                        </td>
                      </tr>";
            }
        } else {
            // Si no hay resultados, muestra un mensaje indicando que no hay libros
            echo "<tr><td colspan='6'>No hay libros</td></tr>";
        }

        // Cierra la conexión a la base de datos
        $conn->close();
        ?>
    </table>
    <br>
    <a href="create.php">Añadir Nuevo Libro</a>
</body>
</html>
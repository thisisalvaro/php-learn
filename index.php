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
        include 'db.php';

        $sql = "SELECT * FROM libros";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
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
            echo "<tr><td colspan='6'>No hay libros</td></tr>";
        }

        $conn->close();
        ?>
    </table>
    <br>
    <a href="create.php">Añadir Nuevo Libro</a>
</body>
</html>
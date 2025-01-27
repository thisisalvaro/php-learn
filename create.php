<!DOCTYPE html>
<html>
<head>
    <title>Añadir Libro</title>
</head>
<body>
    <h2>Añadir Nuevo Libro</h2>
    <form action="create.php" method="post">
        <label for="titulo">Título:</label>
        <input type="text" id="titulo" name="titulo" required><br><br>
        <label for="autor">Autor:</label>
        <input type="text" id="autor" name="autor" required><br><br>
        <label for="anio">Año:</label>
        <input type="number" id="anio" name="anio" required><br><br>
        <label for="genero">Género:</label>
        <input type="text" id="genero" name="genero"><br><br>
        <input type="submit" value="Añadir">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include 'db.php';

        $titulo = $_POST['titulo'];
        $autor = $_POST['autor'];
        $anio = $_POST['anio'];
        $genero = $_POST['genero'];

        $sql = "INSERT INTO libros (titulo, autor, anio, genero) VALUES ('$titulo', '$autor', $anio, '$genero')";

        if ($conn->query($sql) === TRUE) {
            echo "Nuevo libro añadido correctamente";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }
    ?>
</body>
</html>
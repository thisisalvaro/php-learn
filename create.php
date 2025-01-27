<!DOCTYPE html>
<html>
<head>
    <title>Añadir Libro</title>
</head>
<body>
    <h2>Añadir Nuevo Libro</h2>
    <!-- Formulario para añadir un nuevo libro -->
    <form action="create.php" method="post">
        <!-- Campo para el título del libro -->
        <label for="titulo">Título:</label>
        <input type="text" id="titulo" name="titulo" required><br><br>
        <!-- Campo para el autor del libro -->
        <label for="autor">Autor:</label>
        <input type="text" id="autor" name="autor" required><br><br>
        <!-- Campo para el año de publicación del libro -->
        <label for="anio">Año:</label>
        <input type="number" id="anio" name="anio" required><br><br>
        <!-- Campo para el género del libro -->
        <label for="genero">Género:</label>
        <input type="text" id="genero" name="genero"><br><br>
        <!-- Botón para enviar el formulario -->
        <input type="submit" value="Añadir">
    </form>

    <?php
    // Verifica si el método de la solicitud es POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Incluye el archivo de conexión a la base de datos
        include 'db.php';

        // Obtiene los datos del formulario
        $titulo = $_POST['titulo'];
        $autor = $_POST['autor'];
        $anio = $_POST['anio'];
        $genero = $_POST['genero'];

        // Consulta SQL para insertar un nuevo libro en la base de datos
        $sql = "INSERT INTO libros (titulo, autor, anio, genero) VALUES ('$titulo', '$autor', $anio, '$genero')";

        // Ejecuta la consulta y verifica si fue exitosa
        if ($conn->query($sql) === TRUE) {
            echo "Nuevo libro añadido correctamente";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        // Cierra la conexión a la base de datos
        $conn->close();
    }
    ?>
</body>
</html>
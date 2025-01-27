<!DOCTYPE html>
<html>
<head>
    <title>Editar Libro</title>
</head>
<body>
    <h2>Editar Libro</h2>
    <?php
    // Incluir el archivo de conexión a la base de datos
    include 'db.php';

    // Verificar si se ha recibido el parámetro 'id' en la URL
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        // Consulta SQL para obtener los datos del libro con el id proporcionado
        $sql = "SELECT * FROM libros WHERE id=$id";
        $result = $conn->query($sql);

        // Verificar si se encontraron resultados
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            ?>
            <!-- Formulario para editar los datos del libro -->
            <form action="update.php" method="post">
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                <label for="titulo">Título:</label>
                <input type="text" id="titulo" name="titulo" value="<?php echo $row['titulo']; ?>" required><br><br>
                <label for="autor">Autor:</label>
                <input type="text" id="autor" name="autor" value="<?php echo $row['autor']; ?>" required><br><br>
                <label for="anio">Año:</label>
                <input type="number" id="anio" name="anio" value="<?php echo $row['anio']; ?>" required><br><br>
                <label for="genero">Género:</label>
                <input type="text" id="genero" name="genero" value="<?php echo $row['genero']; ?>"><br><br>
                <input type="submit" value="Actualizar">
            </form>
            <?php
        }
    }

    // Verificar si el formulario ha sido enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener los datos del formulario
        $id = $_POST['id'];
        $titulo = $_POST['titulo'];
        $autor = $_POST['autor'];
        $anio = $_POST['anio'];
        $genero = $_POST['genero'];

        // Consulta SQL para actualizar los datos del libro
        $sql = "UPDATE libros SET titulo='$titulo', autor='$autor', anio=$anio, genero='$genero' WHERE id=$id";

        // Ejecutar la consulta y verificar si fue exitosa
        if ($conn->query($sql) === TRUE) {
            echo "Libro actualizado correctamente";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        // Cerrar la conexión a la base de datos
        $conn->close();
        // Redirigir a la página principal
        header("Location: index.php");
        exit();
    }
    ?>
</body>
</html>
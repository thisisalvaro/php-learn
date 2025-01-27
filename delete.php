<?php
// Incluye el archivo de conexión a la base de datos
include 'db.php';

// Verifica si se ha recibido el parámetro 'id' a través de GET
if (isset($_GET['id'])) {
    // Escapa el valor del id para evitar inyecciones SQL
    $id = $conn->real_escape_string($_GET['id']);
    
    // Prepara la consulta SQL para eliminar el libro con el id especificado
    $sql = "DELETE FROM libros WHERE id='$id'";

    // Ejecuta la consulta y verifica si se ejecutó correctamente
    if ($conn->query($sql) === TRUE) {
        echo "Libro eliminado correctamente";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Cierra la conexión a la base de datos
    $conn->close();
    
    // Redirige al usuario a la página principal
    header("Location: index.php");
    exit();
}
?>
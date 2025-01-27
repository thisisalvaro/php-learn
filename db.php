<?php
// Definimos las variables para la conexión al servidor de base de datos
$servername = "localhost"; // Nombre del servidor, en este caso es el servidor local
$username = "root"; // Nombre de usuario para la conexión, por defecto es 'root' en muchos servidores locales
$password = ""; // Contraseña para el usuario, en este caso está vacía

// $dbname = "biblioteca"; // Nombre de la base de datos, está comentado porque no se está utilizando en este momento

// Crear conexión
$conn = new mysqli($servername, $username, $password); 
// Creamos una nueva conexión utilizando el objeto mysqli y almacenamos la conexión en la variable $conn

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error); 
    // Si hay un error en la conexión, se detiene la ejecución del script y se muestra un mensaje de error
}
?>
<?php
// Conexión a la base de datos
$host = "bolrprnzgdvkwxpk7fhi-mysql.services.clever-cloud.com";
$user = "ua4jnmnsehoxqwsz";
$password = "4zj7R2ajlJ57j8dP8tFz";
$database = "bolrprnzgdvkwxpk7fhi";


$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
  die("La conexión falló: " . mysqli_connect_error());
}

// Obtener datos del formulario
$nombre = $_POST["nombre"];
$email = $_POST["email"];
$edad = $_POST["edad"];
$genero = $_POST["genero"];
$pregunta1 = $_POST["pregunta1"];
$pregunta2 = implode(", ", $_POST["pregunta2"]);
$pregunta3 = $_POST["pregunta3"];

// Insertar datos en la tabla respuestas
$sql = "INSERT INTO  `bolrprnzgdvkwxpk7fhi`.`respuestas` (nombre, email, edad, genero, pregunta1, pregunta2, pregunta3)
        VALUES ('$nombre', '$email', $edad, '$genero', '$pregunta1', '$pregunta2', '$pregunta3')";

if (mysqli_query($conn, $sql)) {
  echo "Los datos se han guardado correctamente.";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>

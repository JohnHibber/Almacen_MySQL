<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname ="canciones";

//crear conexion
$conn = new mysqli($servername,$username,$password,$dbname);

//verificar conexion
if($conn->connect_error) {
  die("Conexion fallida: " . $conn->connect_error);
}

//recibir datos del formulario
$nombre = $conn->real_escape_string($_POST["nombre"]);
$artista = $conn->real_escape_string($_POST["artista"]);
$album = $conn->real_escape_string($_POST["album"]);
$lanzamiento = $conn->real_escape_string($_POST["lanzamiento"]);

//crear consulta SQL para insertar datos
$sql = "INSERT INTO listado (nombre, artista, album, lanzamiento) VALUES ('$nombre', '$artista', '$album', '$lanzamiento')";

if($conn->query($sql) === TRUE) {
  echo "Ready";

}else{
  echo "Error" . $sql ."<br>" . $conn->error;
}

//cerrar la conexion
$conn->close();

?>

<!--volver a la pagina inicial-->
<!DOCTYPE html>
<html>
<head>
<link href="estilo.css" rel="stylesheet">
</head>
<body>
  <br>
    <center>
      <h2>¡¡¡¡Cancion Insertada¡¡¡¡</h2>
      <h3><a href="datos.html" class="volver">Volver al Inicio</a></h3></center>
</body>
</html>

 <?php
$mysqli = new mysqli("localhost", "admin", "admin123", "afip");
/* comprueba la conexión */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
/* devuelve el nombre de la base de datos actualmente seleccionada */
if ($result = $mysqli->query("SELECT DATABASE(afip)")) {
    $row = $result->fetch_row();
    printf("Default database is %s.\n", $row[0]);
    $result->close();
}
/* cambia de test bd a world bd */
$mysqli->select_db("afip");
/* devuelve el nombre de la base de datos actualmente seleccionada */
if ($result = $mysqli->query("SELECT DATABASE(afip)")) {
    $row = $result->fetch_row();
    printf("Default database is %s.\n", $row[0]);
    $result->close();
}
$mysqli->close();


$servidor = "localhost"; 
$usuario  = "admin";
$password = "admin123";
$base_de_datos = "afip";

$conexion = mysql_connect ($servidor,$usuario,$password) or die ('Imposible conectarse con la BD.');
	if (! $conexion){echo "No se pudo conectar con el servidor MySQL";exit();}
	if (! mysql_select_db($base_de_datos)){echo "No se pudo conectar con la base de datos";exit();
}
?>
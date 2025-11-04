<?php
$host = "192.168.56.11";
$port = "5432";
$dbname = "ejemplo";
$user = "vagrant";
$password = "vagrant";
$conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");

if (!$conn) {
    die("<h2>no se pudo conectar</h2>");
}

echo "<h2>Se conecto exitosamente a la base de datos </h2>";
$result = pg_query($conn, "SELECT * FROM amigos;");
if (!$result) {
    die("<p>Error en ejecucion de consulta</p>");
}
echo "<table border='1' cellpadding='8' cellspacing='0'>";
echo "<tr><th>ID</th><th>Nombre</th></tr>";

while ($row = pg_fetch_assoc($result)) {
    echo "<tr><td>{$row['id']}</td><td>{$row['nombre']}</td></tr>";
}

echo "</table>";

pg_close($conn);
?>
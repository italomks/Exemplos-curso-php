
<?php
require '../setup.php';
require '../conn.php';

$dado = $_POST['nome'];

$sql = "INSERT INTO produto (nome) VALUES ('$nome')";
mysql_query($conn, $sql);

echo mysqli_affected_rows($conn) . 'registros selecionados.';

mysqli_close($conn);
?>
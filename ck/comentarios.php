<?php
$servername = "localhost";
$username = "root";
$password = "tRtdCds165";
$dbname = "db_deportes";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO tbl_noticias (titulo, contenido)
VALUES ('{$_POST['titulo']}','{$_POST['contenido']}')";
if ($conn->query($sql) === TRUE) {
    //echo "Noticia Registrada Correctamente!";
    echo '<script language="javascript">alert("Noticia Registrada Correctamente!");</script>'; 
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
echo "<script languaje='javascript'>
window.history.go(-1)
</script>
";
?> 
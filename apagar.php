<?php

echo $_GET['id'];

$servername = "localhost"; 
$username = "aluno";
$password = "aluno";
$dbname = "DWEB2";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to delete a record
$sql = "DELETE FROM formando WHERE id=".$_GET['id'];

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
  
} else {
  echo "Error deleting record: " . $conn->error;
}

?>

<script>
  alert ("Dados eliminados!");
  window.location.href = "tables.php";
</script>

<?php
//header("Location: tables.php");
$conn->close();
?>

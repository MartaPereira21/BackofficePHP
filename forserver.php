<?php
//session_start();
$errors = array();
$email    = "";
$username = "aluno";
// initializing variables
$servername = "localhost"; 
$usernameBd = "aluno";
$passwordBd = "aluno";
$dbname = "DWEB2";
// Create connection
$conn = new mysqli($servername, $usernameBd, $passwordBd, $dbname);


// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// REGISTER Forner
if (isset($_POST['reg_p'])) {
  

  // receive all input values from the form
  $pnome = mysqli_real_escape_string($conn, $_POST['pnome']);
  $morada = mysqli_real_escape_string($conn, $_POST['morada']);
  $telefone = mysqli_real_escape_string($conn, $_POST['telefone']);
  $dn = mysqli_real_escape_string($conn, $_POST['dn']);

  
  // Finally, register user if there are no errors in the form
if (count ($errors)==0){
  $sql = "INSERT INTO formando(nome, morada, telefone, dn)
  VALUES('$pnome', '$morada', '$telefone', '$dn')";
  if ($conn->query($sql) === TRUE) {
    echo "alert('New record created successfully')";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }
    }

    echo "alert('New record created successfully')";
}


if (isset($_POST['reg_editar'])) {



  // receive all input values from the form
  $pnome = mysqli_real_escape_string($conn, $_POST['pnome']);
  $morada = mysqli_real_escape_string($conn, $_POST['morada']);
  $telefone = mysqli_real_escape_string($conn, $_POST['telefone']);
  $dn = mysqli_real_escape_string($conn, $_POST['dn']);
  $id = mysqli_real_escape_string($conn, $_POST['id']);
  $pId = mysqli_real_escape_string($conn, $_POST['pid']);
  
  // Finally, register user if there are no errors in the form
if (count ($errors)==0){
  $sql = "Update formando set nome='$pnome', morada='$morada', telefone='$telefone', dn='$dn' WHERE id='$id'"; 
  //$sql ="Update formando set nome='34455' WHERE id=1";
  if ($conn->query($sql) === TRUE) {
    

    } else {
      
    echo "Error: " . $sql . "<br>" . $conn->error;
    }
    }


}



  
$conn->close();
?>

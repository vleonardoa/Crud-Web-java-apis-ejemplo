<?php
include("./MySqlConexion.php");
$id = $_GET['id'];
$elim ="DELETE FROM usuarios WHERE id = $id";
$eliminar = mysqli_query($conn, $elim);

if($conn->query($sql) === TRUE){
    $response["status"] = 200;
    $response["message"] = "Registro eliminado";
}else{
    $response["message"] = "Hubo un error";
}


$conn -> close();


?>
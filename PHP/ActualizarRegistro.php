<?php
include("./MySqlConexion.php");
$id = $_GET['id'];
$nom = $_GET['nombre'];
$ape = $_GET['apellido'];
$msg = $_GET['mensaje'];

$actualizar ="update usuarios set nombre = '$nom', apellido = '$ape', mensaje = '$msg' where id = $id";

$actualiza = mysqli_query($conn, $actualizar);

if($conn->query($sql) === TRUE){
    $response["status"] = 200;
    $response["message"] = "Registro actualizado";
}else{
    $response["message"] = "Hubo un error";
}
$conn -> close();


?>
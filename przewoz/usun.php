<?php
$conn = mysqli_connect("localhost", "root", "", "przewozy");

$id_zadania = $_POST['id'];
$sql = "DELETE FROM zadania WHERE id_zadania = $id_zadania";

mysqli_query($conn, $sql);  

mysqli_close($conn);

header("Location: index.php");
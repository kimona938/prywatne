<?php
$conn = mysqli_connect("localhost","root","","mysqli_example");
$nazwa = $_POST['nazwa'];
$email = $_POST['email'];
$sql = "INSERT INTO uzytkownicy (nazwa, email) VALUES ('$nazwa', '$email' )";
mysqli_query($conn, $sql);
header('Location: index.php');  
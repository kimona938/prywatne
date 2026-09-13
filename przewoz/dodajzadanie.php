<?php

$conn = mysqli_connect("localhost", "root", "", "przewozy");

$zadanie = $_POST['zadanie'];
$data = $_POST['data'];
$osoba_id = 1;

$sql = "INSERT INTO zadania (zadanie, data, osoba_id) VALUES ('$zadanie', '$data', '$osoba_id')";

$result = mysqli_query($conn, $sql);
header("Location: index.php");

<?php
$conn = mysqli_connect("localhost","root","","mysqli_example");
$nazwa = $_POST['johny'];
$email = $_POST['josoja@33.33'];
$sql = "UPDATE uzytkownicy SET nazwa = '$nazwa', email = '$email' WHERE id = '3'";
$result = mysqli_query($conn, $sql);
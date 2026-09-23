
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$conn = mysqli_connect('localhost','root','','mysqli_example');
$sql = "SELECT * FROM uzytkownicy";
$result = mysqli_query($conn, $sql);
?>
    <form action='adduser.php' method='POST'>
        <label for='nazwa'>
            <p>Podaj swoją nazwę:</p>
            <input type='text' name='nazwa' id='nazwa'/>
        </label>
        <label for='email'>
            <p>Podaj swój email:</p>
            <input type='email' name='email' id='email'/>
        </label>
        <?php
        $conn = mysqli_connect("localhost","root","","mysqli_example")
        if($conn){
            echo "połączono";
    
        }
        else{
            echo "nie połączono";
        }
        $sql = "SELECT * FROM uzytkownicy";
        $result = mysqli_query($conn,$sql);
        
        ?>

        
    
        <button>Dodaj</button>
    </form>
</body>
</html>
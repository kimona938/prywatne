<?php
$name = strlen($_POST["name"]);
$surname = isset($_POST["surname"]);
$terms = empty($_POST["terms"]);
if ($name > 3 && $surname && !$terms) {
    echo "informacje dobrze";
} else {
    echo "informacje zwalone";
}
?>
<form action='../index.php'>
    <button>Return</button>
</form>

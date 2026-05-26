<?php

for ($i = 1; $i <= 10; $i++) {
    echo $i . " ";
}
$i = 2;

while ($i <= 20) {
    echo $i . ;
    $i += 2;
}
$imiona = ["Ania", "Ola", "Kuba", "Bartek", "Zosia"];

foreach ($imiona as $imie) {
    echo $imie ;
}
$x = 1;

do {
    echo "Hej!";
} while ($x < 1);
$suma = 0;

for ($i = 1; $i <= 100; $i++) {
    $suma += $i;
}

echo $suma;

$colors = ['czerwony, niebieski, zielony'];
echo $colors[0];
$product = array(
    "name" => "laptop",
    "price => "3000",
    "in_stock" => true",
)
$numbers = [1, 2, 3];

array_push($numbers, 4);

print_r($numbers);
$fruits = ['jabłko', 'banan', 'gruszka'];

if (in_array('banan', $fruits)) {
    echo "Jest banan";
}
$user = [
    'name' => 'Jan',
    'age' => 20
];

print_r(array_keys($user));


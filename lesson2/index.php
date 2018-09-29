<?php

$a = 25;
$b = 5;


echo $a**$b."<br>";

echo $a+$b."<br>";

echo $a-$b."<br>";

echo $a/$b."<br>";

echo $a%$b."<br>";




$a = 25;
$b = 70;
$c = 100;


if (($a > 26 && $a < $b)|| ($a == 25 && $c == 100) && $b == 70) {
    echo "OK";
    } else {
    echo "not";
}

$assoc = [
    'color'=>'red',
    'age'=> 25,
    'nickname' => 'Max'
];

foreach ($assoc as $item) {
    echo $item."<br>";
}
?>




<!--<ul>
<li class="nav-item">
        --><?php
/*$counter = 4;
$cur_page = 1;

while ($cur_page <= $nav) {
    //первая итерация $curpage
    echo "<li class=\"nav-item\">
        <a class=\"nav-link active\" href=\"?page = $cur_page\">Active</a>
</li>";
    $cur_page++;
    }
    */?>

        <!--Необходимо создать выпадающий список годов от 2000 до 2050.-->
        <?php
/*        $year = 2000;
        */?><!--

        <select>
<?php /*for($year; $year<=2050; $year++)
    echo "<option>$year</option>"
    */?>
    </select>-->


<!--Отрисовать таблицу умножения.-->

<?php
/*$num1=1;
$num2=;
*/?><!--
<table>
    <tr>
        <td>

        </td>
    </tr>
</table>
-->

<!--При помощи цикла foreach вывести список постов.-->

<?php
$posts = [
    0 => [
        'title' => 'List-based media object 1',
        'slug' => 'list-based-media',
        'author' => 'Author 1',
        'description' => 'Cras sit amet nibh libero, in g
            ravida nulla. Nulla vel metus scelerisque ante sollicitudin.
             Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. 
             Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.'
    ],
    1 => [
        'title' => 'List-based media object 2',
        'author' => 'Author 1',
        'description' => 'Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.'
    ],
    2 => [
        'title' => 'List-based media object 3',
        'author' => 'Author 1',
        'description' => 'Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.'
    ]
];

/*Задача посты*/
/**/?><!--
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h1>Blog</h1>
    <ul class="list-unstyled">
        <?php /*foreach ($posts as $value): */?>
            <li class="media">
                <p><?/*= $value['author'];*/?></p>
                <div class="media-body">
                    <h5 class="mt-0 mb-1"><a href="<?/*= $value['slug'];*/?>"><?/*= $value['title'];*/?></a></h5>
                    <p><?/*= date('Y-m-d');*/?></p>
                    <?/*= $value['description'];*/?>
                    <p><a href="<?/*= $value['slug'];*/?>">Readmore</a></p>
                </div>
            </li>
        <?php /*endforeach;*/?>
    </ul>
</div>
</body>
</html-->

<!--Создать массив чисел,
создать переменную в которой будет храниться знак(+, -, *, /).
 В зависимости от знака, который хранится в переменной, произвести действия с массивом чисел.-->

<?php

// Цикл while

$a = 1;
$b = 2;
while ($a < 10) {
    echo $b ."<br>";
    $b *= 2;
    $a++;
}
echo "<br>";

// Счетчик
$counter = 0;
while($counter <= 10 ){

    echo $counter;
    $counter++;

}
echo "<br>";

// Досрочный выход
$last = 10;
while (true) {
    echo $last;
    if ($last == 10) {
        break;
    }

    $last++;
}
echo "<br>";

// Цикл for
for  ($i  =  0, $k  = "Points";  $i  <  100;  $i++)
    $k =  $k . ".";
echo  $k;

echo "<br>";

// Switch
$number = 100;

switch($number){

    case 34:
        echo "it is 34";
        break;
    case 37:
        echo "is it 37";
        break;
    case 35:
        echo "is it 35";
        break;
    case 24:
        echo "is it 24";
        break;

    default :
        echo "we could not find anything";
        break;
}

echo "<br>";
// Цикл foreach
$menu = array(
    'main' => 'main.php',
    'about' => 'about.php',
    'info' => 'info.php',
    'contacts' => 'contacts.php',
);

echo "<ul>";
foreach ($menu as $key => $value) {
    echo "<li><a href=". $value . ">". $key ."</a></li>";
}
echo "</ul>";


// таблица умножения
$a = 3;
$b = 3;

echo "<table border=\"1px\"><tbody >";
for($i = 1; $a >= $i; $i++) {
    echo "<tr>";
    for ($j = 0, $l = 0; $b > $l; $l++, $j+=$i){
        echo "<td width=\"150px\" align=\"center\" bgcolor=\"pink\">".($i+$j)."</td>";
    }
    echo "</tr>";
}
echo "</tbody></table>";

// Switch
$numbers = array(1,2,3,4,5);
$my_act = "+";
$arr_len = count($numbers);

$result = $numbers[0];
switch($my_act){
    case "+":
        for($i = 1; $i < $arr_len; $i++){
            $result += $numbers[$i];
            // var_dump($result);
        }
        break;
    case "*":
        for($i = 1; $i < $arr_len; $i++){
            $result *= $numbers[$i];
        }
        break;
    case "-":
        for($i = 1; $i < $arr_len; $i++){
            $result -= $numbers[$i];
        }
        break;
    case "/":
        for($i = 1; $i < $arr_len; $i++){
            $result /= $numbers[$i];
        }
        break;
    case "%":
        for($i = 1; $i < $arr_len; $i++) {
            $result %= $numbers[$i];
        }
        break;
    default:
        echo "Ошибочка вышла!";
}
echo $result;

echo "<br>";

// Список годов
echo "<select>";
for ($i = 2000; $i <= 2050; $i++) {
    echo "<option>" .$i. "</option>";
}
echo "</select>";
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>project</title>
</head>


<?php
/*$url = "https://google.com";
echo "Test";
?>*/


/*<a href="<?php echo $url; ?>">Google</a>
<hr>
<a href="<?= $url; ?>">Google</a>
<hr>
<?php
$apple = 5;
$fruite = "apple";
echo $$fruite;
?>
<br>
<?php
$apple = 5;
$fruite = "apple";
echo ${$fruite};
?>
<br>
<h>27062019</h>
<br>
<?php


$value = 10;
echo $value = $value + 5, "<br>";
echo $value = $value * 5, "<br>";
echo $value = $value / 5, "<br>";

$a = $b = $c = $d = 2;

echo $a++, "<br>";//2
echo ++$b, "<br>";//3
echo $c--, "<br>";//2
echo --$d, "<br>";//1

$d = "hello";
$d = $d . "world";
echo $d;
echo "<br>";//hello world

$d .= "!!!";
echo $d;//hello world !!!
echo "<br>";
echo 2 == "2", "<br>";//1
echo 1 == 2;//false
echo 3 === 3;//true???


$a = '5';
$b = 5;
echo $c = $a == $b;  //false
echo $c = $a === $b; //true
echo $c = $a > $b;
echo $c = $a <= $b;


if ($i = 50) {
    echo "разрешить";
}
echo "<br>";


$hour = date('h', time());
if ($hour < 12) {
    echo "A.M";
} else if ($hour == 12) {
    echo "Noon";
} else {
    echo "After noon";
}
echo "<br>";

$speed = 55; //задать значение
switch ($speed) {
    case 74;
        echo "speed 74";
        break;// при значении 74 выводить то то
    case $speed < 70:
        echo "good";
        break;//при значении меньше 70 выести хорошо
    case $speed > 80;
        echo "forbidden";
        break;// при значениее больше 80 вывести запрещенно
    default:
        echo "123123";// если вообще что то другое ввели тогда вот так
}*/
/*$bmw = ["model" => "x5", "speed" =>140 , "doors"=>5 , "year"=>2007];

echo "BMW:"."<br/>";

echo "<pre>";
foreach ($bmw as $key => $value)
    echo " {$key} - {$value} <br/>";
echo "</pre>";

$toyota = ["model" => "carina", "speed" => 130, "doors" => 4, "year" =>"2007"];

echo "Toyota:"."<br/>";

echo "<pre>";
foreach ($toyota as $key => $value)
    echo " {$key} - {$value} <br/>";
echo "</pre>";

$opel = ["model" => "Corsa", "speed" => 140, "doors" => 5, "year" =>"2007"];

echo "OPEL:"."<br/>";

echo "<pre>";
foreach ($opel as $key => $value)
    echo " {$key} - {$value} <br/>";
echo "</pre>";*/



/*for ($i =1; $i<= 50;$i+=2){
    echo $i."<br/>";}
    */

for ($str = 1; $str <10; $str++){
    echo $str;
}
echo "<br/>";
for ($str = 10; $str >= 1; $str--){
    echo $str;
}
echo "<br/>";
for ($str = 1; $str <10; $str++){

    echo $str."-";
}

$str = '';
for ($i = 0; $i < 20; $i++) {
    $str .= 'x';
    echo $str.'<br>';
}

?>


</body>
</html>
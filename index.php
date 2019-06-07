<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>project</title>
</head>
<h1>Hello </h1>

<?php
$url = "https://google.com";
echo "Test";
?>


<a href="<?php echo $url; ?>">Google</a>
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

<?php


$value = 10;
echo $value = $value + 5, "<br>";
echo $value = $value * 5, "<br>";
echo $value = $value / 5, "<br>";

$a = $b = $c = $d = 2;

echo $a++,"<br>";//2
echo ++$b,"<br>";//3
echo $c--,"<br>";//2
echo --$d,"<br>";//1

$d = "hello";
$d = $d."world";
echo $d;
echo "<br>";//hello world

$d.= "!!!";
echo $d;//hello world !!!



?>




</body>
</html>
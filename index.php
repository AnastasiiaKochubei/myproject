<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>project</title>
</head>
<h1>Hello </h1>

<?php
$url = "https://google.com";

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




</body>
</html>
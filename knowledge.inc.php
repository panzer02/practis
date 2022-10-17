<?php
$a = 'Мои знания на';
$b = 100;
$c = '%';
?>

<?php
  $price = 15;

  if($price >= 15 && $price <= 20)
      $d = 'Это число находится между 15 и 20';
?>

<?php
$number = 5;
$num = gettype($number);
?>

<?php
$x = 2;
$y = &$x;
$y = 4;
?>

<?php
$globalName = "Ivan";
function sayHello() {
  $localName = "Vasiliy";
  //echo "Привет, $localName!<br>";
 }
sayHello();
$name1 = "Значение \$globalName: '$globalName'<br>";
?>


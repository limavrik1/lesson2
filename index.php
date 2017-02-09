<?php
/**
 * Created by PhpStorm.
 * User: MAV
 * Date: 09.02.2017
 * Time: 13:39
 */

$x = (int)$_GET['x'];
$var1 = 1;
$var2 = 1;
echo "Число ".$x;
echo '<br>';
echo PHP_EOL;

while ($var1 > $x || $var1 === $x || $var1 < $x){
    if ($var1 > $x){
        echo "Задуманное число ". $x ." не входит в числовой ряд Фибоначчи. ";
        echo '<br>';
        echo PHP_EOL;
        break;
    }
    if ($var1 === $x){
        echo "Задуманное число ". $x ." входит в числовой ряд Фибоначчи.";
        echo '<br>';
        echo PHP_EOL;
        break;
    }
    if ($var1 != $x){
        $var3 = $var1;
        $var1 = $var1 + $var2;
        $var2 = $var3;
    }
}
//echo "var1 ".$var1;
//echo PHP_EOL;
//echo "var2 ".$var2;
//echo PHP_EOL;
//echo "var3 ".$var3;
//echo PHP_EOL;
?>
<?php

require_once('./Math.php');
require_once('./Rotate.php');
require_once('./Extend.php');

$math = new Math();
$rotate = new Rotate();
$extend = new Extend();

echo("Average: " . $math->optimizedMathAvg());
echo '<br/>';

$lsArray = $rotate->RotateArray(4);
$extend->setExtendArray($rotate->getArrayJson());
echo "Left Shifted Array: ";
print_r($lsArray);
echo '<br/>';

echo("Last value of rotated array: " . $extend->exeRotate());
echo '<br/>';

?>
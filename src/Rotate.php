<?php

class Rotate
{
	function RotateArray($rotations) {
		$contentJson = file_get_contents('../assets/rotate.json');
		$arrayJson = json_decode($contentJson, true);
		echo "Initial Array: "; 
		print_r($arrayJson);
		echo '<br/>';
		$addToEnd = "";
		for ($i=$rotations; 1 <= $i; $i--) {
			$addToEnd = $arrayJson[0];
			array_splice($arrayJson, 0, 1);
			array_push($arrayJson, $addToEnd);
		}
		return $arrayJson;
    }
}
$rotate = new Rotate();
$lsArray = $rotate->RotateArray(4);
echo "Left Shifted Array: ";
print_r($lsArray);
?>
<?php

class Rotate
{
	private $arrayJson;
	public function RotateArray($rotations) {
		$contentJson = file_get_contents('../assets/rotate.json');
		$this->arrayJson = json_decode($contentJson, true);
		echo "Initial Array: "; 
		print_r($this->arrayJson);
		echo '<br/>';
		$addToEnd = "";
		for ($i=$rotations; 1 <= $i; $i--) {
			$addToEnd = $this->arrayJson[0];
			array_splice($this->arrayJson, 0, 1);
			array_push($this->arrayJson, $addToEnd);
        }
		return $this->arrayJson;
    }
    public function getArrayJson(){
		return $this->arrayJson;
    }
    public function setArrayJson($array){
		return $this->arrayJson = $array;
    }
}
?>
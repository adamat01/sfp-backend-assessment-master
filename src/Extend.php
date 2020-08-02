<?php

class Extend extends Rotate
{
    private $extendArray;
    public function exeRotate(){
        $end = sizeof($this->extendArray);
        return ($this->extendArray[$end-1]);
    }
	public function getExtendArray(){
		return $this->extendArray;
    }
    public function setExtendArray($array){
		return $this->extendArray = $array;
    }
}
?>
<?php
    function mathAverage(){
        $file = fopen('../assets/tabular.csv', 'r');
		$x = TRUE;
		$titles = array();
		$assoArray = array();
        while (($line = fgetcsv($file)) !== FALSE) {
			if ($x === TRUE) {
				$x = FALSE;
				$titles = $line;
				continue;
			}else{
				$temp = array($titles[0] => $line[0], $titles[1] => $line[1], $titles[2] => $line[2]);
				array_push($assoArray, $temp);
			}
        }
        fclose($file);
        $avg = 0;
        $ct = 0;
		foreach($assoArray as $element) {
			if ($element['accept'] === 'true') {
                $avg += $element['value'];
                $ct += 1;
			}
		}
		$avg = $avg / $ct;
		print_r($avg);
    }
mathAverage()
?>
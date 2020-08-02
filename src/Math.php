<?php
    function optimizedMathAvg() {
        $file = fopen('../assets/tabular.csv', 'r');
        $x = TRUE;
        $avg = 0;
        $ct = 0;
        while (($line = fgetcsv($file)) !== FALSE) {
			if ($x === TRUE) {
				$x = FALSE;
				continue;
			}else{
				if ($line[2] === 'true') {
					$avg += $line[1];
					$ct += 1;
				}
			}
        }
        fclose($file);
		$avg = $avg / $ct;
        return $avg;
    }
echo("Average: " . optimizedMathAvg());
?>
<?php

$sum = 0;

$fh = fopen('./input_02_02.txt','r');
$i =0;
$j = 0;
while ($line = fgetcsv($fh, 1000, ',')) {
sort ($line);

	for ($i=0; $i < count($line); $i++) {
			for ($j = count($line)-1; $j>=0; $j--) {
				if ($line[$j]!= $line[$i] && $line[$j] % $line[$i] === 0) {
					$sum += $line[$j] / $line [$i];
					break 2;
				}
			}
	}
}
fclose($fh);

print_r($sum);


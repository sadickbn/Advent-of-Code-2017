<?php

$sum = 0;

$fh = fopen('./input_02.txt','r');

while ($line = fgetcsv($fh, 1000, ',')) {
sort ($line);

$sum += $line [count($line) - 1] - $line[0];
}
fclose($fh);

print_r($sum);


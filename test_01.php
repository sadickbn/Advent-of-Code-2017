<?php
function check_captcha(array $arr) { 
$sum = 0;
	for ($i = 0; $i < count($arr); $i++) {
		if ($i === count($arr) - 1)
		{
			if ($arr[$i] === $arr[0]) $sum += $arr[0];
		} else
		{
			// check if current digit matches with next element
			if ($arr[$i] === $arr[$i+1]) $sum+= $arr[$i];
		}
	}
return $sum;
}
?>
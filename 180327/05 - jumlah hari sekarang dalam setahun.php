<?php
function getcountdayinyear($yyyy,$mm,$dd){
	$i = 1;
	$tempday = 0;
	while($i<$mm){
		$totalday = cal_days_in_month(CAL_GREGORIAN, $i, $yyyy);
		$tempday = $tempday+$totalday;
		$i++;
	}
	$countdayinyear = $tempday + $dd;
	return $countdayinyear;
}

$yyyy=date("Y");
$mm=date("m");
$dd = date("d");

echo getcountdayinyear($yyyy,$mm,$dd);

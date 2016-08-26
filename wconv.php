<?php

include "wtable.php";

function ToHant($str) {
	global $zh2Hant_phase1, $zh2Hant_phase2;
	$phase1 = strtr($str, $zh2Hant_phase2);
	if(!$phase1)return $str;
	
	$phase2 = strtr($phase1, $zh2Hant_phase1);
	return ($phase2 ? $phase2 : $phase1);
}

function ToHans($str) {
	global $zh2Hans_phase1, $zh2Hans_phase2;
	$phase1 = strtr($str, $zh2Hans_phase2);
	if(!$phase1)return $str;
	
	$phase2 = strtr($phase1, $zh2Hans_phase1);
	return ($phase2 ? $phase2 : $phase1);
}

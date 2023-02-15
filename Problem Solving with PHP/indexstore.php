<?php


function findIndex($arr, $find){

	$start = -1;
	$end = -1;
	
    foreach ($arr as $key => $value) {
		
		if($find === $value){
			
			if($start==-1)
				$start = $key;
			$end = $key;
		}
	}

	if($start==-1){
		return "Key not present in array";
	}
	if($end == $start){
		return "Only one key is present "." at index : ". $start;
	}
	return "Start index: ".$start. "\nLast index: ".$end;
}


$a = array(1, 2, 7, 8, 8, 9, 8, 0, 0, 0, 8);


$key = 8;


echo findIndex($a, $key);

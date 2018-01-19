<?php
$data = 'id:name:age
1:Ваня:8
2:Коля:10
3:Саша:5';

$strings = explode("\n", $data);
$titles = array_shift($strings);
$keys = explode(":", $titles);

// echo '<pre>';
// echo 'strings ';
// var_dump($strings);
// echo '</pre>';

// echo '<pre>';
// echo 'strings ';
// var_dump($titles);
// echo '</pre>';

// echo '<pre>';
// echo 'keys ';
// var_dump($keys);
// echo '</pre>';

foreach($strings as $string){
	$values = explode(":", $string);
	foreach($values as $i => $value){
		$key = $keys[$i];
		echo '<pre>';
		echo 'values ';
		var_dump($key, $value);
		echo '</pre>';
	}
	// echo '<pre>';
	// echo 'values ';
	// var_dump($values);
	// echo '</pre>';
}
?>
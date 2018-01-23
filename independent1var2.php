<?php
$data = 'id:name:age
1:Ваня:8
2:Коля:10
3:Саша:5';
$strings = explode("\n", $data);
$titles = array_shift($strings);
$keys = explode(":", $titles);
$row = [];
$merged_array = [];
foreach($strings as $string)
{
	$values = explode(":", $string);
	
	foreach($values as $i => $value)
	{
		$row[$keys[$i]] = $value;
	}
	$merged_array[] = $row;
}
echo '<pre>';
var_dump($merged_array);
echo '</pre>';
?>
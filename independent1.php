<?php
//Исходная строка.
$data = 'id:name:age
1:Ваня:8
2:Коля:10
3:Саша:5';
//Разбиение исходной строки $data на части по символу "\n".
$strings = explode("\n", $data);
//Перемещение из массива строк $strings в переменную $titles первой строки.
$titles = array_shift($strings);
//Разбиение строки $titles по символу ":" на отдельные слова (ключи).
$keys = explode(":", $titles);
foreach($strings as $string)
{
	$values = explode(":", $string);
	foreach($values as $i => $value)
	{
		$key = $keys[$i];
		$merged_array = 
		[
			$key => $value
		];
		echo '<pre>';
		// echo 'values ';
		var_dump($merged_array);
		echo '</pre>';
		// echo '<pre>';
		// // echo 'values ';
		// var_dump($key, $value);
		// echo '</pre>';
	}
}
?>
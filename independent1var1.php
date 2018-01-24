<?php
	$staff = 
	[
		['id' => 1, 'name' => 'Дима', 'age' => 23, 'salary' => 400], 
		['id' => 2, 'name' => 'Петя', 'age' => 25, 'salary' => 500],
		['id' => 3, 'name' => 'Вася', 'age' => 23, 'salary' => 500],
		['id' => 4, 'name' => 'Коля', 'age' => 30, 'salary' => 1000],
		['id' => 5, 'name' => 'Иван', 'age' => 27, 'salary' => 500],
		['id' => 6, 'name' => 'Кирилл', 'age' => 28, 'salary' => 1000]
	];
	$keys_names = array_keys($staff[0]);
	// echo '<pre>';
	// var_dump($keys_names);
	// echo '</pre>';
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Independent work 1 variant 1</title>
</head>
<body>
	<table border="1">
		<tr>
			<?php foreach($keys_names as $key_name): ?>
				<th><?=$key_name?></th>
			<?php endforeach; ?>	
		</tr>
			<?php foreach($staff as $person): ?>
				
		<tr>
			<?php foreach($person as $item): ?>
				<td><?=$item?></td>
			<?php endforeach; ?>	
		</tr>
			<?php endforeach; ?>
	</table>
</body>
</html>
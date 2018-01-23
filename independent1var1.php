<?php
	$table = 
	[
		['id' => 1, 'name' => 'Дима', 'age' => 23, 'salary' => 400], 
		['id' => 2, 'name' => 'Петя', 'age' => 25, 'salary' => 500],
		['id' => 3, 'name' => 'Вася', 'age' => 23, 'salary' => 500],
		['id' => 4, 'name' => 'Коля', 'age' => 30, 'salary' => 1000],
		['id' => 5, 'name' => 'Иван', 'age' => 27, 'salary' => 500],
		['id' => 6, 'name' => 'Кирилл', 'age' => 28, 'salary' => 1000]
	];
	// echo '<pre>';
	// var_dump($table);
	// echo '</pre>';

?>
<!-- <?=$table[0][0]?> -->
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Independent work 1 variant 2</title>
</head>
<body>
	<table>
		<tr>
		<?php foreach($table as $item): ?>
			<th><?=$item['id']?></th>
		<?php endforeach; ?>
		</tr>
		<tr>
			<td></td>
		</tr>
	</table>
</body>
</html>
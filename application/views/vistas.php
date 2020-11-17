<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1><?= $titulo ?></h1>
	<ul>
		<?php foreach($lista as $item):?>
			<li><?= $item ?></li>
		<?php endforeach;?>
	</ul>
</body>
</html>

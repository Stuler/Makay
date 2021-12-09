<?php

try {
	$pdo = new PDO('mysql:host=localhost;dbname=workouts; charset=utf8',
		'root',
		'root');
	$pdo->setAttribute(PDO::ATTR_ERRMODE,
		PDO::ERRMODE_EXCEPTION);

	$sql = 'SELECT `id`, `name` FROM excercise';
	$excercises = $pdo->query($sql);


//	Tento kod je NEEFEKTIVNY!!:
//	$result = $pdo->query($sql);
//
//	while ($row = $result->fetch()) {
//		$excercises[] = [
//			'id' => $row['id'],
//			'name' => $row['name']];
//	}

	$title = 'Excercises list';

	ob_start();

	include __DIR__ . '/../templates/excercises.html.php';

	$output = ob_get_clean();
} catch (PDOException $e) {
	$msg = 'Unable to connect to the database server:' .
		$e->getMessage() . ' in ' .
		$e->getFile() . ' line ' . $e->getLine();
}

include __DIR__ . '/../templates/layout.html.php';
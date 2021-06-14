<?php

if (isset($_POST['name'])) {
	try {
		$pdo = new PDO('mysql:host=localhost;dbname=workouts; charset=utf8',
			'root',
			'');
		$pdo->setAttribute(PDO::ATTR_ERRMODE,
			PDO::ERRMODE_EXCEPTION);

		$sql = 'INSERT INTO `excercise` SET 
			`name` = :name'; //obsahuje placeholder :name

//		posiela query SQL na server, ale zatial ho nespusta - nema hodnotu pre name
//		metoda prepare vracia PDOStatement objekt do premennej $stmt
		$stmt = $pdo->prepare($sql);

//		hodnoty posielame cez bindValue - posielame raz pre kazdu hodnotu, ktoru chceme ulozit do DB
//		tymto sposobom zaistime, ze sa neposle zly SQL kod a sluzi aj ako ochrana pred injection
		$stmt->bindValue(':name', $_POST['name']);
		$stmt->execute();

		header('location: ../templates/excercises.php');

	} catch (PDOException $e) {
		$title = 'An error has occured:';
		$output = 'Database error: ' .
			$e->getMessage() . ' in ' .
			$e->getFile() . ' line ' . $e->getLine();
	}
} else {
	$title = 'Add new excercise';
	ob_start();
	include __DIR__ . '/../templates/addExcercise.html.php';
	$output = ob_get_clean();
}

include __DIR__ . '/../templates/layout.html.php';

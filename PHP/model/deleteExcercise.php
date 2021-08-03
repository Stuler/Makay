<?php

	try {
		$pdo = new PDO('mysql:host=localhost;dbname=workouts; charset=utf8',
			'root',
			'');
		$pdo->setAttribute(PDO::ATTR_ERRMODE,
			PDO::ERRMODE_EXCEPTION);

		$sql = 'DELETE FROM `excercise` WHERE 
			`id` = :id';

		$stmt = $pdo->prepare($sql);

		$stmt->bindValue(':id', $_POST['id']);
		$stmt->execute();

		header('location: ../model/excercises.php');

	} catch (PDOException $e) {
		$title = 'An error has occured:';
		$output = 'Database error: ' .
			$e->getMessage() . ' in ' .
			$e->getFile() . ' line ' . $e->getLine();
	}


include __DIR__ . '/../templates/layout.html.php';

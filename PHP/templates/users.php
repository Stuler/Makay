<?php

try {
	$pdo = new PDO('mysql:host=localhost;dbname=workouts; charset=utf8',
		'root',
		'');
	$pdo->setAttribute(PDO::ATTR_ERRMODE,
		PDO::ERRMODE_EXCEPTION);

	$sql = 'SELECT name FROM user';
	$result = $pdo->query($sql);

	//metoda fetch() vracia nasledujuci riadok vysledkov ako pole; ak uz neexistuje dalsi riadok, vrati false
	//priradenie do $row priradi hodnotu premennej $row, ale zaroven cely blok dostane tu istu hodnotu
	while ($row = $result->fetch()) {
		$users[] = $row['name'];
	}

	$title = 'Users list';

	// Nacita buffer
	ob_start();

	/** Includne template, PHP kod bude vykonany,
	 * ale vysledny HTML kod users.html bude ulozeny do bufferu,
	 * nie odoslany prehliadacu.
	 */
	include __DIR__ . '/../templates/users.html.php';

	/** Nacita obsah vystupneho bufferu a ulozi ho do
	 * @var  $output
	 * pre pouzitie v layout.html
	 */
	$output = ob_get_clean();
} catch (PDOException $e) {
	$msg = 'Unable to connect to the database server:' .
		$e->getMessage() . ' in ' .
		$e->getFile() . ' line ' . $e->getLine();
}

include __DIR__ . '/../templates/layout.html.php';
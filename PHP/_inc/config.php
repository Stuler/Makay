<?php

/**
 * Vytovime PDO objekt, reprezentujuci databazu;
 * Nasledne vybudujeme funckionalitu databazy okolo tohto objektu
 */
try {
    $pdo = new PDO('mysql:host=localhost;dbname=workouts; charset=utf8',
        'root',
        'root');

//    Aby PDO vyhodilo vynimku stale, ked sa mu nieco nepodari
    $pdo->setAttribute(PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION);

    $sql = 'SELECT name FROM user';
    $result = $pdo->query($sql);

    $msg = 'Database connection established';
    }
    catch (PDOException $e){
    $msg = 'Unable to connect to the database server:' .
        $e->getMessage() . ' in ' .
        $e->getFile() . ' line ' . $e->getLine();
}

include __DIR__ . '/../templates/output.php';

//    Vytvorenie tabulky user
/*    $sql = 'CREATE TABLE user (
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
name TEXT,
email TEXT
) DEFAULT CHARACTER SET utf8 ENGINE=InnoDB';

$pdo->exec($sql);*/


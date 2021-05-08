<?php

/**
 * Vytovime PDO objekt, reprezentujuci databazu;
 * Nasledne vybudujeme funckionalitu databazy okolo tohto objektu
 */
try {
    $pdo = new PDO('mysql:host=localhost;dbname=workouts',
        'root',
        'root');
    $msg = 'Database connection established';
    }
    catch (PDOException $e){
    $msg = 'Unable to connect to the database server:' . $e;
}

/**
 * Aby PDO vyhodilo vynimku stale, ked sa mu nieco nepodari
 */
$pdo->setAttribute(PDO::ATTR_ERRMODE,
PDO::ERRMODE_EXCEPTION);

include __DIR__ . '/../templates/output.php';



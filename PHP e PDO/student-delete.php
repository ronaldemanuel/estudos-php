<?php

require_once 'vendor/autoload.php';

$databasePath = __DIR__ . '/database.sqlite';
$pdo = new PDO('sqlite:' . $databasePath);

$sqlDelete = 'DELETE FROM students WHERE id = ?;';
$stmt = $pdo->prepare($sqlDelete);
$stmt->bindValue(1, 3, PDO::PARAM_INT);
var_dump($stmt->execute());

// $stmt->bindValue(1, 6, PDO::PARAM_INT);
// $stmt->execute();
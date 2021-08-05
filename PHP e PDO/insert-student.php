<?php

use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

$databasePath = __DIR__ . '/database.sqlite';
$pdo = new PDO('sqlite:' . $databasePath);

$student = new Student(null, 'Ronald Emanuel', new \DateTimeImmutable('2003-03-08'));

$sqlInsert = "INSERT INTO students (name, birth_date) VALUES ('{$student->getName()}', '{$student->getBirthDate()
    ->format('Y-m-d')}')";

var_dump($pdo->exec($sqlInsert));
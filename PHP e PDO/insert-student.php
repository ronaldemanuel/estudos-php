<?php

use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

$databasePath = __DIR__ . '/database.sqlite';
$pdo = new PDO('sqlite:' . $databasePath);

$student = new Student(null, 'Crispim da Silva', new \DateTimeImmutable('2000-06-15'));

$sqlInsert = "INSERT INTO students (name, birth_date) VALUES ('{$student->getName()}', '{$student->getBirthDate()
    ->format('Y-m-d')}')";

var_dump($pdo->exec($sqlInsert));
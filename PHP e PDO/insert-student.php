<?php

use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

$databasePath = __DIR__ . '/database.sqlite';
$pdo = new PDO('sqlite:' . $databasePath);

$student = new Student(
    null,
    "Maria José",
    new \DateTimeImmutable('2002-10-27')
);

$sqlInsert = "INSERT INTO students (name, birth_date) VALUES (:name, :birth_date);";
$stmt = $pdo->prepare($sqlInsert);
$stmt->bindValue(':name', $student->getName());
$stmt->bindValue(':birth_date', $student->getBirthDate()->format('Y-m-d'));
if ($stmt->execute()) {
    echo "Aluno adicionado";
}


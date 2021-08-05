<?php

use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

$databasePath = __DIR__ . '/database.sqlite';
$pdo = new PDO('sqlite:' . $databasePath);

$stmt = $pdo->query('SELECT * FROM students;');
$studentDataList = $stmt->fetchAll(PDO::FETCH_ASSOC);
$studentList = [];

foreach ($studentDataList as $studentData) {
    $studentList[] = new Student(
        $studentData['id'],
        $studentData['name'],
        new \DateTimeImmutable($studentData['birth_date'])
    );
}

var_dump($studentList);

//$stmt = $pdo->query('SELECT * FROM students;');
//
//while ($studentData = $stmt->fetch(PDO::FETCH_ASSOC)) {
//    $student = new Student(
//        $studentData['id'],
//        $studentData['name'],
//        new \DateTimeImmutable($studentData['birth_date'])
//    );
//
//    echo $student->getName() . ': ' . $student->age() . ' anos' . PHP_EOL;
//}

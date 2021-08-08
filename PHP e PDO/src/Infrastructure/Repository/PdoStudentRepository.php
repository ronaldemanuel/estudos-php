<?php

namespace Alura\Pdo\Infrastructure\Repository;

use Alura\Pdo\Domain\Model\Student;
use Alura\Pdo\Domain\Repository\StudentRepository;
use Alura\Pdo\Infrastructure\Persistence\ConnectionCreator;
use PDO;

class PdoStudentRepository implements StudentRepository
{
    private \PDO $connection;

    public function __construct()
    {
        $this->connection = ConnectionCreator::createConnection();
    }

    public function allStudents(): array
    {
        $sql = "SELECT * FROM students;";
        $stmt = $this->connection->query($sql);

        return $this->hydrateStudentList($stmt);
    }

    public function studentsBirthAt(\DateTimeInterface $birthDate): array
    {
        $sql = "SELECT * FROM students WHERE birth_date = ?";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindValue(1, $birthDate->format('Y-m-d'));
        $stmt->execute();

        return $this->hydrateStudentList($stmt);
    }

    private function hydrateStudentList(\PDOStatement $stmt): array
    {
        $studentDataList = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $studentList = [];

        foreach ($studentDataList as $studentData) {
            $studentList[] = new Student(
                $studentData['id'],
                $studentData['name'],
                new \DateTimeImmutable($studentData['birth_date'])
            );
        }

        return $studentList;
    }

    public function save(Student $student): bool
    {
        if ($student->getId() === null) {
            return $this->insert($student);
        }

        return $this->update($student);
    }

    private function insert(Student $student): bool
    {
        $sql = "INSERT INTO students (name, birth_date) VALUES (:name, :birth_date);";
        $stmt = $this->connection->prepare($sql);
        $success = $stmt->execute([
            ':name' => $student->getName(),
            ':birth_date' => $student->getBirthDate()->format('Y-m-d')
        ]);

        if ($success) {
            $student->defineId($this->connection->lastInsertId());
        }

        return $success;
    }

    private function update(Student $student): bool
    {
        $sql = "UPDATE students SET name = :name, birth_date = :birth_date WHERE id = :id";
        $stmt = $this->connection->prepare($sql);
        return $stmt->execute([
            ':name' => $student->getName(),
            'birth_date' => $student->getBirthDate()->format('Y-m-d'),
            ':id' => $student->getId(), PDO::PARAM_INT
        ]);
    }

    public function remove(Student $student): bool
    {
        $sql = "DELETE FROM students WHERE id = ?";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindValue(1, $student->getId(), PDO::PARAM_INT);
        return $stmt->execute();
    }
}
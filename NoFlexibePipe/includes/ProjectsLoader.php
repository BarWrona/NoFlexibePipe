<?php
require_once 'Project.php';

class ProjectsLoader
{
    private const DB_HOST = 'localhost';
    private const DB_NAME = 'NoFlexibePipe';
    private const DB_USER = 'root';
    private const DB_PASS = '';

    private PDO $connection;
    private array $projects = [];

    public function __construct()
    {
        $this->connectToDatabase();
        $this->loadProjects();
    }

    private function connectToDatabase(): void
    {
        try {
            $this->connection = new PDO(
                "mysql:host=" . self::DB_HOST . ";dbname=" . self::DB_NAME,
                self::DB_USER,
                self::DB_PASS
            );
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }

    private function loadProjects(): void
    {
        try {
            $stmt = $this->connection->query("SELECT image, title, details FROM projects");
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $this->projects[] = new Project(
                    $row['image'],
                    $row['title'],
                    $row['details']
                );
            }
        } catch (PDOException $e) {
            die("Query failed: " . $e->getMessage());
        }
    }

    public function getProjects(): array
    {
        return $this->projects;
    }
}

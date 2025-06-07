<?php
require_once 'Project.php';

class ProjectsLoader
{
    private PDO $connection;
    private array $projects = [];

    public function __construct()
    {
        $this->connectToDatabase();
        $this->loadProjects();
    }

    private function connectToDatabase(): void
    {
        $db_host = 'localhost';
        $db_user = 'root';
        $db_pass = '';
        $db_name = 'NoFlexibePipe';
        try {
            $this->connection = new PDO("mysql:host=" . $db_host . ";dbname=" . $db_name, $db_user, $db_pass);
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

<?php
require_once 'Review.php';

class ReviewsLoader
{
    private PDO $connection;
    private array $reviews = [];

    public function __construct()
    {
        $this->connectToDatabase();
        $this->loadReviews();
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

    private function loadReviews(): void
    {
        try {
            $stmt = $this->connection->query("SELECT profileImage, reviewTitle, description FROM reviews");
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $this->reviews[] = new Review(
                    $row['profileImage'],
                    $row['reviewTitle'],
                    $row['description']
                );
            }
        } catch (PDOException $e) {
            die("Query failed: " . $e->getMessage());
        }
    }

    public function getReviews(): array
    {
        return $this->reviews;
    }
}

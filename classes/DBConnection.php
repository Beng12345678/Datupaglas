<?php
class DBConnection {
    private $conn;

    public function __construct() {
        // Establish a new connection
        $this->conn = new mysqli("localhost", "root", "", "datupaglas_db");

        // Check for connection error
        if ($this->conn->connect_error) {
            throw new Exception("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function __destruct() {
        // Safely close the connection only if it's still valid
        if ($this->conn && $this->conn instanceof mysqli) {
        }
    }

    public function getConnection() {
        return $this->conn;
    }
}

// Main Script: Using the DBConnection class
try {
    // Create an object of DBConnection to establish a database connection
    $dbConnection = new DBConnection();
    $conn = $dbConnection->getConnection();

    // Example: Query the database for user data
    $result = $conn->query("SELECT * FROM users");

    if ($result) {
        // Loop through the result set and print each row
        while ($row = $result->fetch_assoc()) {
            echo "Username: " . $row['username'] . "<br>";
        }
    } else {
        echo "Query failed: " . $conn->error;
    }
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>
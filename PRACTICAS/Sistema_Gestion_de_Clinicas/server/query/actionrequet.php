<?php
require_once '../config/db/dbcnt.php';

class ActionRequest {
    private $conn;
    private $table_name = "usuarios";

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function login($email, $password) {
        try {
            // Prepare the SQL query
            $query = "SELECT * FROM " . $this->table_name . " WHERE email = :email LIMIT 1";
            $stmt = $this->conn->prepare($query);

            // Clean the data
            $email = htmlspecialchars(strip_tags($email));

            // Bind parameters
            $stmt->bindParam(":email", $email);

            // Execute the query
            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                $row = $stmt->fetch(PDO::FETCH_ASSOC);
                
                // Verify password
                if (password_verify($password, $row['password'])) {
                    // Create session data
                    session_start();
                    $_SESSION['user_id'] = $row['id'];
                    $_SESSION['email'] = $row['email'];
                    
                    return array(
                        "status" => true,
                        "message" => "Login successful",
                        "user" => array(
                            "id" => $row['id'],
                            "email" => $row['email']
                        )
                    );
                }
            }

            return array(
                "status" => false,
                "message" => "Invalid email or password"
            );

        } catch(PDOException $e) {
            return array(
                "status" => false,
                "message" => "Login failed: " . $e->getMessage()
            );
        }
    }
}

// Example usage:
/*
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = new ActionRequest();
    $response = $action->login($_POST['email'], $_POST['password']);
    echo json_encode($response);
}
*/
?>
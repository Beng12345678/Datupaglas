
<?php
require_once('../../config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $db = new DBConnection;
    $conn = $db->getConnection();

    if (isset($_POST['form1'])) {
        try {
            // Prepare and bind
            $stmt = $conn->prepare("INSERT INTO taxpayers 
                (lastname, firstname, middlename, birthdate, pob_barangay, pob_municipality, pob_province, email, contactnum, gender, status) 
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
            
            // Bind parameters
            $stmt->bind_param("sssssssssss", 
                $_POST['lastname'], 
                $_POST['firstname'], 
                $_POST['middlename'], 
                $_POST['birthdate'], 
                $_POST['pob_barangay'], 
                $_POST['pob_municipality'], 
                $_POST['pob_province'], 
                $_POST['email'], 
                $_POST['contactnum'], 
                $_POST['gender'], 
                $_POST['status']
            );

            // Execute and check for success
            if ($stmt->execute()) {
                echo "Data successfully inserted!";
            } else {
                echo "Error inserting data: " . $stmt->error;
            }

            // Close statement
            $stmt->close();
        } catch (Exception $e) {
            echo "An error occurred: " . $e->getMessage();
        }
    } else {
        echo "Form data not set.";
    }

    // Close connection
    $conn->close();
} else {
    echo "Invalid request method.";
}
?>

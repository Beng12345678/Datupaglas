<?php
// add_user.php

// Connect to the database
$db = new mysqli('localhost', 'root', 'password', 'datupaglas_db');

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

// Get the form data
$user_lastname = $_POST['user_lastname'];
$user_firstname = $_POST['user_firstname'];
$user_middlename = $_POST['user_middlename'];
$username = $_POST['username'];
$password = $_POST['password'];
$user_type = $_POST['user_type'];

// Validate and sanitize the form data
$user_lastname = trim($user_lastname);
$user_firstname = trim($user_firstname);
$user_middlename = trim($user_middlename);
$username = trim($username);
$password = trim($password);
$user_type = trim($user_type);

// Prepare the SQL query
$stmt = $db->prepare("INSERT INTO user_details (user_lastname, user_firstname, user_middlename, username, password, user_type) VALUES (?, ?, ?, ?, ?, ?)");

// Bind the form data to the query
$stmt->bind_param("ssssss", $user_lastname, $user_firstname, $user_middlename, $username, $password, $user_type);

// Execute the query
$stmt->execute();

// Close the statement and connection
$stmt->close();
$db->close();

// Redirect the user to a success page or display a success message
header('Location: user_list.php');
exit;
?>
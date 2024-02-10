<?php
session_start();

// Database connection
include 'connection.php';


if($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST['username'];
  $password = $_POST['password'];

  $sql = "SELECT * FROM admin WHERE username = ? AND password = ?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("ss", $username, $password);
  
   // Execute the query
   $stmt->execute();
   $result = $stmt->get_result();

  if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    $_SESSION['username'] = $username;
    header('Location: adminpanel.php');
  }
  else {
    $error_message = "Invalid admin credentials";
  }

  $stmt->close();
}
$conn->close();
?>

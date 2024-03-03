<?php
session_start();

// Database connection
include 'connection.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // username and password sent from form 
  $admin_username = mysqli_real_escape_string($conn,$_POST['username']); 
  $admin_password = mysqli_real_escape_string($conn,$_POST['password']); 

  $sql = "SELECT adminID FROM admin WHERE username = '$admin_username' and password = '$admin_password'";
  $result = mysqli_query($conn,$sql);
  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
  $count = mysqli_num_rows($result);

  // If result matched $admin_username and $admin_password, table row must be 1 row
  if($count == 1) {
      $_SESSION['username'] = $admin_username;
      
      // Redirect to panel page
      header("location: adminpanel.php");
  }
  
  else {
      $error = "Your Login Name or Password is invalid";
  }
}
$conn->close();
?>

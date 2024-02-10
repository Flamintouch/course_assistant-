<?php
// Database connection
include 'connection.php';

// Process form data if submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $fullName = $_POST["full_name"];
    $programOfStudy = $_POST["program_of_study"];
    $yearOfStudy = $_POST["year_of_study"];
    $courseName = $_POST["course_name"];
    $phoneNumber = $_POST["phone_number"];
    $email = $_POST["email"];

    // Handle PDF file upload
    $caFileName = $_FILES["ca_file"]["name"];
    $caFileTmpName = $_FILES["ca_file"]["tmp_name"];
    $caFileContent = file_get_contents($caFileTmpName);

    // Handle image file upload
    $screenshotName = $_FILES["screenshot"]["name"];
    $screenshotTmpName = $_FILES["screenshot"]["tmp_name"];
    $screenshotContent = file_get_contents($screenshotTmpName);

    // Prepare and execute the SQL query using prepared statements
    $sql = "INSERT INTO submission (fullname, programOfStudy, yearOfStudy, courseName, phoneNmbr, email, caFile, screenshot)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssssss", $fullName, $programOfStudy, $yearOfStudy, $courseName, $phoneNumber, $email, $caFileContent, $screenshotContent);


    // Execute the query
    if ($stmt->execute()) {
        echo "New form submitted successfully";
        header("Location: success.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $stmt->error;
    }

    // Close the prepared statement
    $stmt->close();
}

// Close the connection
$conn->close();
?>
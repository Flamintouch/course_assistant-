<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Document</title>

    <style>
        h1 {
            text-align: center;
        }
        .main-container{
            box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
            margin: 30px auto;
            padding: 0.5em;
            width:90%;
        }
    </style>
</head>
<body>
    <?php

    // session_start();
    // //check if user is logged information
    // if(!isset($_SESSION['username'])){
    //     header("Location: adminlogin.php");
    //     exit();
    // }

    include 'connection.php';

    // SQL query to select records from the database
    $sql = "SELECT submissionID, fullname, programOfStudy, courseName, yearOfStudy, phoneNmbr, email, timeStamp FROM submission ORDER BY submissionID ASC";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<div class='main-container'>
                <h1>ADMIN PANEL</h1>
                <table class='table caption-top'>
                 <caption>List of Submissions</caption>
                    <thead class='table-dark'>
                        <tr>
                            <th>Submission ID</th>
                            <th>Full Name</th>
                            <th>Program of Study</th>
                            <th>Year of Study</th>
                            <th>Course Name</th>
                            <th>Phone Number</th>
                            <th>Email</th>
                            <th>CA File</th>
                            <th>Screenshot</th>
                            <th>Time Stamp</th>
                        </tr>
                    <thead>";

            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>".$row["submissionID"]."</td>
                        <td>".$row["fullname"]."</td>
                        <td>".$row["programOfStudy"]."</td>
                        <td>".$row["yearOfStudy"]."</td>
                        <td>".$row["courseName"]."</td>
                        <td>".$row["phoneNmbr"]."</td>
                        <td>".$row["email"]."</td>
                        <td>".$row["caFile"]."</td>
                        <td>".$row["screenshot"]."</td>
                        <td>". $row["timeStamp"] ."</td>
                    </tr>";
            }
        echo "</table></div>";
    }

    else {
        echo "0 results";
    }

    $conn->close();
    ?>

</body>
</html>
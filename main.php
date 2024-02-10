<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Course Assistant - Main</title>
    <style>
        h1, h2, h3, h4, h5, h6{
        color: #054bb4;
        text-align: center;
        }
    </style>
</head>
<body>
    <div class="main-container">
        <h2>Submit Your Information</h2>
        <form action="submission_process.php" method="post" enctype="multipart/form-data">

            <div class="mb-3">
                <!-- <h3>Your Info</h3> -->
                <label class="form-label" for="full_name">Full Name:</label><br>
                <input class="form-control" type="text" name="full_name" placeholder="E.g Joe Kanono" required>
            </div>

            <div  class="mb-3">
                <label class="form-label" for="program_of_study">Program of Study:</label><br>
                <select class="form-select" name="program_of_study" id="" required>
                    <option value="BSE">BSE</option>
                    <option value="BCS">BSC</option>
                    <option value="BIT">BIT</option>
                    <option value="BICT">BICT</option>
                </select>
            </div>

            <div  class="mb-3">
                <label class="form-label" for="year_of_study">Year of Study:</label><br>
                <select class="form-select" name="year_of_study" id="" required>
                    <option value="1st">Year 1</option>
                    <option value="2nd">Year 2</option>
                    <option value="3rd">Year 3</option>
                    <option value="4th">Year 4</option>
                </select>
            </div>

            <div  class="mb-3">
                <label class="form-label" for="course_name">Course Name:</label><br>
                <input class="form-control" type="text" name="course_name" placeholder="E.g Introduction to IT"  required>
            </div>

            <div class="mb-3">
                <label class="form-label" for="course_code">Contact:</label><br>
                <div class="input-group">
                    <span class="input-group-text" id="basic-addon3">+260</span>
                    <input class="form-control" id="basic-url" aria-describedby="basic-addon3 basic-addon4" type="number" name="phone_number" placeholder="E.g 0760000000" required>
                </div>
            </div>

            <div  class="mb-3">
                <label class="form-label" for="course_code">Email:</label><br>
                <input class="form-control" type="email" name="email" placeholder="E.g joekanono@gmail.com"  required>
            </div>

            <div  class="mb-3">
                <!-- <h3>CA Document</h3> -->
                <label class="form-label" for="ca_file">Upload CA File:</label><br>
                <input type="file" name="ca_file" accept=".pdf, .doc, .docx" required>
                <div id="passwordHelpBlock" class="form-text">
                     Upload document of the CA (it should be a 'pdf', 'docx', 'odt', '.jpg', '.png', or '.jpeg').
                </div>
            </div>

            <div  class="mb-3">
                <!-- <h3>Proof of Payment</h3> -->
                <label class="form-label" for="screenshot">Upload Screenshot:</label><br>
                <input type="file" name="screenshot" accept=".jpg, .png, .jpeg" required>
                <div id="passwordHelpBlock" class="form-text">
                    Upload a screenshot of the transaction as proof (it should be a '.jpg', '.png', or '.jpeg').
                </div>
            </div>

            <div  class="mb-3">
                <button class="btn btn-primary" type="submit" >Submit</button>
                <a class="btn btn-danger" href="index.php" class="cancel-button">Cancel</a>
            </div>

        </form>
    </div>
</body>
</html>
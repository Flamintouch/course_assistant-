<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Sucess</title>
    <style>
        .card-title{
            color: 	green;
        }

        .btn{
            background-color: green;
        }
        
        .main-container{
            box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
            margin: 30px auto;
            padding: 1em;
            width:40%;
            padding: 50px 100px;
        }


        @media screen and (max-width: 800px) {
                body {
                   font-size: 12px;
                }
                
              .main-container{
                margin: 30px auto;
                padding: 1em;
                width:80%;
               }
        }

    </style>
</head> 
<body>
<div class="main-container card text-center">
  <div class="card-body">
    <h1 class="card-title">Your Assignment Has Been submitted Sucessfully</h1>
    <p class="card-text">Thank you for trusting us. Your Assignment will be Answered as soon as possible.</p>
    <a href="main.php" class="btn btn-success">Submit More</a>
  </div>
</div>
</body>
</html>
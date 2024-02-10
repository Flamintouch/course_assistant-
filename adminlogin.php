<!DOCTYPE html>
<html>
<head>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <title>Admin Login</title>

  <style>
     
     h2{
        color: #054bb4;
        text-align: center;
     }

     .main-container{
            box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
            margin: 30px auto;
            padding: 1em;
            width:40%;
            padding: 100px;
        }

    .avatar {
      text-align: center;
      margin: 24px 0 12px 0;
    }

    img{
      width: 20%;
      border-radius: 50%;
    }


    span.psw {
      float: right;
      padding-top: 16px;
    }

  </style>
</head>

    <div class="main-container">
        <h2>Administration Login</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["adminlogin_process.php"]); ?>" method="post">
            <div class="avatar">
                <img src="icon.jpg" class="rounded" alt="...">
            </div>

            <div class="mb-3">
                <label for="Username" class="form-label">Username</label>
                <input type="text" name="username" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="Password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>

            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="rememberMe">Remember me</label>
            </div>

            <div class="mb-3">
                <button class="btn btn-primary" type="submit">LOGIN</button>
            </div>

            <div class="mb-3">
                <a class="btn btn-danger"  type="button" href="index.php">Cancel</a>
                <span class="psw">Forgot <a href="#">password?</a></span>
            </div>
        </form>
    </div>
</div>

</body>
</html>

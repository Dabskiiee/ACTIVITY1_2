<?php
    include_once 'config/settings-configuration.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="src/css/login.css">

     <!-- Font Awesome Cdn Link -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script src="src/js/script.js"></script>
    <style>
      .wrapper { display: none; } /* Hide all sections initially */
      .active { display: block; } /* Show only active section */
    </style>
</head>
<body>
     
    <div id="login" class="wrapper active"> <!-- Make this the default active section -->
      <h1>Login</h1>
      <form action="dashboard/admin/authentication/admin-class.php" method="POST">
          <input type="hidden" name="csrf_token" value="<?php echo $csrf_token?>">
          <input type="email" name="email" placeholder="Enter Email" class="curve" required><br>
          <input type="password" name="password" placeholder="Enter Password" class="curve" required><br>
          <p class="recover">
            <a href="forgot-password.php">Forgot Password?</a>
            <br>
            <br>
            <a href="signup.php">Don't have an account? Sign Up</a>
          </p>
          <button type="submit" name="btn-signin">Signin</button>
      </form>

        <div class="not-member">
          <span style="font-family: verdana, geneva, sans-serif;">
            Don't have an account? <a href="#signup" onclick="showSection('signup')">Signup</a>
          </span>
        </div>
    </div>

    <div id="signup" class="wrapper"> <!-- Sign up section -->
      <h1>Registration</h1>
      <br />

      <form action="dashboard/admin/authentication/admin-class.php" method="POST">
        <input type="hidden" name="csrf_token" value="<?php echo $csrf_token?>">
        <input type="text" name="username" placeholder="Enter Username" class="curve" required><br>
        <input type="email" name="email" placeholder="Enter Email" class="curve" required><br>
        <input type="password" name="password" placeholder="Enter Password" class="curve" required><br>
        <button type="submit" name="btn-signup">SIGN UP</button>
      </form>

      <div class="not-member">
        <span style="font-family: verdana, geneva, sans-serif;">
          Already have an account? <a href="#login" onclick="showSection('login')">Login</a>
        </span>
      </div>
    </div>
</body>
</html>
<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/styles.css">
  <title>Login Page</title>
</head>

<body>
  <header>
    <nav>
      <p class="Logo">Books Store</p>
      <ul>
        <li><a href="../index.php">Home</a></li>
        <li><a href="#">Login</a></li>
        <li><a href="register.php">Register</a></li>
      </ul>
    </nav>
  </header>
  <section class="main">
    <div class="log-In">
      <h1>Login to your account</h1>
      <form method="POST" enctype="multipart/form-data"
                action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="">Email</label>
        <input type="email" required placeholder="Email">
        <label for="">Password</label>
        <input type="password" name="password" required placeholder="Password">
        <a href="dashboard.php" rel="noopener noreferrer"><input class="btn" value="Login"></a>
      </form>    
    </div>
  </section>
  <footer>
    <div>
      <p>All Copyrights reserver to <a href="#">Khaleel Mahdi </a>&copy; 2023</p>
      <ul>
        <li><a href="#"><img src="../images/Facebook.png" alt=""></a></li>
        <li><a href="#"><img src="../images/twitter.png" alt=""></a></li>
        <li><a href="#"><img src="../images/Linkedin.jpeg" alt=""></a></li>
      </ul>
    </div>
  </footer>
</body>

</html>


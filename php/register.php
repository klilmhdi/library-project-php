<?php
session_start();

$connection = mysqli_connect("localhost", "root", "", "librarydb");

if (isset($_POST['submit'])) {
  $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        // $image = htmlspecialchars($_POST['image']);
        $url = htmlspecialchars($_POST['url']);
        $country = htmlspecialchars($_POST['country']);
        $age = htmlspecialchars($_POST['age']);
        $phone = htmlspecialchars($_POST['phone']);
        $password = htmlspecialchars($_POST['password']);

        // $image_name = rand() . $image['name'];
        // move_uploaded_file($image['tmp_name'], '../images/server_images/'. $image_name);
      
    if (!empty($email) && !empty($password) && !empty($name)  && !empty($country) && !empty($phone)
     && !empty($age) && !empty($url)) {

       
        $sql = "INSERT INTO `users`(`name`, `email`, `image`, `password`, `country`, `phone`, `age`, `url`) VALUES ('$name', '$email', '$image', '$password', '$country', '$phone', '$age', '$url')";
        $res = mysqli_query($connection, $sql);
        if ($res) {
          echo "<script type='text/javascript'> alert('Successfully Register')</script>";
          return header('Location: dashboard.php');
        }
    } else {
        echo "<script type='text/javascript'> alert('Something is error!!!')</script>";
        // return header('Location: dashboard.php');
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/styles.css">
  <link rel="stylesheet" href="../css/admin-styles.css">
  <title>Register</title>
</head>
<body>
  <header>
    <nav>
      <p class="Logo">Books Store</p>
      <ul>
        <li><a href="../index.php">Home</a></li>
        <li><a href="login.php">Login</a></li>
        <li><a href="#">Register</a></li>
      </ul>
    </nav>
  </header>
  <section class="main">
    <div class="log-In">
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" enctype="multipart/form-data">
        <label for="">Name</label>
        <input type="text" placeholder="Your Name" name="name" id="name" required>
        <label for="">Email</label>
        <input type="email" placeholder="Email" name="email" id="email" required>
        <label for="">URL</label>
        <input type="url" placeholder="https://example.com" name="url" id="url" required>
                        <!-- <label for="Upload">Image</label>
                        <input type="file" required name="image" class="upload-img" id="image">
                        <div class="img-box">
                            <img id="image">
                    </div> -->
        <label for="">Age</label>
        <input type="number" placeholder="18" name="age" id="age" required>
        <label for="">Phone Number</label>
        <input type="text" placeholder="Phone Number" name="phone" id="phone" required>
        <label for="">Country</label>
        <input type="text" placeholder="Country" name="country" id="country" required>
        <label for="">Password</label>
        <input type="password" name="password" placeholder="Password" name="password" id="password" required>
        <!-- <label for="">Confirm Password</label> -->
        <input type="submit" value="Register" class="btn" id="submit" name="submit">
        <!-- <button class="btn" name="submit" value="submit" id="submit" type="submit">Register</button> -->
      </form>
    </div>
</section>
<!-- <footer>
   <div>
     <p>All Copyrights reserver to <a href="#">Khaleel Mahdi </a>&copy; 2023</p>
     <ul>
       <li><a href="#"><img src="../images/Facebook.png" alt=""></a></li>
       <li><a href="#"><img src="../images/twitter.png" alt=""></a></li>
       <li><a href="#"><img src="../images/Linkedin.jpeg" alt=""></a></li>
     </ul>
   </div>
 </footer> -->
</body>
</html>
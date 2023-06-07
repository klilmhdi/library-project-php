<?php
session_start();
$connection = mysqli_connect("localhost", "root", "", "librarydb");

if (isset($_POST['submit'])) {
    if (!empty($_POST["category_name"])) {
        $name = htmlspecialchars($_POST['category_name']);

        $sql = "INSERT INTO `category`(`category_name`) values('$name')";
        $res = mysqli_query($connection, $sql);
        if ($res) {
            echo "<script type='text/javascript'> alert('Successfully Register')</script>";
            return header('Location: category.php');
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>All Categories</title>
  <link rel="stylesheet" href="../css/admin-styles.css">
</head>

<body>
  <div class="page">
    <div class="side-bar">
      <div class="team-name">
        <p>Khaleel Mahdi</p>
      </div>
      <div class="subjects">
        <ul>
          <li> <a href="dashboard.php"> Dashboard</a></li>
          <li><a href="category.php" class="active">Categories</a></li>
          <li><a href="author.php">Authors</a></li>
          <li><a href="book.php">Books</a></li>
          <li><a href="user.php">Users</a></li>
        </ul>
      </div>
    </div>
    <div class="main">
      <div class="search-bar">
          <input type="search" placeholder="Search">
        <a href="login.php">Sign out</a>
      </div>
      <div class="content">
        <div>
          <h1>Add new Category</h1>
          <a href="category.php">All Categories</a>
        </div>
        <hr>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
          <label>Name</label>
          <input type="text" name="category_name"placeholder="Category Name">
          <input type="submit" name="submit" id="submit" class="btn">
        </form>
      </div>
    </div>
  </div>
  <script src="../JS/Admin-js.js"></script>
</body>

</html>

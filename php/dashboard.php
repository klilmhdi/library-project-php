<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
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
          <li> <a href="dashboard.php" class="active"> Dashboard</a></li>
          <li><a href="category.php">Categories</a></li>
          <li><a href="author.php">Authors</a></li>
          <li><a href="book.php">Books</a></li>
          <li><a href="user.php">Users</a></li>
        </ul>
      </div>
    </div>
    <div class="main">
      <div class="search-bar">
        <form action="">
          <input type="search" placeholder="Search">
        </form>
        <a href="login.php">Sign out</a>
      </div>
      <div class="content">
        <div>
          <h1>Dashboard</h1>
        </div>
        <div class="Team">
          <div class="member">
            <img src="../images/khlil1.jpg">
            <h2>Khaleel Bassem Mahdi</h2>
          </div>
          <hr>
        </div>
      </div>
    </div>
  </div>
  <script src="../JS/Admin-js.js"></script>
</body>

</html>
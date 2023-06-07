<?php
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
      integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
      crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Category</title>
    <link rel="stylesheet" href="../css/admin-styles.css">
  </head>
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
          <li><a href="user">Users</a></li>
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
          <h1>Edit Author</h1>
        </div>
        <hr>
        <form action="">
          <label>New Name</label>
          <input type="text" required name="book-name"placeholder="Author Name">
          <input type="submit" name="" value="Update" id="" style="background-color: silver;color: black
          ;" class="btn">
        </form>
      </div>
    </div>
  </div>
  <script src="../JS/Admin-js.js"></script>
</body>
</html>
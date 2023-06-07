<?php
session_start();
$connection = mysqli_connect("localhost", "root", "", "librarydb");

$sql = "SELECT * FROM `author`";
$res = mysqli_query($connection, $sql);

if (isset($_GET['delete'])) {
  $id = $_GET['delete'];
  $delete_sql = "DELETE FROM author WHERE id = $id";
  mysqli_query($connection, $delete_sql);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Authors</title>
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
          <li> <a href="dashboard.php" > Dashboard</a></li>
          <li><a href="category.php">Categories</a></li>
          <li><a href="author.php" class="active">Authors</a></li>
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
        <h1>Authors</h1></div>
        <a href="create_author.php">Add New book</a>
        <hr>
        <table>
          <thead>
            <tr>
              <td>ID</td>
              <td>Name</td>
              <td>Action</td>
            </tr>
          </thead>
          <tbody>
            <?php
while ($author = mysqli_fetch_assoc($res)) {
    ?>
            <tr>
              <td><span><?=$author['id']?></span></td>
              <td><span><?=$author['author_name']?></span></td>
              <!-- <td> -->
              <td>                <a onclick="return confirm('Are you sure?')" href="?delete=<?= $author['id'] ?>"><i class="fa-solid fa-square-xmark" name="delete" id="delete" style="color: #e60a0a;"></i></a></td>

                <!-- <a href="edit_author.php"><i class="fa-solid fa-pen-to-square" style="color: #005cfa;"></i></a> -->
                <!-- <a onclick="return confirm('Are you sure?')" href="?delete=<?= $author['id'] ?>"><i class="fa-solid fa-square-xmark" name="delete" id="delete" style="color: #e60a0a;"></i></a> -->
              <!-- </td> -->
            </tr>
            <?php }?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <script src="../JS/Admin-js.js"></script>
</body>
</html>
<?php
session_start();
$connection = mysqli_connect("localhost", "root", "", "librarydb");

$sql = "SELECT * FROM `category`";
$res = mysqli_query($connection, $sql);

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $delete_sql = "DELETE FROM category WHERE id = $id";
    mysqli_query($connection, $delete_sql);
}
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
        <form action="">
          <input type="search" placeholder="Search">
        </form>
        <a href="login.php">Sign out</a>
      </div>
      <div class="content">
        <div>
          <h1>All Categories</h1>
          <a href="create_category.php">Add New Categories</a>
        </div>
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
while ($category = mysqli_fetch_assoc($res)) {
    ?>
            <tr>
              <td><span><?=$category['id']?></span></td>
              <td><span><?=$category['category_name']?></span></td>
              <td>
                <a href="edit_category.php"><i class="fa-solid fa-pen-to-square" style="color: #005cfa;"></i></a>
                <a onclick="return confirm('Are you sure?')" href="?delete=<?= $category['id'] ?>"><i class="fa-solid fa-square-xmark" name="delete" id="delete" style="color: #e60a0a;"></i></a>
              </td>
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

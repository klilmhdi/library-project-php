<?php
session_start();
$connection = mysqli_connect("localhost", "root", "", "librarydb");

$sql = "SELECT * FROM `book`";
$res = mysqli_query($connection, $sql);

if (isset($_GET['delete'])) {
  $id = $_GET['delete'];
  $delete_sql = "DELETE FROM book WHERE id = $id";
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
  <title>All Books</title>
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
          <li><a href="category.php">Categories</a></li>
          <li><a href="author.php">Authors</a></li>
          <li><a href="book.php" class="active">Books</a></li>
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
          <h1>All Books</h1>
          <a href="create_book.php">Add New book</a>
        </div>
        <hr>
        <table>
          <thead>
            <tr>
              <td>Serial</td>
              <td>Title</td>
              <td>Images</td>
              <td>Price</td>
              <td>Action</td>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><span>600391735</span></td>
              <td><span>انتي لي</span></td>
              <td><span><img src="../images/انت لي.jpeg" alt=""></span></td>
              <td><span>125</span>.00$</td>
              <td><a href="edit_book.php"><i class="fa-solid fa-pen-to-square" style="color: #005cfa;"></i></a> <button><i class="fa-solid fa-square-xmark" style="color: #e60a0a;"></i></button></td>
            </tr>
            <?php
while ($book = mysqli_fetch_assoc($res)) {
    ?>
            <tr>
              <td><span><?=$book['id']?></span></td>
              <td><?=$book['title']?></td>
              <td><img src="images/server_images/<?=$book['image']?>" alt="" width="80"></td>
              <td><?=$book['price']?></td>
              <td>
              <a href="edit_book.php"><i class="fa-solid fa-pen-to-square" style="color: #005cfa;"></i></a>
              <a onclick="return confirm('Are you sure?')" href="?delete=<?= $book['id'] ?>"><i class="fa-solid fa-square-xmark" name="delete" id="delete" style="color: #e60a0a;"></i></a>
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
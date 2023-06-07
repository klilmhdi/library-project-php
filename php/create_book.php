<?php
session_start();
$connection = mysqli_connect("localhost", "root", "", "librarydb");

if (isset($_POST['submit'])) {
  $title = htmlspecialchars($_POST['title']);
  $author_name = htmlspecialchars($_POST['author_name']);
  $category_name = htmlspecialchars($_POST['category_name']);
  $image = $_FILES['image'];
  $price = htmlspecialchars($_POST['price']);
  $description = htmlspecialchars($_POST['description']);

  $image_name = rand() . $image['name'];
  move_uploaded_file($image['tmp_name'], '../images/server_images/'. $image_name);
    if (
        !empty($_POST["title"]) && !empty($_POST["author_name"]) && !empty($_POST["price"])
        && !empty($_POST["description"])
     ) {

        $sql = "INSERT INTO `book` (`title`, `description`, `image`, `price`, `author_name`, `category_name`) VALUES('$title','$description','$image_name','$price', '$author_name', '$category_name')";

        $res = mysqli_query($connection, $sql);
        if ($res) {
        echo "<script type='text/javascript'> alert('successfully !!!')</script>";
          return header('Location: book.php');
      }else{
        echo "<script type='text/javascript'> alert('Something have error !!!')</script>";
        // return header('Location: book.php');
      }
    }}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Book</title>
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
                    <li><a href="dashboard.php"> Dashboard</a></li>
                    <li><a href="category.php">Categories</a></li>
                    <li><a href="author.php">Authors</a></li>
                    <li><a href="book.php" class="active">Books</a></li>
                    <li><a href="user.php">Users</a></li>
                </ul>
            </div>
        </div>
        <div class="main">
            <div class="search-bar">
            <form method="POST" enctype="multipart/form-data"
                action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <input type="text" placeholder="Search">
                </form>
                <a href="index.php">Sign out</a>
            </div>
            <div class="content">
                <div>
                    <h1>Add new Book</h1>
                </div>
                <hr>
                <form method="POST" enctype="multipart/form-data"
                    action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <label>Title</label>
                    <input type="text" required name="title" placeholder="title" id="title">
                    <div class="image">
                        <label for="Upload">Image</label>
                        <input type="file" required name="image" class="upload-img" id="image">
                        <div class="img-box">
                            <img id="image">
                        </div>
                    </div>
                    <label>Price</label>
                    <input type="number" required name="price" placeholder="price">
                    <label>Description</label>
                    <textarea name="description" required id="description" cols="30" rows="2"
                        placeholder="description"></textarea>
                    <div class="row">
                    <label for="author_name">Author:</label>
                          <select name="author_name" id="author_name" required>
                            <?php
                            // Retrieve category names from the category table
                            $query = "SELECT * FROM author";
                            $result = mysqli_query($connection, $query);

                            // Check if the query was successful
                            if ($result && mysqli_num_rows($result) > 0) {
                              while ($row = mysqli_fetch_assoc($result)) {
                                $authorName = $row['author_name'];
                                $authorId = $row['author_name'];
                                echo "<option value='$authorName'>$authorName</option>";
                              }
                            }
                            ?>
                          </select><br>                        
                        </div>
                        <label for="category_name">Category:</label>
                          <select name="category_name" id="category_name" required>
                            <?php
                            // Retrieve category names from the category table
                            $query = "SELECT * FROM category";
                            $result = mysqli_query($connection, $query);

                            // Check if the query was successful
                            if ($result && mysqli_num_rows($result) > 0) {
                              while ($row = mysqli_fetch_assoc($result)) {
                                $categoryName = $row['category_name'];
                                $categoryId = $row['id'];
                                echo "<option value='$categoryName'>$categoryName</option>";
                              }
                            }
                            ?>
                          </select><br>
                    </div>
                    <input type="submit" name="submit" value="submit" id="submit" class="btn">
                </form>
            </div>
        </div>
    </div>
    <script src="../JS/Admin-js.js"></script>
</body>

</html>
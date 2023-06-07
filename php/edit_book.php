<?php
session_start();
$connection = mysqli_connect("localhost", "root", "", "librarydb");

if (isset($_POST['submit'])) {
    if (
        !empty($_POST["name"]) && !empty($_POST["author_name"])
        && !empty($_POST["image"]) && (empty($_POST["Attach"]) || empty($_POST["price"]))
        && !empty($_POST["description"])) {
        $name = $_POST['name'];
        $author_name = $_POST['author_name'];
        $category_name = $_POST['category_name'];
        $image = $_FILES['image'];
        $price = $_POST['price'];
        $description = $_POST['description'];
        if ($_POST["a"] == "file") {

            $uploaddir = "../images/server_images/";
            $uploadfile = $uploaddir . basename($_FILES['Attach']['name']);
            if (move_uploaded_file($_FILES['Attach']['tmp_name'], $uploadfile)) {
                global $Attach;
                $Attach = $uploadfile;
            } else {
                echo "Failure.\n";
            }
        }

        $sql = "INSERT INTO `book`(`title`, `description`, `image`, `price`, `author_name`, `category_name`) VALUES('$name','$description', ,'$image','$price', '$author_name', '$category_name')";
        $res = mysqli_query($connection, $sql);
        if ($res) {
          return header('Location: book.php');
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
                <form action="">
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
                    <input type="text" required name="name" placeholder="title">
                    <div class="image">
                        <label for="Upload">Image</label>
                        <input type="file" required name="image" class="upload-img" id="Upload">
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
                            $query = "SELECT author_name FROM author";
                            $result = mysqli_query($connection, $query);

                            // Check if the query was successful
                            if ($result && mysqli_num_rows($result) > 0) {
                              while ($row = mysqli_fetch_assoc($result)) {
                                $authorName = $row['author_name'];
                                echo "<option value='$authorName'>$authorName</option>";
                              }
                            }
                            ?>
                          </select><br>                        
                        </div>
                        <!-- <label>Category</label>
                        <div class="dropdown">
                            <select>
                                <option value="" disabled selected>Select an option</option>
                                <option value="option1">Option 1</option>
                                <option value="option2">Option 2</option>
                                <option value="option3">Option 3</option>
                            </select>
                        </div> -->
                        <label for="category_name">Category:</label>
                          <select name="category_name" id="category_name" required>
                            <?php
                            // Retrieve category names from the category table
                            $query = "SELECT category_name FROM category";
                            $result = mysqli_query($connection, $query);

                            // Check if the query was successful
                            if ($result && mysqli_num_rows($result) > 0) {
                              while ($row = mysqli_fetch_assoc($result)) {
                                $categoryName = $row['category_name'];
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
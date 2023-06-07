<?php
session_start();
$connection = mysqli_connect("localhost", "root", "", "librarydb");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
    integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin >
  <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="./css/styles.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap.min.css.map">
  <title>Home</title>
</head>

<body>
  <header>
    <nav>
      <p class="Logo">Books Store</p>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="./php/login.php">Login</a></li>
        <li><a href="./php/register.php">Register</a></li>
      </ul>
    </nav>
  </header>
  
  <!-- Search Section -->
  <section>
    <div class="features d-flex pt-5 pb-5 justify-content-center align-items-centers">
      <div class=" text-center text-light">
        <div class="main-title mb-5 mt-5 position-relative">
          <h2 class="ser">Search about any Book you need</h2>
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Serch" aria-label="Recipient's username" aria-describedby="button-addon2">
            <i class="ico fa-solid fa-magnifying-glass"></i>
          </div>
          <div class="row text-center">
            <div class="col-md-6 col-lg-4 col-sm-12 text-center">
              <div class="feat">
                <div class=" icon-holder position-relative">
                <i class="num fa-solid fa-1 position-absolute bottom-0 number "></i>
                <i class="fa-solid fa-book fa-3x position-absolute  icon"></i>
                </div>
                <h4 class="dis mb-3 mt-3 text-uppercase">Books</h4>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 col-sm-12 text-center">
              <div class="feat">
                <div class="icon-holder position-relative">
                <i class="num fa-solid fa-2 position-absolute bottom-0 number "></i>
                <i class="fa-solid fa-users fa-3x position-absolute  icon"></i>
                </div>
                <h4 class="dis mb-3 mt-3 text-uppercase">Authours</h4>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 col-sm-12 text-center">
              <div class="feat">
                <div class="icon-holder position-relative">
                <i class="num fa-solid fa-3 position-absolute bottom-0  number "></i>
                <i class="fa-solid fa-tags fa-3x position-absolute icon"></i>
                </div>
                <h4 class="dis mb-3 mt-3 text-uppercase">categories</h4>
              </div>
            </div>
          </div>
        </div>
          </div>
    </div>
  </section>

  <!-- Information Section -->
  <section class="info pb-5 pt-5">
    <h1>
      About Our Library
    </h1>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illo, explicabo voluptatum? Maiores dolorum iure
      obcaecati. Maiores culpa sunt libero aut cum odio dignissimos molestias odit!</p>
    </section>

      <section class="categories bg-Light py-5  text-center">
        <div class="container">
            <h2 class="mb-4">Expolor Our latest categoris</h2>
            <div class="row justify-content-center ">
              <div class="col-md-3">
                  <a href="" class="item card p-5">
                    Action
                  </a>
              </div>
              <div class="col-md-3">
                <a href="" class="item  card p-5">
                  Drama
                </a>
            </div>
            <div class="col-md-3">
              <a href="" class="item  card p-5">
                Romantic new
              </a>
          </div>
        </div>
      </section>
  
  <section class="books py-5">
    <div class="container">
      <h2 class=" mb-4 text-center">Expolor our latest books</h2>
       <div class="row justify-content-center ">
       <div class="col-md-3">

        <div class="card">
          <img src="images/استمتع بحياتك.jpeg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">استمتع بحياتك</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="./pages/book-info.html" class="btn btn-primary w-100 btn-dark">Read More</a>
         </div>
     </div>
   </div>

       <div class="col-md-3">
        <div class="card">
          <img src="images/انت لي.jpeg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">انت لي</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="./pages/book-info-show.html" class="btn btn-primary w-100 btn-dark">Read More</a>
         </div>
     </div>
       </div>

       <div class="col-md-3">
        <div class="card">
          <img src="images/دع القلق.jpeg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">دع القلق</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="./pages/book-info3.html" class="btn btn-primary w-100 btn-dark">Read More</a>
         </div>
     </div>
       </div>
      </div>
    </div>
  </section> 
  <footer>
    <p>&copy; 2023 Your Website. All rights reserved by: <a href="#">khaleelovich </a>.</p>
  </footer>
</body>

</html>
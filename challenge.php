<?php

require_once 'db_connect.php';

$sql = "SELECT * FROM dishes";
$result = mysqli_query($connect, $sql);

if ($result) {
    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
} else {
    echo 'Error: ' . mysqli_error($connect);
    $rows = [];
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SH Home Restaurant</title>
    <!-- font-awesome css -->
    <link rel="stylesheet" href="./fontawesome-free-5.15.4-web/css/all.css">

    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- personla css -->
    <link rel="stylesheet" href="./css/challenge.css" />
</head>

<body>

    <!-- Header container -->
    <div id="header-container">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light pt-3 pb-3">

            <div class="container-fluid">
                <a class="navbar-brand" href="./index.html"><a class="navbar-brand" href="#">
                        <img src="./img/bootstrap-2.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
                        Shahpar Restaurant </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarText">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active myIsActive" aria-current="page" href="#">Home</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link active" href="create.php">Create</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">About us</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Contact</a>
                            </li>


                        </ul>

                    </div>
            </div>
        </nav>

        <!-- carousel -->
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                    <img src="./img/caro-2.jpeg" class="d-block w-100" alt="Main dish">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="./img/caro-4.jpeg" class="d-block w-100" alt="Dessert">
                </div>
                <div class="carousel-item">
                    <img src="./img/caro-3.jpeg" class="d-block w-100" alt="Starter">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <!-- Main container -->
    <div id="main-container">
        <div class="
        my-row
        container
        bg-white
        mt-md-5
        mt-sm-3 mt-3
        pb-md-4 pb-sm-3 pb-3
      ">

            <!-- Main courses -->
            <h4 class="text-center">Main courses</h4>
            <div class="container mt-4 mb-4">
                <div class="row align-items-center justify-content-around">

                    <?php
                    $i = 0;
                    while ($i < count($rows)) {

                        echo '<div class="my-css col-lg-3 col-md-6 col-12 text-center flex-fill">
                        <div class="card border mb-4">
                            <img src="img/' . $rows[$i]["image"] . '" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h6 class="card-title">' . $rows[$i]["name"] . '</h6>
                                <p class="card-text">' . $rows[$i]["description"] . '</p>

                            </div>
                            <div>
                                <p>$' . $rows[$i]["price"] . '</p>
                            </div>

                            <div>
                            <a href="delete.php?id='.$rows[$i]['dishID'].'">delete'.$rows[$i]['dishID'].'</a>
                        </div>


                        </div>

                    </div>';

                        $i++;
                    }

                    ?>

                </div>
            </div>

        </div>

    </div>

    <!-- Footer container -->
    <div id="footer-container" class="text-center text-black">
        <!-- Footer Links row-->
        <div class="row text-center d-flex justify-content-center pt-5 mt-5">



            <div class="col-md-2">
                <h6 class="text-uppercase font-weight-bold">
                    <a href="./index.html" class="text-black">Home</a>
                </h6>
            </div>


            <div class="col-md-2">
                <h6 class="text-uppercase font-weight-bold">
                    <a href="create.php" class="text-black">Create</a>
                </h6>
            </div>


            <div class="col-md-2">
                <h6 class="text-uppercase font-weight-bold">
                    <a href="#!" class="text-black">About us</a>
                </h6>
            </div>


            <div class="col-md-2">
                <h6 class="text-uppercase font-weight-bold">
                    <a href="#!" class="text-black">Contact</a>
                </h6>
            </div>

        </div>

        <hr class="my-5" />

        <!-- Footer Restaurant Name begin-->
        <div class="row d-flex justify-content-center mb-5">
            <div class="col-lg-8">
                <h3>Shahpar Restaurant</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt
                    distinctio earum repellat quaerat voluptatibus placeat nam,
                    commodi optio pariatur est quia magnam eum harum corrupti
                    dicta, aliquam sequi voluptate quas.
                </p>
            </div>
        </div>

        <!-- Footer Restaurant Name end -->

        <!-- Footer Social section begin -->
        <section class="text-center mb-5">
            <a href="" class="text-black me-4">
                <i class="fab fa-facebook"></i>
            </a>
            <a href="" class="text-black me-4">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="" class="text-black me-4">
                <i class="fab fa-google"></i>
            </a>
            <a href="" class="text-black me-4">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="" class="text-black me-4">
                <i class="fab fa-linkedin"></i>
            </a>
            <a href="" class="text-black me-4">
                <i class="fab fa-github"></i>
            </a>
        </section>
        <!-- Footer Social section begin -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
            © 2021 Copyright:
            <a class="text-black" href="https://mdbootstrap.com/">Shahpar</a>
        </div>
        <!-- Copyright -->

    </div>
    <!-- Footer End-->

    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- personal js -->
    <script src="./js/main.js"></script>
</body>

</html>
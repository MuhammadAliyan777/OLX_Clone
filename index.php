<?php
session_start();
include 'assests/php/_dbconnect.php';
// if(!isset($_SESSION['loggedin'])){
// $_SESSION['loggedin'] == false;
// }
// $_SESSION['loggedin'] == false;
//  if($_SERVER['REQUEST_METHOD'] === 'GET'){
//     $signupsuccess = $_GET["signupsuccess"]; 
// }
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="assests/css/style.css?version=51">


    <script src="https://kit.fontawesome.com/6c5cb6cceb.js" crossorigin="anonymous"></script>


    <title>Buy and Sell for free anywhere everywhere!</title>
</head>

<body>

    <!-- Signup -->

    <!-- Button trigger modal -->
    <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button> -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form name="sign-up" action="assests/php/_signup.php" method="post">
                        <form>
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Finish Signup -->


    <!-- Login -->
    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form name="sign-up" action="assests/php/_login.php" method="post">
                        <form>
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" name="loginname" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <input type="email" name="loginemail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password" name="loginpassword" class="form-control" id="exampleInputPassword1">
                            </div>

                            <button type="submit" class="btn btn-primary">Submit 2</button>
                        </form>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Finish Login -->




    <header class="pt-2 pb-1 fixed-top">
        <div class="container">


            <nav class="nav">
                <button class="btn responsive_btn thirdAnchor" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                    <i class="fa-solid fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#">
                    <img src="assests/images/logo-main.png" width="50px" alt="">
                </a>
                <a class="nav-link firstAnchor" style="color: #002f34;" href="#"><i class="fa-solid fa-car"></i> Motors</a>

                <a class="nav-link secondAnchor" style="color: #002f34;" href="#"><i class="fa-solid fa-building"></i> Property</a>

                <!-- <div class="row">

                <div class="col-sm-3 col-lg-4 col-3">
                <a class="navbar-brand" href="#">
                    <img src="assests/images/logo-main.png" width="50px" alt="">
                </a>
            </div>
                <div class="col-sm-3 col-lg-4 col-3">

                    <a class="nav-link firstAnchor" style="color: #002f34;" href="#"><i class="fa-solid fa-car"></i>  Motors</a>
                
                </div>
                <div class="col-sm-3 col-lg-4 col-3">
                    
                    <a class="nav-link secondAnchor" style="color: #002f34;" href="#"><i class="fa-solid fa-building"></i> Property</a>
                </div>
                <div class="col-sm-3 col-3">
                    <div class="nav_btn float-end">
                        <button class="btn responsive_btn thirdAnchor" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                            <i class="fa-solid fa-bars"></i>
                        </button>
                    </div> -->
                <!-- </div> -->

                <!-- </div> -->
            </nav>

            <nav>
                <form class="my-3">
                    <div class="row">
                        <div class="col-lg-3 col-md-6  col-sm-0">
                            <div class="search1">
                                <!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button> -->

                                <div class="country_input border border-dark p-2 rounded">
                                    <span> <i class="fa-solid fa-magnifying-glass"></i></span>
                                    <input type="text" value="Pakistan" name="" id="" class="border-0 outline-0" style="background-color: transparent; outline: none;">
                                </div>



                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="search d-flex w-100">
                                <div class="country_input border border-dark p-2 rounded-start" style="width: 100%;">
                                    <input type="text" placeholder="Find Cars,Mobile Phones and more..." class="border-0 outline-0" style="outline: none; width: 100%; background-color: transparent;" name="" id="">

                                </div>
                                <button class="px-4 py-2" style="background-color: #002f34; border: none;" type="submit"><i style="color: #fff;" class="fa-solid fa-magnifying-glass"></i></button>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-12 col-sm-12">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                                    <div class="notifications">

                                        <i class="fa-regular fa-bell" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"></i>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                            <div class="notifi">
                                                <p class="text-secondary">
                                                    No notifications
                                                </p>
                                            </div>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                                    <img src="assests/images/profile.png" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" width="50px" alt="">
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <div class="profile-ul">
                                            <?php
                                            if (isset($_SESSION['username'])) {
                                                $username = $_SESSION['username'];


                                                echo ' <div class="profile-div">
                                                <div class="row">
                                                    <div class="col-4">
                                                        <div class="profile_img">
                                                            <img src="assests/images/profile.png" width="70px" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="col-8">
                                                        <div class="ittems">
                                                            <p>Hello,</p>
                                                            <h5>' . $username . '</h5>
                                                            <small>View & edit your profile</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>';
                                            } else if (!isset($_SESSION['username']) && !isset($_SESSION['admin'])) {
                                                echo ' <div class="profile-div">
                                                <div class="row">
                                                    <div class="col-4">
                                                        <div class="profile_img">
                                                            <img src="assests/images/profile.png" width="70px" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="col-8">
                                                        <div class="ittems">
                                                            <p>Hello,</p>
                                                            <h5>Plz Signup</h5>
                                                            <small>View & edit your profile</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>';
                                            }
                                            ?>
                                            <hr>
                                            <li><a class="dropdown-item" href="#"><i class="fa-solid fa-receipt"></i> My ads</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa-solid fa-credit-card"></i> Buy Buisness Packages</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa-solid fa-clipboard-list"></i> Bought Packages & Billing</a></li>
                                            <hr>
                                            <li><a href="" class="dropdown-item"><i class="fa-regular fa-circle-question"></i> Help</a></li>
                                            <li><a href="" class="dropdown-item"><i class="fa-solid fa-gear"></i> Settings</a></li>
                                            <hr>
                                            <li><a href="assests/php/_logout.php" class="dropdown-item"><i class="fa-solid fa-arrow-right-from-bracket"></i> Logout</a></li>
                                        </div>
                                    </ul>
                                </div>

                                <?php
                                if (!isset($_SESSION['loggedin']) && !isset($_SESSION['admin'])) {
                                    echo ' <div class="col-lg-3 col-md-3 col-sm-3 col-3">';
                                    echo '   <span class="my-2 py-2 fw-bold" style="text-decoration: underline; cursor: pointer; display: flex; text-align: center; justify-content: center;"><a data-bs-toggle="modal" data-bs-target="#exampleModal">Signup</a></span>
                                     </div><div class="col-lg-3 col-md-3 col-sm-3 col-3">
                                    <span class="my-2 py-2 fw-bold" style="text-decoration: underline; cursor: pointer; display: flex; text-align: center; justify-content: center;"><a data-bs-toggle="modal" data-bs-target="#exampleModal2"> Login </a></span>';
                                    echo '</div>';
                                }
                                ?>



                                <?php
                                if (isset($_SESSION['loggedin']) || isset($_SESSION['admin'])) {
                                    echo ' <div class="col-lg-3 col-md-3 col-sm-3 col-3">';
                                    echo '<span class="my-2 py-2 fw-bold" style="text-decoration: underline; cursor: pointer; display: flex; text-align: center; justify-content: center;"> <a href="assests/php/_logout.php">Logout</a></span>';
                                    echo '</div>';
                                    echo ' <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                                        <div class="butn mt-2 d-flex" style="position: relative;">';
                                    echo ' <span class="py-2 px-3 span-butn fw-bold" style="justify-content: baseline; border: 3px solid #002f34; border-radius: 30px;justify-content: center; cursor: pointer; box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;"> <a href="assests/php/_uploadAd.php"> Sell</a></span>';
                                    echo '</div>
                                    </div>';
                                }
                                ?>


                            </div>
                        </div>
                    </div>


                </form>
            </nav>


        </div>

    </header>

























    <main>
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            if (isset($_GET['adposted'])) {
                $adposted = $_GET['adposted'];

                if ($adposted == true) {
                    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Successfully</strong> Ad Posted!
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
                }
            }
        }
        ?>
        <div class="container">
            <div class="pb-3">
                <nav class="nav colr">
                    <div class="dropdown">
                        <button class="btn fw-bold dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            All categories
                        </button>

                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <div class="div" style="width: 600px;">

                                <div class="row">
                                    <div class="col-lg-6 col-6">

                                        <div class="drop my-2">
                                            <?php

                                            $categorysql = "SELECT * FROM categories";
                                            $categoryResult = mysqli_query($conn, $categorysql);

                                            // $main_category_id = $categoryRow['parent_id'];
                                            // // $maincategorysql = "SELECT * FROM WHERE main_category_id = '$main_category_id'";
                                            // // $maincategoryResult = mysqli_query($conn,$maincategorysql);
                                            // // $maincategoryRow = mysqli_fetch_assoc($maincategoryResult);
                                            $a = 1;
                                            while ($categoryRow = mysqli_fetch_assoc($categoryResult)) {
                                                ++$a;
                                                $counnt = $a;
                                                if ($counnt == 6) {
                                                    echo '<hr>';
                                                    $counnt = 0;
                                                }

                                                echo '
                                                <li><a class="dropdown-item" href="assests/php/_category.php?category=' . $categoryRow['category_id'] . '">' . $categoryRow['category_name'] . '</a></li>';
                                            }

                                            ?></div>
                                    </div>
                                </div>


                        </ul>
                    </div>

                    <?php

                    $categorysql = "SELECT * FROM categories LIMIT 6";
                    $categoryResult = mysqli_query($conn, $categorysql);
                    while ($categoryRow = mysqli_fetch_assoc($categoryResult)) {
                        //     ++$a;
                        //     $counnt = $a;
                        //     if($counnt == 6){
                        // echo '<hr>';
                        //         $counnt = 0;
                        //     }

                        echo '<a class="nav-link" href="assests/php/_category.php?category=' . $categoryRow['category_id'] . '">' . $categoryRow['category_name'] . '</a>';
                    }

                    ?> <div class="mx-3" style="height: 30px; border-right: 2px solid #ccce; width:2px;"></div>
                    <li><a class="nav-link" href="assests/php/all_products.php">All Products</a></li>
                    <?php
                    if (isset($_SESSION['loggedin'])) {
                        echo '<li><a class="nav-link" href="assests/php/_uploadAd.php">Sell Products</a></li>
                <li><a class="nav-link" href="assests/php/_logout.php">Logout</a></li>';
                    }
                    if (isset($_SESSION['admin'])) {
                        echo '<li><a class="nav-link" href="assests/php/_admin.php">Approve Users</a></li>';
                    }
                    ?>
                    <!-- <a class="nav-link" href="#">Mobile Phones</a>
                    <a class="nav-link" href="#">Cars</a>
                    <a class="nav-link" href="#">Motorcycles</a>
                    <a class="nav-link" href="#">Houses</a>
                    <a class="nav-link" href="#">TV - Video - Audio</a> -->
                </nav>
            </div>


        </div>
        <div class="banner">

        </div>
        <div class="container">
            <div class="recommendation">
                <div class="row">
                    <div class="col-12">
                        <h3 class="fw-normal py-1">Fresh Recommendation</h3>
                    </div>
                </div>

                <div class="row inp1">
                    <?php
                    // include "assests/php/_dbconnect.php";
                    $sql = "SELECT * FROM `ad`";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {
                        // $category_id = $row['category_id'];
                        // $category = $row['category_name'];
                        $title = $row['ad_title'];
                        $description = $row['ad_description'];
                        $price = $row['ad_price'];
                        $image = $row['ad_image'];
                        $added_on = $row['added_on'];

                        echo '<div class="col-lg-3 col-md-4 col-sm-6 col-6 my-3 inP2">
        <div class="card rounded" style="width: 100%; cursor: pointer;" ><a href="assests/php/_detail.php?detailid=' . $row['ad_id'] . '">
            <img src="assests/images/';
                        echo $row['ad_image'];
                        echo '" class="card-img-top" alt="..."></a>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-10 col-10 inP0">
                    <a href="assests/php/_detail.php?detailid=' . $row['ad_id'] . '">
                    <h4>' . $title . '</h4>
                        <p class="card-text">' . $description . '</p>
                        </a>
                    </div>
                    <div class="col-lg-2 col-2 inP0">
                        <div class="heart float-end">
                            <span><i onclick="myFunction(this)" class="fa-regular fa-heart"></i></span>
                        </div>
                    </div>
                </div>
                <a href="assests/php/_detail.php?detailid=' . $row['ad_id'] . '">
                <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                <h5 class="card-title pt-3 pb-2">' . $price . '</h5>
                <small class="text-secondary">Nazimabad, Karachi . ' . $added_on . '</small>
                </a>
            </div>
        </div>
    </div>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </main>

    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        <nav class="navbar justify-content-center">

            <ul class="nav flex-column pt-3">
                <a class="navbar-brand pb-3" href="#">
                    <img src="assests/images/logo-main.png" width="50px" alt="">
                </a>
                <li><a class="dropdown-item" href="assests/php/all_products.php">All Products</a></li>
                <?php
                if (isset($_SESSION['loggedin'])) {
                    echo '<li><a class="dropdown-item" href="assests/php/_uploadAd.php">Sell Products</a></li>
                <li><a class="dropdown-item" href="assests/php/_logout.php">Logout</a></li>';
                }
                if (isset($_SESSION['admin'])) {
                    echo '<li><a class="dropdown-item" href="assests/php/_admin.php">Approve Users</a></li>';
                }
                ?>
                <hr>
                <h3 class="pt-2 pb-3">Categories</h3>
                <?php

                $categorysql = "SELECT * FROM categories";
                $categoryResult = mysqli_query($conn, $categorysql);

                // $main_category_id = $categoryRow['parent_id'];
                // // $maincategorysql = "SELECT * FROM WHERE main_category_id = '$main_category_id'";
                // // $maincategoryResult = mysqli_query($conn,$maincategorysql);
                // // $maincategoryRow = mysqli_fetch_assoc($maincategoryResult);
                $a = 1;
                while ($categoryRow = mysqli_fetch_assoc($categoryResult)) {
                    ++$a;
                    $counnt = $a;
                    if ($counnt == 6) {
                        echo '<hr>';
                        $counnt = 0;
                    }

                    echo '
                                                <li><a class="dropdown-item" href="assests/php/_category.php?category=' . $categoryRow['category_id'] . '">' . $categoryRow['category_name'] . '</a></li>';
                }
                ?>

            </ul>
        </nav>
    </div>

    <div class="lastDiv py-4 px-4">
        <div class="row">
            <div class="col-lg-2 col-md-6 col-sm-6 col-6">
                <div class="ul1 my-3">
                    <ul>
                        <li>Cars</li>
                        <li>Flats for rent</li>
                        <li>Mobile Phones</li>
                        <li>Jobs</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6 col-6">
                <div class="ul2 my-3">
                    <ul>
                        <li>Bikes</li>
                        <li>Watches</li>
                        <li>Books</li>
                        <li>Dogs</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6 col-6">
                <div class="ul3 my-3">
                    <ul>
                        <li>About EMPG</li>
                        <li>OLX Blog</li>
                        <li>Contact Us</li>
                        <li>OLX for Businesses</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6 col-6">
                <div class="ul3 my-3">
                    <ul>
                        <li>Help</li>
                        <li>Sitemap</li>
                        <li>Terms of use</li>
                        <li>Privacy Policy</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-6 col-sm-12">
                <ul class="nav">
                    <a href="" class="px-2 text-dark pt-2 pb-4"><i class="fa-brands fa-facebook"></i></a>
                    <a href="" class="px-2 text-dark pt-2 pb-4"><i class="fa-brands fa-twitter"></i></a>
                    <a href="" class="px-2 text-dark pt-2 pb-4"><i class="fa-brands fa-youtube"></i></a>
                    <a href="" class="px-2 text-dark pt-2 pb-4"><i class="fa-brands fa-instagram"></i></a>
                </ul>
                <button class="btn btn-secondary">Login</button>
                <button class="btn btn-secondary">Signup</button>
            </div>



        </div>
    </div>

    <footer class="py-2 px-5">

        <h6 class="text-end fw-normal">Free Classifieds in Pakistan <span> . © 2006-2022 OLX</span></h6>
    </footer>





    <script>
        function myFunction(x) {
            x.classList.toggle("fa-solid");
        }
    </script>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>
<?php
session_start();
include '_dbconnect.php';
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

    <link rel="stylesheet" href="..//css/style.css?version=51">


    <script src="https://kit.fontawesome.com/6c5cb6cceb.js" crossorigin="anonymous"></script>


    <title>Buy and Sell for free anywhere everywhere!</title>
</head>

<body>
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
if(isset($_SESSION['username'])){
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
                                                            <h5>'. $username .'</h5>
                                                            <small>View & edit your profile</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>';

                                        }
                                        else if(!isset($_SESSION['username'])){
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
                                     if(!isset($_SESSION['loggedin'])){
                                         echo ' <div class="col-lg-3 col-md-3 col-sm-3 col-3">';
                                     echo '   <span class="my-2 py-2 fw-bold" style="text-decoration: underline; cursor: pointer; display: flex; text-align: center; justify-content: center;"><a data-bs-toggle="modal" data-bs-target="#exampleModal">Signup</a></span>
                                     </div><div class="col-lg-3 col-md-3 col-sm-3 col-3">
                                    <span class="my-2 py-2 fw-bold" style="text-decoration: underline; cursor: pointer; display: flex; text-align: center; justify-content: center;"><a data-bs-toggle="modal" data-bs-target="#exampleModal2"> Login </a></span>';
                                    echo '</div>';
                                     }
                                    ?>
                                    
                                
                               
                                    <?php
                                    if(isset($_SESSION['loggedin'])){
                                        echo ' <div class="col-lg-3 col-md-3 col-sm-3 col-3">';
                                        echo '<span class="my-2 py-2 fw-bold" style="text-decoration: underline; cursor: pointer; display: flex; text-align: center; justify-content: center;"> <a href="assests/php/_logout.php">Logout</a></span>';
                                        echo '</div>';
                                        echo ' <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                                        <div class="butn mt-2 d-flex" style="position: relative;">';
                                       echo' <span class="py-2 px-3 span-butn fw-bold" style="justify-content: baseline; border: 3px solid #002f34; border-radius: 30px;justify-content: center; cursor: pointer; box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;"> <a href="assests/php/_uploadAd.php"> Sell</a></span>';
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
<div class="container">
<div class="row">
<?php
if(isset($_GET['category'])){
    $category = $_GET['category'];

    $sqlC = "SELECT * FROM categories WHERE category_id = '$category'";

    $resultC = mysqli_query($conn,$sqlC);
    while($rowC = mysqli_fetch_assoc($resultC)){
    echo '<div class="container">
    <div class="py-4 ">
<h3 class="text-center">All ads from '. $rowC['category_name'] .'</h3>
</div>
</div>';
    }

    $sql = "SELECT * FROM ad WHERE category_id = '$category'";
    $result = mysqli_query($conn,$sql);
$rowCount = mysqli_num_rows($result);

if($rowCount == 0){
    echo '
    <div class="col-lg-12 col-md-12 col-sm-12 col-12 my-3 inP2">
<h3 class="text-secondary py-5 text-center">No Ads from this category</h3>
    </div>
    ';
}

    while ($row = mysqli_fetch_assoc($result)) {
        // $category_id = $row['category_id'];
        // $category = $row['category_name'];
        $title = $row['ad_title'];
        $description = $row['ad_description'];
        $price = $row['ad_price'];
        $image = $row['ad_image'];
        $added_on = $row['added_on'];

        echo '<div class="col-lg-3 col-md-4 col-sm-6 col-6 my-3 inP2">
        <div class="card rounded" style="width: 100%; cursor: pointer;" ><a href="assests/php/_detail.php?detailid='. $row['ad_id'] .'">
            <img src="../images/'; echo $row['ad_image'];  echo '" class="card-img-top" alt="..."></a>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-10 col-10 inP0">
                    <a href="assests/php/_detail.php?detailid='. $row['ad_id'] .'">
                    <h4>'. $title .'</h4>
                        <p class="card-text">'. $description .'</p>
                        </a>
                    </div>
                    
                    <div class="col-lg-2 col-2 inP0">
                        <div class="heart float-end">
                            <span><i onclick="myFunction(this)" class="fa-regular fa-heart"></i></span>
                        </div>
                    </div>
                   
                </div>
                <a href="assests/php/_detail.php?detailid='. $row['ad_id'] .'">

                <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                <h5 class="card-title pt-3 pb-2">'.$price.'</h5>
                <small class="text-secondary">Nazimabad, Karachi . '. $added_on .'</small>
                </a>
            </div>
        </div>
    </div>';
    }

}
?>
</div>
</div>
</main>
</body>
</html>
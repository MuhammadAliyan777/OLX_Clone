<?php

session_start();
$user = $_SESSION['user_id'];

    if (!isset($_SESSION['loggedin'])) {
            header("Location: ../../index.php");
    }

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $AD_title = $_POST['ad_title'];
    $AD_description = $_POST['ad_description'];
    $AD_price = $_POST['ad_price'];
    $AD_category = $_POST['AD_category'];

    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "../images/" . $filename;

    include "_dbconnect.php";

    $sql = "INSERT INTO `ad` (`ad_id`, `category_id`, `ad_title`, `ad_price`, `ad_description`, `ad_image`, `ad_status`, `added_on`) VALUES (NULL, '$AD_category', '$AD_title', '$AD_price', '$AD_description', '$filename', '0', current_timestamp());";

    if (move_uploaded_file($tempname, $folder)) {
        $msg = "Image uploaded successfully";
    } else {
        $msg = "Failed to upload image";
    }
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo 'Success';
        header("Location: /olx/index.php?adposted=true");
    } else {
        echo 'Failed';
        header("Location: /olx/index.php?adposted=false");
    }
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="../css/style.css">


    <script src="https://kit.fontawesome.com/6c5cb6cceb.js" crossorigin="anonymous"></script>
</head>

<body>



    <header class="pt-2 pb-1 fixed-top">
        <div class="container">


            <nav class="nav">
                <button class="btn responsive_btn thirdAnchor" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                    <i class="fa-solid fa-bars"></i>
                </button>
                <a class="navbar-brand" href="../../index.php">
                    <img src="../images/logo-main.png" width="50px" alt="">
                </a>
                <a class="nav-link firstAnchor" style="color: #002f34;" href="#"><i class="fa-solid fa-car"></i> Motors</a>

                <a class="nav-link secondAnchor" style="color: #002f34;" href="#"><i class="fa-solid fa-building"></i> Property</a>
            </nav>

            <nav>
                <form class="my-3">
                    <div class="row">
                        <div class="col-lg-3 col-md-6  col-sm-0">
                            <div class="search1">

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
                                    <img src="../images/profile.png" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" width="50px" alt="">
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <div class="profile-ul">
                                            <?php
                                            if (isset($_SESSION['username'])) {
                                                $username = $_SESSION['username'];


                                                echo ' <div class="profile-div">
                                                <div class="row">
                                                    <div class="col-4">
                                                        <div class="profile_img">
                                                            <img src="../images/profile.png" width="70px" alt="">
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
                                            } else if (!isset($_SESSION['username'])) {
                                                echo ' <div class="profile-div">
                                                <div class="row">
                                                    <div class="col-4">
                                                        <div class="profile_img">
                                                            <img src="../images/profile.png" width="70px" alt="">
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
                                            <li><a href="_logout.php" class="dropdown-item"><i class="fa-solid fa-arrow-right-from-bracket"></i> Logout</a></li>
                                        </div>
                                    </ul>
                                </div>

                                <?php
                                if (!isset($_SESSION['loggedin'])) {
                                    echo ' <div class="col-lg-3 col-md-3 col-sm-3 col-3">';
                                    echo '   <span class="my-2 py-2 fw-bold" style="text-decoration: underline; cursor: pointer; display: flex; text-align: center; justify-content: center;"><a data-bs-toggle="modal" data-bs-target="#exampleModal">Signup</a></span>
                                     </div><div class="col-lg-3 col-md-3 col-sm-3 col-3">
                                    <span class="my-2 py-2 fw-bold" style="text-decoration: underline; cursor: pointer; display: flex; text-align: center; justify-content: center;"><a data-bs-toggle="modal" data-bs-target="#exampleModal2"> Login </a></span>';
                                    echo '</div>';
                                }
                                ?>



                                <?php
                                if (isset($_SESSION['loggedin'])) {
                                    echo ' <div class="col-lg-3 col-md-3 col-sm-3 col-3">';
                                    echo '<span class="my-2 py-2 fw-bold" style="text-decoration: underline; cursor: pointer; display: flex; text-align: center; justify-content: center;"> <a href="_logout.php">Logout</a></span>';
                                    echo '</div>';
                                    echo ' <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                                        <div class="butn mt-2 d-flex" style="position: relative;">';
                                    echo ' <span class="py-2 px-3 span-butn fw-bold" style="justify-content: baseline; border: 3px solid #002f34; border-radius: 30px;justify-content: center; cursor: pointer; box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;"> <a href="_uploadAd.php"> Sell</a></span>';
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
        <div class="container my-3 py-4">
            <h3 class="text-center">Post You Ad</h3>
            <form name="sign-up" action="<?php ($_SERVER["PHP_SELF"]) ?>" enctype="multipart/form-data" method="post">

                <div class="mb-3">
                    <label for="name" class="form-label">AD Title</label>
                    <input type="text" name="ad_title" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">AD Description</label>
                    <input type="text" name="ad_description" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">AD Price</label>
                    <input type="text" name="ad_price" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">AD Category</label>
                    <select class="form-select" name="AD_category" id="">
                        <option value="2">Mobile</option>
                        <option value="3">Cars</option>
                        <option value="4">Electronics</option>
                        <option value="5">Furniture</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">AD Image</label>
                    <input type="file" name="uploadfile" value="" class="form-control" />
                </div>


                <button type="submit" class="btn btn-primary">Post AD</button>

            </form>
        </div>
    </main>
</body>

</html>
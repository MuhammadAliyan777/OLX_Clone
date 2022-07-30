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
	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="../css/style.css?version=51">

	<link rel="stylesheet" href="../admin/css/style.css">
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
                    <form name="sign-up" action="_signup.php" method="post">
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
                    <form name="sign-up" action="_login.php" method="post">
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
                    <img src="../images/logo-main.png" width="50px" alt="">
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
                                    <img src="../images/profile.png" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" width="50px" alt="">
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <div class="profile-ul">
<?php
if(isset($_SESSION['username'])){
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
                                        echo '<span class="my-2 py-2 fw-bold" style="text-decoration: underline; cursor: pointer; display: flex; text-align: center; justify-content: center;"> <a href="_logout.php">Logout</a></span>';
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


	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 col-sm-3 col-12 text-center mb-5">
					<h2 class="heading-section">Un Approved Users</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="table-wrap">
						<table class="table table-responsive-xl">
						  <thead>
						    <tr>
						    	<th>&nbsp;</th>
						    	<th>Email</th>
						      <th>Username</th>
						      <th>Status</th>
						      <th>&nbsp;</th>
						    </tr>
						  </thead>
						  <tbody>
						    

                          <?php

$sql = "Select * from users where status = 0;";
$result = mysqli_query($conn,$sql);

while($row = mysqli_fetch_assoc($result)){
    echo '
    <tr class="alert" role="alert">
    <td>
        <label class="checkbox-wrap checkbox-primary">
              <input type="checkbox">
              <span class="checkmark"></span>
            </label>
    </td>
  <td class="d-flex align-items-center">
      <div class="img" style="background-image: url(images/person_2.jpg);"></div>
      <div class="pl-3 email">
          <span>'.$row['users_email'].'</span>
          <span>Added: 01/03/2020</span>
      </div>
  </td>
  <td>'. $row['users_name'] .'</td>
  <td class="status"><span class="waiting">Waiting for approval</span></td>
  <td>
      <button type="button" class="close">
    <span aria-hidden="true"><a href="_approval.php?status='. $row['users_id'] .'"><i class="fa-solid fa-check"></i>Approve?</a></span>
  </button>
</td>
</tr>
    ';
}
?>
<i class="fa-solid fa-check"></i>



						  
						    
						  </tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="../admin/js/jquery.min.js"></script>
  <script src="../admin/js/popper.js"></script>
  <script src="../admin/js/bootstrap.min.js"></script>
  <script src="../admin/js/main.js"></script>
  <script>
        function myFunction(x) {
            x.classList.toggle("fa-solid");
        }
    </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

	</body>
</html>


            

          
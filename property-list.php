<?php 
    include("conn.php");
    if(!empty($_POST['search']) && isset($_POST["button"])){
        $_SESSION['search'] = $_POST['search'];
        $serch = $_SESSION['search'];
        $select = "select * From property where bhk like'%$serch%'";
    }else{
        $select = "select * from property";
    }

    // if(isset($_SESSION['uid'])){
    //     $uid = $_SESSION['uid'];
    //     $s = "select * from register where email='$uid'";
    //     $r = mysqli_query($conn,$s);
    //     if($r){
    //         while($row = mysqli_fetch_assoc($r)){
    //             $img = $row['profile_pic'];
    //         }
    //     }
    // }else {
    //     $img = "user.png";
    // }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Makaan - Real Estate HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>
<style>
    .home{
        flex-wrap: wrap;
        display: flex;
        
        justify-content: space-around;
    }
    .f{
        width:400px !important;
        margin-top:30px !important;
        
    }
    .p{
        width: 400px;
        height: 300px;
    }
    .p img{
        width: 100% !important;
        height: 100% !important;
    }
    .a-tital{
        height: 80px !important;
        overflow: hidden;
    }
    .hh{
        width: 400px;
    }
</style>
<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar Start -->
        <?php include("navbar.php") ?>
        <!-- Navbar End -->


        <!-- Header Start -->
        <div class="container-fluid header bg-white p-0">
            <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
                <div class="col-md-6 p-5 mt-lg-5">
                    <h1 class="display-5 animated fadeIn mb-4">Property List</h1> 
                        <nav aria-label="breadcrumb animated fadeIn">
                        <ol class="breadcrumb text-uppercase">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Pages</a></li>
                            <li class="breadcrumb-item text-body active" aria-current="page">Property List</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-md-6 animated fadeIn">
                    <img class="img-fluid" src="img/header.jpg" alt="">
                </div>
            </div>
        </div>
        <!-- Header End -->


        <!-- Search Start -->
        <div class="container-fluid bg-primary mb-5 wow fadeIn" data-wow-delay="0.1s" style="padding: 35px;">
            <div class="container">
                <form action="" method="post">
                <div class="row g-2">
                    <div class="col-md-10">
                        <div class="row g-2">
                            <div class="col-md-4">
                                <input type="text" name="search" class="form-control border-0 py-3 w-100" placeholder="Search Keyword">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <button name="button" class="btn btn-dark border-0 w-100 py-3">Search</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
        <!-- Search End -->


        <!-- Property List Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-0 gx-5 align-items-end">
                    <div class="col-lg-6">
                    <div class="text-start mx-auto mb-5 wow slideInLeft" data-wow-delay="0.1s">
                            <h1 class="mb-3">Property Listing</h1>
                            <p>Makaan Properties is not confined by traditional real estate boundaries when it comes to buying, selling and renting or asset management, instead we are always coming up with new innovative ways to satisfy our client’s needs and be a leading company in real estate industry.  </p>
                        </div>
                    </div>
                    <form action="" method="post">
                    <div class="col-lg-12 text-start text-lg-end wow slideInRight" data-wow-delay="0.1s">
                        <ul class="nav nav-pills d-inline-flex justify-content-end mb-5">
                            <li class="nav-item me-2">
                                <button class="btn btn-outline-primary active" name="button" data-bs-toggle="pill"
                                    href="#tab-1">Featured</button>
                            </li>
                            <li class="nav-item me-2">
                            <button class="btn btn-outline-primary active" name="sell" data-bs-toggle="pill" href="#tab-3">For seal</button>
                            </li>
                            <li class="nav-item me-0">
                                <button class="btn btn-outline-primary active" name="rent" data-bs-toggle="pill" href="#tab-3">For Rent</button>
                            </li>
                        </ul>
                    </div>
                    </form>
                </div>
                <div class="tab-content home">
                <?php 
                    include("conn.php");
                
                    $result = mysqli_query($conn,$select);
                    if($result){
                        while($row = mysqli_fetch_assoc($result)){
                            $Title = $row['Title'];
                            $ptype = $row['ptype'];
                            $stype = $row['stype'];
                            $bhk = $row['bhk'];
                            $Price = $row['Price'];
                            $City = $row['City'];
                            $file_name = $row['file_name'];
                            $Address = $row['Address'];
                            $Area = $row['Area'];
                            $id = $row['id'];
                            ?>

                            <div id="tab-1" class="tab-pane fade show p-0 active f">
                            <div class="g-4">
                                <div class="wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="property-item rounded overflow-hidden hh">
                                        <div class="position-relative overflow-hidden p">
                                            <a href=""><img class="img-fluid" src="pic/<?php echo $file_name ?>" alt=""></a>
                                            <div
                                                class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                        <?php echo "For ".$stype  ?></div>
                                            <div
                                                class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                                <?php echo $ptype ?></div>
                                        </div>
                                        <div class="p-4 pb-0">
                                            <h5 class="text-primary mb-3"><?php echo $Price ?></h5>
                                            <a class="d-block h5 mb-2 a-tital" href="property_details.php?id=<?php echo $id ?>" ><?php echo $Title ?></a>
                                            <p><i class="fa fa-map-marker-alt text-primary me-2"></i><?php echo $Address ?></p>
                                        </div>
                                        <div class="d-flex border-top">
                                            <small class="flex-fill text-center border-end py-2"><i
                                                    class="fa fa-ruler-combined text-primary me-2"></i><?php echo $Area ?></small>
                                          
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                       <?php }
                    }

                ?>
                </div>

                   
                </div>
            </div>
        </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
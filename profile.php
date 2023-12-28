
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
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap"
        rel="stylesheet">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
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

    .profile{
        height: 40px;
        width: 40px;
        border-radius: 50%;
        margin-left: 20px;
    }
    .profile:hover{
        cursor: pointer;
    }
    .v{
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    .ptodects{
        height: 150px;
        width: 80%;
        display: flex;
        margin-top: 40px;
        box-shadow: 8px 2px 13px black;
        border-radius: 10px;
        overflow: hidden;
    }
    .ptodects img{
        width: 15%;
        height: 100%;
    }
    .detial{
        width: 85%;
        height: 100% !important;
        padding: 10px;
    }
    .uli{
        padding: 0px 20px;
    }
    .butns{
        /* border: 2px solid black; */
    }
 </style>
    <body>
    <div class="container-xxl bg-white p-0">
    <!-- Spinner Start -->
    <div id="spinner"
    class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar Start -->
        <?php include("navbar.php") ?>
        <!-- Navbar End -->
        <?php 
    include("conn.php");
    if(isset($_SESSION['uid'])){
        $uid = $_SESSION['uid'];
        $select = "select * from property where uid='$uid'";
        $result = mysqli_query($conn,$select);
    }else{
        header("location:login.php");
    }
?>
  <!-- Footer Start -->
<div class="v">
    <?php
    if($result){
            while($row = mysqli_fetch_assoc($result)){
                $img = $row['file_name'];
                $ptype = $row['ptype'];
                $tital = $row['Title'];
                $stype = $row['stype'];
                $bhk = $row['bhk'];
                $id = $row['id'];
                $floor = $row['floor'];
                $file = $row['file_name'];
                $Price = $row['Price'];
                $City = $row['City'];?>
      <div class="ptodects">
            <img src="pic/<?php echo $file ?>" class="img-fluid" alt="">  
            <div class="detial">
                    <h4 class="text-center"><?php echo $tital ?></h4>
                    <div class="uli fw-bold text-dark row">
                        <ul class="list-inline col-1">
                            <li>Ptype</li>
                            <li>Stype</li>
                            <li>Bhk</li>
                        </ul>
                        <ul class="list-inline col-1">
                            <li>:-</li>
                            <li>:-</li>
                            <li>:-</li>
                        </ul>
                        <ul class="list-inline col-2">
                            <li><?php echo $ptype ?></li>
                            <li><?php echo $stype ?></li>
                            <li><?php echo $bhk ?></li>
                        </ul>
                        <ul class="list-inline col-1">
                            <li>Floor</li>
                            <li>Price</li>
                            <li>City</li>
                        </ul>
                        <ul class="list-inline col-1">
                            <li>:-</li>
                            <li>:-</li>
                            <li>:-</li>
                        </ul>
                        <ul class="list-inline col-2">
                            <li><?php echo $floor ?></li>
                            <li><?php echo $Price ?></li>
                            <li><?php echo $City ?></li>
                        </ul>

                        <div class="col-4 butns mt-3">
                            <a type="button" href="Update.php?id=<?php echo $id ?>" class="btn btn-warning">Update</a>
                        <a type="button" href="delete.php?id=<?php echo $id ?>" class="btn btn-danger ms-2">Delete</a>
                        </div>
                    </div>
            </div>
        </div>
        <?php    }
        }
        ?>
</div>
  <?php include("footer.php") ?>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
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
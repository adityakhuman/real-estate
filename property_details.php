<?php 
    include("conn.php");

    $id= $_GET['id'];
    $select = "select * From property where id='$id'";
    
    $result = mysqli_query($conn,$select);

    if($result){
        while($row = mysqli_fetch_assoc($result)){
                            $Title = $row['Title'];
                            $ptype = $row['ptype'];
                            $stype = $row['stype'];
                            $floor = $row['floor'];
                            $bhk = $row['bhk'];
                            $Price = $row['Price'];
                            $City = $row['City'];
                            $file_name = $row['file_name'];
                            $Address = $row['Address'];
                            $Area = $row['Area'];
                            $State = $row['State'];
        }
    }
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
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap"
        rel="stylesheet">

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
    <style>
        li{
            margin-top: 10px;
            width: 400px;
            height: 30px;
            overflow: hidden;
        }
    </style>
</head>
<body>
    

    <div class="hefing d-flex flex-column justify-content-center align-items-center">
        <h6 class="display-5 animated text-center mt-2 fadeIn mb-2 text-primary fs-3">Property Details</h6> 
        <div class="border border-2 border rounded-3" style="border: 2px solid #0E2E50 !important; margin-right: 120px; width: 120px;"></div>
        <div class="border-2 border rounded-3" style="border:2px solid #00B98E !important; margin-left: 100px; margin-top: 5px; width: 170px;"></div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-8 mt-5">
                <img src="pic/<?php echo $file_name ?>" alt="" class="rounded-3 img-fluid w-100">
                <div class="about m-3">
                    <h4 class="">About Property</h4>
                   
                </div>
            </div>
            <div class="col-4 mt-5">
                
            </div>
        </div>
        <div class="row m-2">
            <div class="col-6">
                <div class="row">
            <div class="col-3">
                <ul class="list-inline fs-5 fw-bold" style="color: black; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">
                    <li>Name</li>
                    <li>Property Type</li>
                    <li>Sell Type</li>
                    <li>City</li>
                    <li>State</li>
                </ul>
            </div>
            <div class="col-1">
                <ul class="list-inline fs-5 fw-bold" style="color: black; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">
                    <li>:-</li>
                    <li>:-</li>
                    <li>:-</li>
                    <li>:-</li>
                    <li>:-</li>
                </ul>
            </div>
            <div class="col-8">
                <ul class="list-inline fs-5" style="color: black; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">
                    <li><?php echo $Title ?></li>
                    <li><?php echo $ptype ?></li>
                    <li><?php echo $stype ?></li>
                    <li><?php echo $City ?></li>
                    <li><?php echo $State ?></li>
                </ul>
            </div>
        </div>
        </div>
        <div class="col-6">
            <div class="row">
                <div class="col-3">
                    <ul class="list-inline fs-5 fw-bold" style="color: black; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">
                        <li>BHK</li>
                        <li>Floor</li>
                        <li>Price</li>
                        <li>Area</li>
                        <li>Address</li>
                    </ul>
                </div>
                <div class="col-1">
                    <ul class="list-inline fs-5 fw-bold" style="color: black; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">
                        <li>:-</li>
                        <li>:-</li>
                        <li>:-</li>
                        <li>:-</li>
                        <li>:-</li>
                    </ul>
                </div>
                <div class="col-8">
                    <ul class="list-inline fs-5" style="color: black; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">
                        <li><?php echo $bhk ?></li>
                        <li><?php echo $floor ?></li>
                        <li><?php echo $Price ?></li>
                        <li><?php echo $Area ?></li>
                        <li><?php echo $Address ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    </div>
    
</body>
</html>
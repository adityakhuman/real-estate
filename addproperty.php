<?php
include("conn.php");

session_start();

if (isset($_SESSION['uid']) && $_SESSION['type']) {
  if (isset($_POST['submit']) && isset($_FILES['file'])) {
    $Title = $_POST['title'];
    $ptype = $_POST['ptype'];
    $stype = $_POST['stype'];
    $bhk = $_POST['bhk'];
    $floor = $_POST['floor'];
    $City = $_POST['City'];
    $State = $_POST['State'];
    $Address = $_POST['Address'];
    $Area = $_POST['Area'];
    $price = $_POST['Price'];
    $file_name = $_FILES['file']['name'];
    $tmp = $_FILES['file']['tmp_name'];
    $uid = $_SESSION['uid'];
    $type = $_SESSION['type'];
    if (move_uploaded_file($tmp, "pic/" . $file_name)) {
      $insert = "insert into property(Title,ptype,stype,bhk,floor,City,State,Area,price,file_name,Address,uid) value('$Title','$ptype','$stype','$bhk','$floor','$City','$State','$Area','$price','$file_name','$Address','$uid')";
      mysqli_query($conn, $insert);
    }
  }
} else {
  header("Location:login.php");
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
</head>
<style>
  input,
  .up {
    padding: 15px !important;
    border: none !important;
    border-radius: 10px !important;
    background-color: #0e2e5015 !important;
  }

  select {
    padding: 15px !important;
    border-top-right-radius: 0 !important;
    border-bottom-right-radius: 0 !important;
  }

  .up {
    border-top-left-radius: 0 !important;
    border-bottom-left-radius: 0 !important;
    background-color: #00B98E !important;

  }
</style>

<body>
  <div class="hefing d-flex flex-column justify-content-center align-items-center">
    <h3 class="display-5 animated text-center mt-5 fadeIn mb-4 text-primary">Add Property</h3>
    <div class="border border-2 border rounded-3"
      style="border: 2px solid #0E2E50 !important; margin-right: 170px; width: 170px;"></div>
    <div class="border-2 border rounded-3"
      style="border:2px solid #00B98E !important; margin-left: 100px; margin-top: 5px; width: 170px;"></div>
  </div>

  <div class="col-12 grid-margin container mt-5">
    <div class="">
      <div class="card-body">
        <h4 class="card-title">Enter Your property</h4>
        <form class="forms-sample" method="post" enctype="multipart/form-data">
          <div class="form-group p-2">
            <input type="text" class="form-control" id="exampleInputName1" placeholder="Title" name="title">
          </div>
          <div class="form-group p-2">
            <select class="form-control" required name="ptype">
              <option value="">Select Type</option>
              <option value="apartment">Apartment</option>
              <option value="flat">Flat</option>
              <option value="building">Building</option>
              <option value="house">House</option>
              <option value="villa">Villa</option>
              <option value="office">Office</option>
            </select>
          </div>
          <div class="form-group p-2">
            <select class="form-control" required name="stype">
              <option value="">Select Status</option>
              <option value="rent">Rent</option>
              <option value="sale">Sale</option>
            </select>
          </div>
          <div class="form-group p-2">
            <select class="form-control" required name="bhk">
              <option value="">Select BHK</option>
              <option value="1 BHK">1 BHK</option>
              <option value="2 BHK">2 BHK</option>
              <option value="3 BHK">3 BHK</option>
              <option value="4 BHK">4 BHK</option>
              <option value="5 BHK">5 BHK</option>
              <option value="1,2 BHK">1,2 BHK</option>
              <option value="2,3 BHK">2,3 BHK</option>
              <option value="2,3,4 BHK">2,3,4 BHK</option>
            </select>
          </div>
          <div class="form-group p-2">
            <select class="form-control" required name="floor">
              <option value="">Select Floor</option>
              <option value="1st Floor">1st Floor</option>
              <option value="2nd Floor">2nd Floor</option>
              <option value="3rd Floor">3rd Floor</option>
              <option value="4th Floor">4th Floor</option>
              <option value="5th Floor">5th Floor</option>
            </select>
          </div>
          <div class="form-group p-2">
            <input type="text" class="form-control" id="exampleInputName1" placeholder="Price" name="Price">
          </div>
          <div class="form-group p-2">
            <input type="text" class="form-control" id="exampleInputName1" placeholder="City" name="City">
          </div>
          <div class="form-group p-2">
            <input type="text" class="form-control" id="exampleInputName1" placeholder="Address" name="Address">
          </div>
          <div class="form-group p-2">
            <input type="text" class="form-control" id="exampleInputName1" placeholder="State" name="State">
          </div>
          <div class="form-group p-2">
            <input type="text" class="form-control" id="exampleInputName1" placeholder="Area Size" name="Area">
          </div>
          <div class="form-group p-2">
            <input type="file" name="file" class="file-upload-browse btn btn-primary up w">
          </div>
          <button type="submit" class="btn btn-primary me-4 ms-2 mt-2" name="submit">Submit</button>
        </form>
      </div>
    </div>
  </div>
</body>

</html>
<?php 
    include("conn.php");
    session_start();
    if(isset($_SESSION['uid'])){
        $uid = $_SESSION['uid'];
        $s = "select * from register where email='$uid'";
        $r = mysqli_query($conn,$s);
        if($r){
            while($row = mysqli_fetch_assoc($r)){
                $img = $row['profile_pic'];
            }
        }
    }else {
        $img = "user.png";
    }
?>
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
</style>
<div class="container-fluid nav-bar bg-transparent">
            <nav class="navbar navbar-expand-lg bg-white navbar-light py-0 px-4">
                <a href="index.php" class="navbar-brand d-flex align-items-center text-center">
                    <div class="icon p-2 me-2">
                        <img class="img-fluid" src="img/icon-deal.png" alt="Icon" style="width: 30px; height: 30px;">
                    </div>
                    <h1 class="m-0 text-primary">Makaan</h1>
                </a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <a href="index.php" class="nav-item nav-link active">Home</a>
                        <a href="about.php" class="nav-item nav-link">About</a>
                        <div class="nav-item dropdown">
                            <a href="property-list.php" class="nav-link">Property</a>
                        </div>
                        <a href="contact.php" class="nav-item nav-link">Contact</a>
                        <a href="profile.php" class="nav-item nav-link">Profile</a>
                    </div>
                    <a href="addproperty.php" class="btn btn-primary px-3 d-none d-lg-flex">Add Property</a>
                    <img class="profile"src="pic/<?php echo $img ?>" alt="">
                </div>
            </nav>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script>
            $(".profile").click(function(){
                location.href = "http://localhost/php/realestate/login.php";
            })
        </script>
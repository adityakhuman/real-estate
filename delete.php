<?php 

include('conn.php');
   $id = $_GET['id'];

   $delete = "DELETE FROM property WHERE id=$id";
   $result = mysqli_query($conn,$delete);
   if($result){
    header("Location:profile.php");
   }
?>
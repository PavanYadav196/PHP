<?php
require("config.php");
if(isset($_GET['id'])){
  $id=$_GET['id'];
  $sql="SELECT * from user where id=$id";
  $result=mysqli_query($conn,$sql);

  if($result===true){
    echo "Record Deleted Successfully";
  }else{
    header("Location:view.php");
    exit();
  }
}
?>


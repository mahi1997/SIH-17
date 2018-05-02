<?php
include_once "connection.php";
if(isset($_GET['id'])){
	$id=$_GET['id'];
 $getimage = "SELECT `image`  FROM `school_list`  WHERE  `id`=".$id.";";
              $image = mysqli_query($dbcon,$getimage);
             header("Content-type: image/jpg");
             $row = mysqli_fetch_assoc($image);
       
         echo $row['image'];
}
           
 ?>
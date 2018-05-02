<?php
session_start();
include_once "connection.php";

if(isset($_SESSION["rte_member"])){
  $memberID = $_SESSION["rte_member"];
 
}
else
{

  header("Location:login_page.php");

}


if(isset($_POST['add_image'])){




//to upload image
$fname=rand(0,99).$_FILES['file']['name'];
move_uploaded_file($_FILES['file']['tmp_name'],"../indexpage_image/".$fname);

//error message etc
$add_query="INSERT INTO `rte_images` (`id`, `image`,`Added By`,`time`) VALUES (NULL, '$fname','$memberID',now())";

mysqli_query($dbcon,$add_query);



header("Location:add_images.php");
 

}

?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Functioning of School Management Committees</title>
    <link rel="icon" type="image/png" href="public/images/emblemofindia.png" />

    <!-- Bootstrap -->
    <link href="public/css/bootstrap.min.css" rel="stylesheet">
    <link href="public/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <style>
      body{
        background-image: url("public/images/main_page_background.png");
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;

      }
      *{
        padding: 0px;
        margin: 0px;
      }

      #head_bar{
        margin-top: 2px;
      }
      #datetimepicker12{
        background-color: white;
      }
    </style>
  </head>
<body>
  <div class="container-fluid">
    <!--Header Section-->
    <div class="row" id="head_bar" >
      <div class="col-md-3 col-xs-3">
        <a href="first_page.html"><strong><img class="img-responsive" src="public/images/emblemofindia.png" style="max-width:35%;height:auto;"></strong></a>
      </div>
      <div class="col-md-6 col-xs-6">
        <img class="img-responsive" src="public/images/siksha3.png" style="margin-top:15px;">
    </div>
  </div>
    <!--Form section-->
      <div class="row">
        <div class="col-md-offset-3 col-md-6" style="padding-top:50px;">
          <form class="form-horizontal" enctype="multipart/form-data" action="add_images.php" method="POST" >
            <center><div class="form-group">
              <label for="imagefile1"><span style="font-size:20px;">Image </span></label>
              <input type="file" id="file" name="file">
            </div></center>

            

            <div class="form-group">
              <div class="col-sm-offset-5 col-sm-7">
                <button type="submit" name="add_image" class="btn btn-primary">Submit</button>
              </div>
            </div>
          </form>
        </div>
      </div>
</div>
</body>
</html>

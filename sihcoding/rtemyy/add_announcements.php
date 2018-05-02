<?php

include_once "connection.php";

if(isset($_POST['add_announcements'])){
$announcements= mysqli_real_escape_string( $dbcon,trim($_POST['announcements']));

$add_query="INSERT INTO `rte_announcements` (`id`, `Announcements`) VALUES (NULL, '$announcements')";

mysqli_query($dbcon,$add_query);
  
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
	   a {
       text-decoration: none ;
    }
  a:hover
    {

      text-decoration:none;
      cursor:pointer;
     }
 
    </style>
  </head>
<body>
  <div class="container-fluid">
    <!--Header Section-->
    <div class="row" id="head_bar" >
      <div class="col-md-3 col-xs-3">

        <img class="img-responsive" src="public/images/emblemofindia.png" style="max-width:30%;height:auto;">
		<div class="row" style="margin-top:5px;margin-left:2px;">
			<div class="col-md-3 col-xs-3">
				<a href="first_page.php"><button class="btn btn-danger btn-sm">HOME</button></a>
			</div>
		</div>
      </div>
      <div class="col-md-6 col-xs-6">
        <img class="img-responsive" src="public/images/siksha3.png" style="margin-top:15px;">
    </div>
  </div>
    <!--Form section-->
      <div class="row">
        <div class="col-md-offset-3 col-md-6" style="padding-top:50px;">


          <form class="form-horizontal" action="add_announcements.php" method="POST">

            <div class="form-group">
              <label for="add_announcements" class="col-sm-3 control-label"><span style="font-size:18px;">Add Announcements:</span></label>
              <div class="col-sm-9">
                <textarea class="form-control" rows="3" name="announcements"  id="announcements"></textarea>
              </div>
            </div>

            <div class="form-group">
              <div class="col-sm-offset-3 col-sm-9">
                <button type="submit"  name="add_announcements"class="btn btn-primary">Submit</button>
              </div>
            </div>
          </form>
        </div>
		<!--Menu Section-->
		<div class="col-md-3" style="padding-top:50px;">
          <div class="panel panel-danger">
            <div class="panel-heading">
              <h3 class="panel-title"><span class="glyphicon glyphicon-pencil"></span>  Menu</h3>
            </div>
            <div class="panel-body bg-warning">
              <ul class="list-group text-success">
				<a href="rte_home_page.php"><li class="list-group-item">My Account<span class="glyphicon glyphicon-plus-sign" style="float:right;"></span></li></a>
                <a href="add_school.php"><li class="list-group-item">Add School<span class="glyphicon glyphicon-plus-sign" style="float:right;"></span></li></a>
                <a href="add_smc_member.php"><li class="list-group-item">Add new SMC Member<span class="glyphicon glyphicon-plus-sign" style="float:right;"></span></li></a>
                <a href="add_images.php"><li class="list-group-item">Add Images<span class="glyphicon glyphicon-plus-sign" style="float:right;"></span></li></a>
                <a href="add_announcements.php"><li class="list-group-item">Add Announcements<span class="glyphicon glyphicon-plus-sign" style="float:right;"></span></li></a>
              </ul>

            </div>
          </div>
        </div>

      </div>
</div>
</body>
</html>

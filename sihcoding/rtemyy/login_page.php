<?php
include_once "connection.php";

if(isset($_POST['login'])){
  
$username= mysqli_real_escape_string( $dbcon,trim($_POST['username']));
$pass=mysqli_real_escape_string( $dbcon,trim($_POST['password']));

$sql_smc = mysqli_query($dbcon,"SELECT `password` FROM `smc_member_data` WHERE `Username` ='$username'") ;
$row1=mysqli_fetch_row($sql_smc);
   if($row1[0]==$pass){
     $sql_smcmem = mysqli_query($dbcon,"SELECT `Member ID` FROM `smc_member_data` WHERE `Username` ='$username' ") ;
     $memberid=mysqli_fetch_row($sql_smcmem);
     //go to smc home page
    header("Location:smc_final_homepage.php?memberID=".$memberid[0]);
   exit;
   }
   else{
   
   $sql_rte=mysqli_query($dbcon,"SELECT `password` FROM rte_officials WHERE `Username` ='$username'" );
$row2=mysqli_fetch_row($sql_rte);
    if($row2[0]==$pass){
    // go to rte page
    $sql_rtemem = mysqli_query($dbcon,"SELECT `Member ID` FROM `rte_officials` WHERE `Username` ='$username' ") ;
     $memberid=mysqli_fetch_row($sql_rtemem);

     //add here page for rte member
    header("Location:rte_home_page.php?memberID=".$memberid[0]);
   exit;
  }
  else{
    //add alert here 
    echo "wrong password";
  }
   }




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
        <div class="col-md-offset-3 col-md-6" style="padding-top:100px;">


      <form class="form-horizontal" action="login_page.php" method="POST">

  <div class="form-group">
    <label for="username" class="col-sm-2 control-label"><span style="font-size:20px;">Username</span></label>
    <div class="col-sm-7">
      <input type="text" class="form-control" name="username" id="username" placeholder="Username">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label"><span style="font-size:20px;">Password</label>
    <div class="col-sm-7">
      <input type="password" class="form-control"  name="password" id="inputPassword3" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="login" class="btn btn-primary">Login</button>
    </div>
  </div>
</form>
  </div>
</div>
  </div>
</body>
</html>

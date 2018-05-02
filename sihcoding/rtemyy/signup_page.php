<?php
include_once "connection.php";


if(isset($_POST['signUp'])){
  $memberID= mysqli_real_escape_string( $dbcon,trim($_POST['memberID']));
$username= mysqli_real_escape_string( $dbcon,trim($_POST['username']));
$pass=mysqli_real_escape_string( $dbcon,trim($_POST['password']));
$repass=mysqli_real_escape_string(  $dbcon,trim($_POST['repassword']));
$randomUID= mysqli_real_escape_string( $dbcon,trim($_POST['randomUID']));
if($memberID[0]=="1"){
  
  $sql_rand = "SELECT `Random UID` FROM `smc_member_data` WHERE `Member ID` ='$memberID'" ;
  $rand_db=mysqli_query($dbcon,$sql_rand);

   $get_rand=mysqli_fetch_row($rand_db);

    if($get_rand[0]==$randomUID){
  if($pass==$repass){
  $querysignup= "UPDATE `smc_member_data` SET `Username`='$username',`password`='$pass'  WHERE `Member ID`='$memberID'" ;
  $result=mysqli_query($dbcon,$querysignup);  
  if($result){
    echo "signup succesfull..";
  }
  }
  else{
    echo "password not matching..";
  }
  
}
else{
  echo"wrong UID number ..please check";
}
}


else{
  $sql_rand = "SELECT `Random UID` FROM `rte_officials` WHERE `Member ID` ='$memberID'" ;
  
  $rand_db=mysqli_query($dbcon,$sql_rand);

$get_rand=mysqli_fetch_row($rand_db);

if($get_rand[0]==$randomUID){
  if($pass==$repass){
  $querysignup= "UPDATE `rte_officials` SET `Username`='$username',`password`='$pass'  WHERE `Member ID`='$memberID'" ;
  $result=mysqli_query($dbcon,$querysignup);  
  if($result){
    echo "signup succesfull..";
  }
  }
  else{
    echo "password not matching..";
  }
  
}
else{
  echo"wrong UID number ..please check";
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
        <div class="col-md-offset-3 col-md-6" style="padding-top:80px;">



      <form class="form-horizontal"  action="signup_page.php" method="POST">
        <div class="form-group">
          <label for="memberid" class="col-sm-3 control-label"><span style="font-size:20px;">MemberID</label>
          <div class="col-sm-6">
            <input type="text" class="form-control" name="memberID"  id="memberid" placeholder="Member id">
          </div>
        </div>
  <div class="form-group">
    <label for="username" class="col-sm-3 control-label"><span style="font-size:20px;">Username</span></label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="username" id="username" placeholder="Username">
    </div>
  </div>
  <div class="form-group">
    <label for="rte_signup_email" class="col-sm-3 control-label"><span style="font-size:20px;">Email ID</span></label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="rte_signup_email" id="username" placeholder="Email ID">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-3 control-label"><span style="font-size:20px;">Password</label>
    <div class="col-sm-6">
      <input type="password" class="form-control"  name="password" id="inputPassword3" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
    <label for="Re-inputPassword3" class="col-sm-3 control-label"><span style="font-size:18px;">Re-enter Password</label>
    <div class="col-sm-6">
      <input type="password" class="form-control" name="repassword" id="Re-inputPassword3" placeholder="Re-Enter Password">
    </div>
  </div>
  <div class="form-group">
    <label for="randomuid" class="col-sm-3 control-label"><span style="font-size:20px;">Random UID</label>
    <div class="col-sm-6">
      <input type="password" class="form-control" name="randomUID" id="randomuid" placeholder="Random UID">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-3 col-sm-9">
      <button type="submit" name="signUp" class="btn btn-primary">Sign Up</button>
    </div>
  </div>
</form>
  </div>
</div>
  </div>
</body>
</html>

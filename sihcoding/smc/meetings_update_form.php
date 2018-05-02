<?php
//omit if warnings are coming continuously
//session_start();
session_start();
include_once "connection.php";


  if(isset($_SESSION["smc_member"])){
  $memberid = $_SESSION["smc_member"];
  $usedby="1";
  $sql="SELECT `School ID` FROM `smc_member_data` WHERE `Member ID`='".$memberid."'";
  
  $schoolid_result=mysqli_query($dbcon,$sql);
  $res10=mysqli_fetch_array($schoolid_result);
  $schoolid=$res10['School ID'];
  

  //for other member entering to school page
}
else
{
  //echo "I'm here";
  header("Location:login_page.php");

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
        <div class="col-md-offset-3 col-md-6" style="padding-top:80px;">
      <form class="form-horizontal" action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
        <div class="form-group">
          <label for="Date" class="col-sm-3 control-label"><span style="font-size:20px;">Date:</span></label>
          <div class="col-sm-9">
            <input type="text" class="form-control" id="Date" name="Date" placeholder="Date">
          </div>
        </div>
        <div class="form-group">
          <label for="sdp" class="col-sm-3 control-label"><span style="font-size:20px;">SDP:</span></label>
          <div class="col-sm-9">
            <textarea class="form-control" rows="3" name = "sdp" id="sdp"></textarea>
          </div>
        </div>
        <div class="form-group">
          <label for="decisions" class="col-sm-3 control-label"><span style="font-size:20px;">Decisions:</span></label>
          <div class="col-sm-9">
            <textarea class="form-control" rows="3" name="decisions" id="decisions"></textarea>
          </div>
        </div>
        
  <div class="form-group">
    <div class="col-sm-offset-3 col-sm-9">
      <button type="submit" name="add_meeting" class="btn btn-primary">Submit</button>


  

    </div>
  </div>
</form>

<?php

if(isset($_POST['add_meeting']))
{
       $date= mysqli_real_escape_string( $dbcon,trim($_POST['Date']));
       $sdp= mysqli_real_escape_string( $dbcon,trim($_POST['sdp']));
       $decisions= mysqli_real_escape_string( $dbcon,trim($_POST['decisions']));

       $add_query="INSERT INTO `meeting_table` (`id`, `SDP`,`Decisions`,`Date`,`Added By`,`School ID`,`time`) VALUES (NULL, '$sdp','$decisions','$date','$memberid','$schoolid',now())";

         mysqli_query($dbcon,$add_query);

} 
?>




  </div>
</div>
  </div>
</body>
</html>

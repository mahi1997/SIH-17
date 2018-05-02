
<?php
session_start();

include_once "connection.php";

/*
if(isset($_SESSION["rte_member"])){
  $memberID = $_SESSION["rte_member"];

 
}
else
{

  header("Location:login_page.php");

}
if(isset($_GET['schoolID'])){
  $schoolid=$_GET['schoolID'];
}
*/
$schoolid="4";

if(isset($_POST['add_value'])){

$did= mysqli_real_escape_string( $dbcon,trim($_POST['dimension']));
$qid= mysqli_real_escape_string( $dbcon,trim($_POST['quality']));
$value=mysqli_real_escape_string( $dbcon,trim($_POST['value']));



//extract state
$sql_did=mysqli_query($dbcon,"SELECT * FROM `quality_dimensions` WHERE `DID`=".$did) ;
$res1=mysqli_fetch_array($sql_did);
$dimension=$res1['Dimension'];
//extract district

$sql_qid=mysqli_query($dbcon,"SELECT  * FROM `quality_indicators` WHERE `QID`=".$qid) ;
$res2=mysqli_fetch_array($sql_qid);
$indicator=$res2['Indicator'];


$sql="INSERT INTO `quality_results`  (`id`,`DID`, `Dimension`, `QID`,`Indicator`,`School ID`) 
VALUES (NULL, '$did', '$dimension', '$qid', '$indicator','$schoolid' )";

mysqli_query($dbcon,$sql);
//header("Location:add_quality_dimensions.php");
 

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
        <a href="first_page.html"><strong><img class="img-responsive" src="public/images/emblemofindia.png" style="max-width:35%;height:auto;"></strong></a>
      </div>
      <div class="col-md-6 col-xs-6">
        <img class="img-responsive" src="public/images/siksha3.png" style="margin-top:15px;">
    </div>
  </div>
   <!--Form section-->
      <div class="row">
        <div class="col-md-offset-3 col-md-6" style="padding-top:80px;">

          <form class="form-horizontal" enctype="multipart/form-data" action="add_quality_dimensions.php" method="POST">

            <div class="form-group">
              <label for="add_state" class="col-sm-4 control-label"><span style="font-size:20px;">Dimension:</label>
              <div class="col-sm-8">
                <select class="form-control" name="dimension"  id="dimension"  onchange="getId(this.value);">
                  <option>Select Diamension</option>
                  <?php
                      $query ="SELECT * FROM `quality_dimensions`";
                      $results = mysqli_query($dbcon, $query);
                      foreach($results as $st) {
                       ?>
                       

                      <option value="<?php echo $st["DID"];?>"><?php echo $st["Dimension"];?></option>
                      <?php
                      }
                      ?>


                </select>
              </div>
            </div>



<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script>
function getId(val){
 $.ajax({
  type:"POST",
  url:"select_quality.php",
  data:"DID="+val,
  success:function(data){
   $("#qualitylist").html(data);
   }
 });
 
}
</script>

            <div class="form-group">
              <label for="add_indicator" class="col-sm-4 control-label"><span style="font-size:20px;">Quality Indicator:</label>
              <div class="col-sm-8">
                <select class="form-control" name="quality" id="qualitylist" >
                  <option value="">------</option> 
                </select>
              </div>
            </div>





            <div class="form-group">
              <label for="add_school_name" class="col-sm-4 control-label"><span style="font-size:20px;">Value</span></label>
              <div class="col-sm-8">
                <input type="text" class="form-control" name="value" id="value" placeholder="value">
              </div>
            </div>

            


            <div class="form-group">
              <div class="col-sm-offset-4 col-sm-8">
                <button type="submit" name="add_value" class="btn btn-primary">Submit</button>
              </div>
            </div>


          </form>
        </div>
        <!--links section-->


      </div>
  </div>
</body>
</html>

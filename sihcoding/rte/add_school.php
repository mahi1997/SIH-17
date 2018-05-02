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


if(isset($_POST['add_school'])){

$stateID= mysqli_real_escape_string( $dbcon,trim($_POST['state']));
$districtID= mysqli_real_escape_string( $dbcon,trim($_POST['district']));  

$schoolname= mysqli_real_escape_string( $dbcon,trim($_POST['schoolname']));
$aboutschool= mysqli_real_escape_string( $dbcon,trim($_POST['aboutschool']));



//extract state
$sql_state=mysqli_query($dbcon,"SELECT * FROM `state_list` WHERE `State ID`=".$stateID) ;
$res1=mysqli_fetch_array($sql_state);
$statename=$res1['State'];
//extract district

$sql_dist=mysqli_query($dbcon,"SELECT  * FROM `district_table` WHERE `District ID`=".$districtID) ;
$res2=mysqli_fetch_array($sql_dist);
$districtname=$res2['District'];




//selecting max id of school-list table to assign it id
$res=mysqli_query($dbcon,"SELECT id  FROM `school_list` ORDER BY id DESC LIMIT 1 ");

  $count=mysqli_fetch_row($res);

  $schoolID=$count[0]+1;


//to upload image
$fname=rand(0,9999).$_FILES['file']['name'];
move_uploaded_file($_FILES['file']['tmp_name'],"../smcpic/".$fname);
$sql="INSERT INTO `school_list` (`id`, `School`, `School ID`, `District`,`District ID`,  `State`,`State ID`,`About`,`image`, `Added By`,`time`) 
VALUES ( NULL, '$schoolname', '$schoolID', '$districtname','$districtID', '$statename' , '$stateID','$aboutschool' ,'$fname','$memberID',now())";
//echo $sql;
$inschool_list=mysqli_query($dbcon,$sql);
header("Location:add_school.php");
 

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

          <form class="form-horizontal" enctype="multipart/form-data" action="add_school.php" method="POST">

            <div class="form-group">
              <label for="add_state" class="col-sm-4 control-label"><span style="font-size:20px;">STATE:</label>
              <div class="col-sm-8">
                <select class="form-control" name="state"  id="state"  onchange="getId(this.value);">
                  <option>Select State</option>
                  <?php
                      $query ="SELECT * FROM `state_list`";
                      $results = mysqli_query($dbcon, $query);
                      foreach($results as $state) {
                       ?>
                       

                      <option value="<?php echo $state["State ID"];?>"><?php echo $state["State"];?></option>
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
  url:"select_district.php",
  data:"State_ID="+val,
  success:function(data){
   $("#districtlist").html(data);
   }
 });
 
}
</script>

            <div class="form-group">
              <label for="add_district" class="col-sm-4 control-label"><span style="font-size:20px;">DISTRICT:</label>
              <div class="col-sm-8">
                <select class="form-control" name="district" id="districtlist" onchange="getId2(this.value);">
                  <option value="">------</option> 
                </select>
              </div>
            </div>





            <div class="form-group">
              <label for="add_school_name" class="col-sm-4 control-label"><span style="font-size:20px;">School Name</span></label>
              <div class="col-sm-8">
                <input type="text" class="form-control" name="schoolname" id="schoolname" placeholder="School Name">
              </div>
            </div>

            <div class="form-group">
              <label for="add_about_school" class="col-sm-4 control-label"><span style="font-size:18px;">About School:</span></label>
              <div class="col-sm-8">
                <textarea class="form-control" rows="3"  name="aboutschool" id="aboutschool"></textarea>
              </div>
            </div>

            <div class="form-group">
              <label for="add_image" class="col-sm-4 control-label"><span style="font-size:18px;">School Image</span></label>
                <div class="col-sm-8">
                  <input type="file" name= "file" id="userfile">
                </div>
            </div>


            <div class="form-group">
              <div class="col-sm-offset-4 col-sm-8">
                <button type="submit" name="add_school" class="btn btn-primary">Submit</button>
              </div>
            </div>


          </form>
        </div>
        <!--links section-->


      </div>
  </div>
</body>
</html>

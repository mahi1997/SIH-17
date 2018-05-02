<?php
include_once "connection.php";
session_start();

if(isset($_SESSION["rte_member"])){
  $memberID = $_SESSION["rte_member"];
 
}
else
{

  header("Location:login_page.php");

}

if(isset($_POST['add_smc_member'])){
  
$name= mysqli_real_escape_string( $dbcon,trim($_POST['name']));
$position= mysqli_real_escape_string( $dbcon,trim($_POST['position']));
$mobile=mysqli_real_escape_string( $dbcon,trim($_POST['mobile']));
$emailID=mysqli_real_escape_string( $dbcon,trim($_POST['emailID']));
$aadhar=mysqli_real_escape_string( $dbcon,trim($_POST['aadhar']));
$qual=mysqli_real_escape_string( $dbcon,trim($_POST['qualification']));



$stateID= mysqli_real_escape_string( $dbcon,trim($_POST['state']));
$districtID= mysqli_real_escape_string( $dbcon,trim($_POST['district']));
$schoolID= mysqli_real_escape_string( $dbcon,trim($_POST['school']));

//extract state
$sql_state=mysqli_query($dbcon,"SELECT * FROM `state_list` WHERE `State ID`=".$stateID) ;
$res1=mysqli_fetch_array($sql_state);
$statename=$res1['State'];
//extract district

$sql_dist=mysqli_query($dbcon,"SELECT  * FROM `district_table` WHERE `District ID`=".$districtID) ;
$res2=mysqli_fetch_array($sql_dist);
$districtname=$res2['District'];
//extract schoool name
$sql_school=mysqli_query($dbcon,"SELECT  * FROM `school_list` WHERE `School ID`=".$schoolID) ;
$res3=mysqli_fetch_array($sql_school);
$schoolname=$res3['School'];


$getTop="SELECT `Sr No` FROM `smc_member_data` ORDER BY `Sr No` DESC LIMIT 1 ";
$res=mysqli_query($dbcon,$getTop);
if($res){
  $count=mysqli_fetch_row($res) ;
$temp=$count[0]+1;
$r=rand(10,99);
$smcmemberID="M".$r.$temp;
//M for SMC member

}
else
{

  $r=rand(10,99);
  $smcmemberID="M".$r."1";
  
}
 
//find error here..............................................................................................
//to upload image
$fname=rand(0,9999).$_FILES['file']['name'];
move_uploaded_file($_FILES['file']['tmp_name'],"../certipic/".$fname);
$randUID=rand(100000,999999);

$insmc="INSERT INTO `smc_member_data` (`Sr No`, `name`, `mobile`, `email ID`, `Aadhar No`, `position`, `school`, `School ID`, `district`, `District ID`, `state`, `State ID`, `Member ID`, `Username`, `password`, `Profile pic`, `Qualification`, `certificate_image`, `Random UID`, `Added By`, `time`) VALUES (NULL, '$name', '$mobile', '$emailID', '$aadhar', '$position', '$schoolname','$schoolID' , '$districtname','$districtID' , '$statename','$stateID', '$smcmemberID', '', '','','$qual','$fname','$randUID','$memberID',now())";
$insmc_member=mysqli_query($dbcon,$insmc);

$contact_sql="INSERT INTO `contact_table` (`id`, `Name`, `Member ID`, `School ID`,`Position`,`Mobile`,`email ID`,`Added By`,`time` ) 
VALUES (NULL, '$name','$smcmemberID','$schoolID' ,'$position','$mobile','$emailID','$memberID',now())";

$incontact=mysqli_query($dbcon,$contact_sql);

header("Location:add_smc_member.php");


   

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

          <form class="form-horizontal" action="add_smc_member.php" enctype="multipart/form-data" method="POST">

            <div class="form-group">
              <label for="add_state_member" class="col-sm-4 control-label"><span style="font-size:20px;">STATE:</label>
              <div class="col-sm-8">
                <select class="form-control" name="state" id="state" onchange="getId(this.value);">
                  <option value="">Select State</option>
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
              <label for="add_district_member" class="col-sm-4 control-label"><span style="font-size:20px;">DISTRICT:</label>
              <div class="col-sm-8">
                <select class="form-control" name="district" id="districtlist" onchange="getId2(this.value);">
                  
                  <option value="">------</option>

                </select>

              </div>
            </div>
<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script>
function getId2(val){
 $.ajax({
  type:"POST",
  url:"select_school.php",
  data:"District_ID="+val,
  success: function(data){
   $("#schoollist").html(data);
   }
 });
 
}
</script>



            <div class="form-group">
              <label for="add_school_member" class="col-sm-4 control-label"><span style="font-size:20px;">SCHOOL:</label>
              <div class="col-sm-8">
                <select class="form-control" name="school" id="schoollist" onchange="getId3(this.value);">
                  
                  <option value="">-----</option>
       
                </select>
              </div>
            </div>



        

            <div class="form-group">
              <label for="member_name" class="col-sm-4 control-label"><span style="font-size:20px;">Member Name</span></label>
              <div class="col-sm-8">
                <input type="text" class="form-control" name="name" id="name" placeholder="Member name">
              </div>
            </div>

            <div class="form-group">
              <label for="member_position" class="col-sm-4 control-label"><span style="font-size:20px;">Position</span></label>
              <div class="col-sm-8">
                <input type="text" class="form-control" name="position"  id="position" placeholder="Position">
              </div>
            </div>

            <div class="form-group">
              <label for="mobile_no" class="col-sm-4 control-label"><span style="font-size:20px;">Mobile No.</span></label>
              <div class="col-sm-8">
                <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Mobile No.">
              </div>
            </div>

            <div class="form-group">
              <label for="emailID" class="col-sm-4 control-label"><span style="font-size:20px;">Email ID</span></label>
              <div class="col-sm-8">
                <input type="text" class="form-control" name="emailID" id="emailID" placeholder="email ID ">
              </div>
            </div>

            <div class="form-group">
              <label for="aadhar" class="col-sm-4 control-label"><span style="font-size:20px;">Aadhar No</span></label>
              <div class="col-sm-8">
                <input type="text" class="form-control" name="aadhar" id="aadhar" placeholder="Aadhar No.">
              </div>
            </div>


            <div class="form-group">
              <label for="qualification" class="col-sm-4 control-label"><span style="font-size:20px;">Qualification</span></label>
              <div class="col-sm-8">
                <input type="text" class="form-control" name="qualification" id="qualification" placeholder="qualification ">
              </div>
            </div>

         <div class="form-group">
              <label for="add_image" class="col-sm-4 control-label"><span style="font-size:18px;">Certificate Image</span></label>
                <div class="col-sm-8">
                  <input type="file" name= "file" id="userfile">
                </div>
            </div>
            

            <div class="form-group">
              <div class="col-sm-offset-4 col-sm-8">
                <button type="submit" name="add_smc_member" class="btn btn-primary">Submit</button>
              </div>
            </div>
          </form>
        </div>
        <!--links section-->


      </div>
  </div>
</body>
</html>

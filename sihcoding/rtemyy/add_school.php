<?php
include_once "connection.php";


if(isset($_POST['add_school'])){
  
$schoolname= mysqli_real_escape_string( $dbcon,trim($_POST['schoolname']));
$aboutschool= mysqli_real_escape_string( $dbcon,trim($_POST['aboutschool']));

$districtNo=mysqli_real_escape_string( $dbcon,trim($_POST['hiddenval']));

$disttable="district_".$districtNo;

$state=substr($districtNo,0,2);
$district=substr($districtNo,2,2);

?>


<script type="text/javascript">
  alert('<?php echo $districtNo." state:".$state."  district ".$district ?>');
  </script>

<?php

//extract state
$sql_state=mysqli_query($dbcon,"SELECT * FROM `national_list` WHERE `State ID`=".$state) ;
$res1=mysqli_fetch_array($sql_state);
$statename=$res1['State'];
//extract district
$statetable="state_".$state;
$sql_dist=mysqli_query($dbcon,"SELECT  * FROM ".$statetable." WHERE `District ID`=".$district) ;
$res2=mysqli_fetch_array($sql_dist);
$districtname=$res2['District'];





$res=mysqli_query($dbcon,"SELECT id  FROM ".$disttable." ORDER BY id DESC LIMIT 1 ");

  $count=mysqli_fetch_row($res);



if($count[0]!="0"){
  $c=$count[0]+1;

  if(strlen($c)==1){
    $schoolno="00".$c;
  }
  if(strlen($c)==2){
    $schoolno="0".$c;
  }
  if(strlen($c)==3){
    $schoolno=$c;
  }
  
}
else{
  $schoolno="001";
}

//----------------------for image insertion----------------
// Error handle
function upload()
{

   $maxsize = 10000000;
   if($_FILES['userfile']['error']==UPLOAD_ERR_OK)
   {
      if(is_uploaded_file($_FILES['userfile']['tmp_name'])) {
        if($_FILES['userfile']['size'] < $maxsize) {
          $finfo = finfo_open(FILEINFO_MIME_TYPE);
         if(strpos(finfo_file($finfo, $_FILES['userfile']['tmp_name']),"image")===0) {
          $imgData = addslashes(file_get_contents($_FILES['userfile']['tmp_name']));

         }
         else $msg ="Uploaded file is not an image";

        }

        else {
                  $msg="File exceeds max limit";

        }
      }
      else {
            $msg ="file not uploaded";
      }
   }

   else {  $msg =file_upload_error_message($_FILES['userfile']['error']);
             }
     
     return $msg;
}
//function over
if(!isset($_FILES['userfile'])){
  echo "select a file";
}

else{
  try{
    $msg=upload();
    echo $msg;
  }
  catch(Exception $e){
    echo $e->getMessage();
    echo 'Sorry, could not upload file';
  }
}



// Function to return error message based on error code

function file_upload_error_message($error_code) {
    switch ($error_code) {
        case UPLOAD_ERR_INI_SIZE:
            return 'The uploaded file exceeds the upload_max_filesize directive in php.ini';
        case UPLOAD_ERR_FORM_SIZE:
            return 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form';
        case UPLOAD_ERR_PARTIAL:
            return 'The uploaded file was only partially uploaded';
        case UPLOAD_ERR_NO_FILE:
            return 'No file was uploaded';
        case UPLOAD_ERR_NO_TMP_DIR:
            return 'Missing a temporary folder';
        case UPLOAD_ERR_CANT_WRITE:
            return 'Failed to write file to disk';
        case UPLOAD_ERR_EXTENSION:
            return 'File upload stopped by extension';
        default:
            return 'Unknown upload error';
    }
}
//----------------------------------------------------------

$schoolID=$districtNo.$schoolno;
$inschool_list=mysqli_query($dbcon,"INSERT INTO `school_list` (`id`, `School`, `School ID`, `District`, `State`,`About`, `image`) 
VALUES ( NULL, '$schoolname', '$schoolID', '$districtname', '$statename' , '$aboutschool' , '$imgData')");

$indistrict=mysqli_query($dbcon,"INSERT INTO ".$disttable." (`id`, `School ID`, `School` ) 
VALUES (NULL, '$schoolno','$schoolname')");


$contact_table= "Contact_".$schoolID;
$meeting_table= "Meeting_".$schoolID;
$fund_table= "Fund_".$schoolID;
$completedtask="Task_".$schoolID;




// sql to create Contact table for school
$sql = "CREATE TABLE ".$contact_table." (
id INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
Name VARCHAR(30) ,
`Member ID` VARCHAR(15),
Position VARCHAR(30),

Mobile VARCHAR(15)
)";
mysqli_query($dbcon,$sql);

// sql to create Meeting table for school
$sql = "CREATE TABLE ".$meeting_table." (
id INT(5) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
SDP VARCHAR(250) ,
Decisions VARCHAR(500),
Date VARCHAR(15)
)";
mysqli_query($dbcon,$sql);

// sql to create fund table for school
$sql = "CREATE TABLE ".$fund_table." (
id INT(8) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
Month VARCHAR(10) ,
Year YEAR,
Fund_sought VARCHAR(20),
Fund_received VARCHAR(20),
Used VARCHAR(250) 

)";  //you have to make changes here in date &time
mysqli_query($dbcon,$sql);

// sql to create completed table for school
$sql = "CREATE TABLE ".$completedtask."(
id INT(8) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
Task VARCHAR(50) ,
Implemetation VARCHAR(250) 

)";  //you have to make changes here in date &time
mysqli_query($dbcon,$sql);

   

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
    <div class="row" id="head_bar" ><div class="col-md-3 col-xs-3">

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

          <form class="form-horizontal" enctype="multipart/form-data" action="add_school.php" method="POST">

            <div class="form-group">
              <label for="add_state" class="col-sm-4 control-label"><span style="font-size:20px;">STATE:</label>
              <div class="col-sm-8">
                <select class="form-control" name="state" onchange="getId(this.value);">
                  <option>Select State</option>
                  <?php
                      $query ="SELECT * FROM `national_list`";
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

<input type="text" name="hiddenval" style="display:none" id="hiddenval"/>
<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script type="text/javascript">
function getId2(val){
 var  districtid=val;
 document.getElementById("hiddenval").value=districtid;

 alert(districtid);
 
}

</script>



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
                  <input type="file" name= "userfile" id="userfile">
                </div>
            </div>


            <div class="form-group">
              <div class="col-sm-offset-4 col-sm-8">
                <button type="submit" name="add_school" class="btn btn-primary">Submit</button>
              </div>
            </div>


          </form>
        </div>
	<div class="col-md-3" style="padding-top:80px;">
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
        <!--links section-->


      </div>
  </div>
</body>
</html>

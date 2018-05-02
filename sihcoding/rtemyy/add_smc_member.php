<?php
include_once "connection.php";


if(isset($_POST['add_smc_member'])){
  
$name= mysqli_real_escape_string( $dbcon,trim($_POST['name']));
$position= mysqli_real_escape_string( $dbcon,trim($_POST['position']));
$mobile=mysqli_real_escape_string( $dbcon,trim($_POST['mobile']));
$schoolNo=mysqli_real_escape_string( $dbcon,trim($_POST['hiddenval']));

$school_contact="contact_".$schoolNo;
$schoolid=substr($schoolNo,4,3);
$sql_state = mysqli_query($dbcon,"SELECT * FROM `school_list` WHERE `School ID`=".$schoolid) ;
$result=mysqli_fetch_array($sql_state);

?>

<script type="text/javascript">
  alert('<?php echo "School:".$result['School']." ".$result['District']." ".$result['State'] ?>');
  </script>

<?php
$school=$result['School'];
$district=$result['District'];
$state=$result['State'];
$res=mysqli_query($dbcon,"SELECT id  FROM ".$school_contact." ORDER BY id DESC LIMIT 1 ");

 $count=mysqli_fetch_row($res) ;



if($count[0]!="0"){
  
  $c=$count[0]+1;

  if(strlen($c)==1){
    $MemberID="1".$schoolNo."00".$c;
  }
  if(strlen($c)==2){
    $MemberID="1".$schoolNo."0".$c;
  }
  if(strlen($c)==3){
    $MemberID="1".$schoolNo.$c;
  }
  
}
else{
  $MemberID="1".$schoolNo."001";
}

$randUID=rand(100000,999999);
$insmc_member=mysqli_query($dbcon,"INSERT INTO `smc_member_data` (`Sr No`, `name`, `mobile`, `position`, `school`,      `district`, `state`, `Member ID`, `Username`, `password`, `Random UID`) 
VALUES ( NULL, '$name', '$mobile', '$position', '$school' , '$district' , '$state', '$MemberID', '', '', '$randUID')");

$incontact=mysqli_query($dbcon,"INSERT INTO ".$school_contact." (`id`, `Name`, `Member ID`, `Position`,`Mobile` ) 
VALUES (NULL, '$name','$MemberID', '$position','$mobile ')");




   

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

          <form class="form-horizontal" action="add_smc_member.php" method="POST">

            <div class="form-group">
              <label for="add_state_member" class="col-sm-4 control-label"><span style="font-size:20px;">STATE:</label>
              <div class="col-sm-8">
                <select class="form-control" name="state" onchange="getId(this.value);">
                  <option value="">Select State</option>
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
  data:"District_table_ID="+val,
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

<input type="text" name="hiddenval" style="display:none" id="hiddenval"/>

<script type="text/javascript">
function getId3(val){
 var  schoolid=val;
 document.getElementById("hiddenval").value=schoolid;
 alert(schoolid);
 
}

</script>            

            <div class="form-group">
              <label for="member_name" class="col-sm-4 control-label"><span style="font-size:20px;">Member Name</span></label>
              <div class="col-sm-8">
                <input type="text" class="form-control" name="name" id="name" placeholder="Member name">
              </div>
            </div>
			
			<div class="form-group">
              <label for="member_email_id" class="col-sm-4 control-label"><span style="font-size:20px;">Email ID</span></label>
              <div class="col-sm-8">
                <input type="text" class="form-control" name="member_email_id" id="member_email_id" placeholder="Email ID">
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
              <div class="col-sm-offset-4 col-sm-8">
                <button type="submit" name="add_smc_member" class="btn btn-primary">Submit</button>
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

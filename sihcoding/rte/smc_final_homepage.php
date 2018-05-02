<?php
session_start();
include_once "connection.php";

if(isset($_SESSION["rte_member"])){
  $memberid = $_SESSION["rte_member"];
  $usedby="0";
  //for other member entering to school page
}
else
{

  header("Location:login_page.php");

}

if(isset($_GET["schoolid"])){
  $schoolid = $_GET["schoolid"];
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

     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
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
      #tabinit li{
        background-color: white;
        color:blue;
        cursor: pointer;
        text-align: center;

      }
      #tabinit li:hover{
        background-color: skyblue;
        transform: scale(1.1);
      }
      

    </style>

  </head>
<body>
  <div id="meeting_sdp_modal" class="modal fade" role="dialog">
    
    <!--div for pop up of meeting sdp -->

    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">SDP</h4>
        </div>
        <div class="modal-body" id="meeting_sdp_loader">
         

         </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
           
  </div>
  






  <div id="meeting_decisions_modal" class="modal fade" role="dialog">
     <!--div for pop up of meeting decisions-->
      <!--div for pop up of meeting sdp -->

    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Decisions</h4>
        </div>
        <div class="modal-body" id="meeting_decisions_loader">
         
         </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
           

  </div>
 

 

 

  <div id="myModal7" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Allocate funds</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the here.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>
  <div id="myModal8" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Allocate funds Results</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the here.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>
  <div id="myModal9" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Purchse of new furniture</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the here.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>
  <div id="myModal10" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Purchse of new furniture results</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the here.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>
  <div id="myModal11" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Maintenance of buildings</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the here.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>
  <div id="myModal12" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Maintenance of buildings results</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the here.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>

  <div id="myModal13" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Repair of buildings</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the here.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>
  <div id="myModal14" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Purchse of new furniture</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the here.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>
  <div id="myModal15" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Maintenance of buildings</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the here.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>

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
  <!--school image-->
  <div class="row" style="margin-top:8px;">
    <div class="col-md-12">
    <center >
    <img class="img-responsive"  style = "width:1020px;height:428px;" src=
    <?php 
     $getimage = "SELECT `image` FROM  `school_list`  WHERE  `School ID`=".$schoolid ;
              $result = mysqli_query($dbcon,$getimage);
              $row = mysqli_fetch_array($result);
    echo "../smcpic/".$row['image'];
    ?>>
     
    </center>
    
    </div>
  </div>
</div>
  <!--page navigation headers-->
<ul class="nav nav-tabs nav-justified" style="background-color:skyblue;margin-top:10px;" id="tabinit">
  <li role="presentation" id="tab1"><h4>School</h4></li>
  <li role="presentation" id="tab2"><h4>Meetings</h4></li>
  <li role="presentation" id="tab3"><h4>Completed Tasks</h4></li>
  <li role="presentation" id="tab4"><h4>Funds</h4></li>
</ul>
<!--home section-->
<div class="container-fluid" id="section1">
  <div class="row" style="margin-top:10px;">
    <div class="col-md-8">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">About School</h3>
        </div>
        <div class="panel-body bg-warning">
          <p class="text-success">
          
          <?php
        
        $getAbout = "SELECT `About`  FROM `school_list`  WHERE  `School ID`=".$schoolid;
              $result = mysqli_query($dbcon,$getAbout);
        while($row = mysqli_fetch_array($result))
               {
         echo $row['About'];
         }
        ?>


          </p>

        </div>
        </div>
      </div>
    <div class="col-md-4">
      <div class="panel panel-danger">
        <div class="panel-heading">
          <h3 class="panel-title"><span class="glyphicon glyphicon-user"></span>  Members and Contacts</h3>
        </div>
        <div class="panel-body bg-warning">
          <ul class="list-group text-success">


                  <?php
                 
                  $getContact = "SELECT `Name`,`Position`,`Mobile`,`email ID` FROM  `contact_table`  WHERE  `School ID`=".$schoolid ;
              $result = mysqli_query($dbcon,$getContact);
               while($row = mysqli_fetch_array($result))
              {
              
              ?>

              <li class="list-group-item"> <?php echo $row['Name'].",Position: ".$row['Position'].", ".$row['Mobile'].",email: ".$row['email ID'] ; ?></li>
              
              <?php
               }
              ?>

            

          </ul>

        </div>
        </div>
    </div>
  </div>
</div>

<!--Meetings section-->

<div class="container-fluid" id="section2" style="display:none;">
  <div class="row">
    <div class="col-md-10">
  <div class="table-responsive">
    <table class="table table-bordered table-hover" style="background-color:white;margin-top:5px;">
      <thead>
        <tr>
          <th>#</th>
          <th>Date</th>
          <th>SDP</th>
          <th>Decision</th>
        </tr>
      </thead>
      <tbody>
        
          
               <?php
               ///receive meeting data from database
                  $tablemeeting="meeting_".$schoolid;
                  $getContent = "SELECT * FROM  `meeting_table` WHERE `School ID`=".$schoolid."  ORDER BY `id` DESC" ;
              $result = mysqli_query($dbcon,$getContent);
               $num_row=mysqli_affected_rows($dbcon);
 if($num_row>0){
               $i=1;
               while($row = mysqli_fetch_array($result))
              {
             

              ?>
               <tr>
               <th scope="row"> <?php echo $i;?></th>
               <td><?php echo $row['Date'] ?></td>
               <td><?php echo $row['SDP'] ?>
                

               <button id="<?php echo $row[`id`]; ?>" data-toggle="modal" data-target="#meeting_sdp_modal"
                data-table="<?php echo $tablemeeting; ?>" style="float:right;" class="btn btn-info btn-xs view_sdp_meeting">Read More..</button>

               
               </td>
               <td class="text-success"><?php echo $row['Decisions'] ?>
                
                
                <button  id="<?php echo $row[`id`]; ?>" data-table="<?php echo $tablemeeting; ?>" style="float:right;" class="btn btn-info btn-xs view_decisions_meeting " data-toggle="modal" data-target="#meeting_decisions_modal">Read More...</button>
                
                </td>
                </tr>

              
              
              <?php
               $i=$i+1;
               }
             }
              ?>

                  <script src="//code.jquery.com/jquery-1.12.0.min.js">
                

                   $(document).ready(function(){

                  $('.view_sdp_meeting').click(function(){  
                
                   
                     var tid = $(this).attr("id");  
                     // var table=$(this).attr('data-table');
                       
                   
               
                   $.ajax({
                         type:"POST",
                        url:"load_more_sdp.php",
                        data:{id:tid}
                        
                   })
                    success:(function(data){
                       $('#meeting_sdp_loader').html(data);  
                     $('#meeting_sdp_modal').modal("show"); 
                   })
                   

                  });
                 

                
              });

                   $(document).ready(function(){

                     //function for other button

                   $('.view_decisions_meeting').click(function(){  
                
                   
                     var tid = $(this).attr("id");  
                      //var table=$(this).attr('data-table');
                       
                   
               
                   $.ajax({
                         type:"POST",
                        url:"load_more_decisions.php",
                        data:{id:tid},
                        
                   })
                    
                    success:(function(data){
                       $('#meeting_decisions_loader').html(data);  
                     $('#meeting_decisions_modal').modal("show"); 
                   })
                   

                  });


                   });


                  </script>



      </tbody>

    </table>
    </div>
  </div>


<?php
  if($usedby=="1"){
  ?>
  
  <div class="col-md-2" style="padding-top:10px;" >
  <button id="update_meeting"  class="btn btn-primary btn-block" onClick="<?php header("Location:meetings_update_form.php?tablemeeting=".$tablemeeting); ?>">Update </button>

<script type="text/javascript">
    var btn = document.getElementById('update_meeting');
    btn.addEventListener('click', function() {
      document.location.href= '<?php echo "meetings_update_form.php?schoolid=".$schoolid; ?>';
    });

</script>

  </div>

<?php
  }
  ?>



</div>
</div>
</div>



<!--completed tasks -->

<div class="container-fluid" id="section3" style="display:none;">
  <div class="row">
    <div class="col-md-10">
  <div class="table-responsive">
    <table class="table table-bordered table-hover" style="background-color:white;margin-top:5px;">
      <thead>
        <tr>
          <th>#</th>
          <th>Name of Task</th>
          <th>Implementation</th>

        </tr>
      </thead>
      <tbody>
       
        

               <?php
               ///receive meeting data from database
                  
                  $getContent = "SELECT * FROM  `task_table`  WHERE `School ID`=".$schoolid."   ORDER BY `id` DESC" ;
              $result = mysqli_query($dbcon,$getContent);
              
              $num_row=mysqli_affected_rows($dbcon);
 if($num_row>0){
               $i=1;
               while($row = mysqli_fetch_array($result))
              {
             
              ?>
               
               <tr>
          <th scope="row"> <?php echo $i; ?></th>

          <td> <?php echo $row['Task']; ?></td>
            <td class="text-success"> <?php echo $row['Task']; ?> <buton  style="float:right;" class="btn btn-success" data-toggle="modal" data-target="#myModal12">Read More...</button></td>
        </tr>
              
              <?php
               $i=$i+1;
               }
             }
              ?>
           

      </tbody>

    </table>
    </div>
  </div>
  
<?php
  if($usedby=="1"){
  ?>
  

<div class="col-md-2" style="padding-top:10px;"><button id="update_task"  class="btn btn-primary btn-block" >Update </button>

<script type="text/javascript">
    var btn = document.getElementById('update_task');
    btn.addEventListener('click', function() {
      document.location.href= '<?php echo "tasks_update_form.php?schoolid=".$schoolid; ?>';
    });

</script>

</div>

<?php
  }
  ?>


</div>
</div>
<!--funds section-->

<div class="container-fluid" id="section4" style="display:none;">
  <div class="row">
    <div class="col-md-10">
  <div class="table-responsive">
    <table class="table table-bordered table-hover" style="background-color:white;margin-top:5px;">
      <thead>
        <tr>
          <th>#</th>
          <th>Month</th>
          <th>Year</th>
          <th>Sought</th>
          <th>Received</th>
          <th>How Used</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
           <td>February</td>
           <td>2016</td>
           <td>1,00,000</td>
           <td>80,000</td>
          <td>Repair of buildings<buton  style="float:right;" class="btn btn-info " data-toggle="modal" data-target="#myModal13">Read More..</button>
            <!-- Modal -->
            <!-- Modal -->
                 </td>

        </tr>
        
         <?php
               ///receive meeting data from database
                
                  $getContent = "SELECT * FROM  `fund_table`   WHERE `School ID`=".$schoolid."  ORDER BY `id` DESC" ;
              $result = mysqli_query($dbcon,$getContent);

               $num_row=mysqli_affected_rows($dbcon);
 if($num_row>0){
               $i=1;
               while($row = mysqli_fetch_array($result))
              {
             
              ?>
               
               <tr>
          <th scope="row"> <?php echo $i; ?></th>
          <td><?php echo $row['Month']; ?></td>
           <td><?php echo $row['Year']; ?></td>
           <td><?php echo $row['Fund_sought']; ?></td>
           <td><?php echo $row['Fund_received']; ?></td>
           <td><?php echo $row['Used']; ?><buton  style="float:right;" class="btn btn-info " data-toggle="modal" data-target="#myModal13">Read More..</button>
            <!-- Modal -->
            <!-- Modal -->
                 </td>
          
           
              
              <?php
               $i=$i+1;
               }
             }
              ?>


      </tbody>

    </table>
    </div>
  </div>


  <?php
  if($usedby=="S"){
  ?>
  
  
 <div class="col-md-2" style="padding-top:10px;"><button id="update_fund"  class="btn btn-primary btn-block" >Update </button>

<script type="text/javascript">
    var btn = document.getElementById('update_fund');
    btn.addEventListener('click', function() {
      document.location.href= '<?php echo "funds_update_form.php?schoolid=".$schoolid; ?>';
    });

</script>


</div>

<?php
  }
  ?>

</div>
</div>

<script src="public/scripts/jquery.min.js"></script>
<script src="public/js/moment.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="public/js/bootstrap.js"></script>

<script src="public/js/bootstrap-datetimepicker.min.js"></script>
<script>
$( "#tab2" ).click(function(){
  $("#section1").hide();
  $("#section3").hide();
  $("#section4").hide();
  $("#section2").show();
});
$( "#tab3" ).click(function(){
  $("#section1").hide();
  $("#section2").hide();
  $("#section4").hide();
  $("#section3").show();
  });
  $( "#tab4" ).click(function(){
    $("#section1").hide();
    $("#section2").hide();
    $("#section3").hide();
    $("#section4").show();
    });
    $( "#tab1" ).click(function(){
      $("#section3").hide();
      $("#section2").hide();
      $("#section4").hide();
      $("#section1").show();
      });

</script>
</body>
</html>

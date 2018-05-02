<?php
//omit if warnings are coming continuously
session_start();
include_once "connection.php";


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
      <div class="col-md-5 col-xs-5">
        <img class="img-responsive" src="public/images/siksha3.png" style="margin-top:15px;">
      </div>
      <div class="col-md-4 col-xs-4" >
      <a href="signup_page.php"><button class="btn btn-info"  id="signup_button" style="margin-left:180px;margin-top:20px;">Signup</button></a>
        <a href="login_page.php"><button class="btn btn-warning" id="login_button" style="margin-left:5px;margin-top:20px;">Login</button></a>
      </div>
    </div>

    <!-- Carousel
        ================================================== -->
        <div class="container marketing">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
                <li data-target="#myCarousel" data-slide-to="4"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
              
              <!--Sliding images -->

              <?php
                  
                  $getimage = "SELECT `image` FROM  `rte_images` ORDER BY id DESC LIMIT 5" ;
              $img_result = mysqli_query($dbcon,$getimage);
              $x=1;
               while($img = mysqli_fetch_array($img_result))
                
              {
                if($x==1){
           ?>

             <div class="item active">
                  <center><img class="first-slide" style = "width:1020px;height:428px;" src=
                  <?php
                  echo "../indexpage_image/".$img['image'];
                  ?>

                   alt="First slide" /></center>

                </div>

           <?php
                }
                else{
              ?>
                 <div class="item">
                  <center><img class="first-slide" style = "width:1020px;height:428px;" src=
                  <?php
                  echo "../indexpage_image/".$img['image'];
                  ?>

                   alt="First slide" /></center>

                </div>

            <?php
                }
              
             $x=$x+1;
               }
              ?>

            </div>
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span><span class="sr-only">
                    Previous</span> </a><a class="right carousel-control" href="#myCarousel" role="button"
                        data-slide="next"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true">
                        </span><span class="sr-only">Next</span> </a>
        </div>
        </div>
        <!-- /.carousel -->
        <!--Announcements-->
          <div class="row" style="margin-bottom:5px;" >
            <div class="col-md-12">
              <center>
                <h2><strong style="color:black;">Announcements</strong></h2>
              </center>
            </div>
          </div>
        <!--After_Announcements-->
        <div class="row" id="After_Announcements">
          <div class="col-md-3 col-xs-3" >
            <div class="panel panel-primary" >
                  <div class="panel-heading">
                      Calendar</div></div>
                    <center><div id="datetimepicker12"></div></center>

          </div>
          <div class="col-md-6 col-xs-6">
            <div class="panel panel-primary" >
                  <div class="panel-heading" style="background-color:purple;">
                      Recent Updates</div>
              <div class="panel-body">
              <h2>
                  News Feed</h2>
              <div>



<table class="table table-responsive" cellspacing="0" id="GridView2" style="width:100%;border-collapse:collapse;">
  
  <tr>
    <td style="width:50%;">
           
                 <?php
                       require_once 'load_announcements.php';
  
                   ?>


               <script src="http://code.jquery.com/jquery-git2.min.js" type="text/javascript" ></script>

                <script>
                  $(function(){
                      $('.loadmore').click(function(){
                        var val = $('.final').attr('val');
                        $.post('load_announcements.php',{'from':val},function(data){
                          if(!isFinite(data))
                          {
                            $('.final').remove();
                            $(data).insertBefore('.loadmore');
                          }
                          else
                          {
                            $('<div class="well">No more feeds</div>').insertBefore('.loadmore');
                            $('.loadmore').remove();
                          } 
                            
                        });
                      });
                  });
                </script>


                    
                    
                    <div>
                      <?php echo $data; ?>
                    </div>

                    <button class="btn btnt-primary loadmore" >Loadmore</button>
                  

  </td>
  </tr>
</table>

</div>

              </div>
            </div>
          </div>



<?php 
///aboute RTE information is here
 ?>

          <div class="col-md-3 col-xs-3">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title">About RTE</h3>
              </div>
              <div class="panel-body bg-warning">
                <p class="text-success">
                  The Right of Children to Free and Compulsory Education Act or Right to Education Act (RTE), is an Act of the Parliament of India enacted on 4 August 2009, which describes the modalities of the importance of free and compulsory education for children between 6 and 14 in India under Article 21a of the Indian Constitution. India became one of 135 countries to make education a fundamental right of every child when the Act came into force on 1 April 2010.

                </p>
                <a href="http://righttoeducation.in/know-your-rte/about"><button class="btn btn-info">Read More...</button></a>
              </div>
              </div>
          </div>
        </div>

  </div>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="public/scripts/jquery.min.js"></script>
  <script src="public/js/moment.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="public/js/bootstrap.js"></script>
  <script src="public/scripts/bootstrap.min.js"></script>
  <script src="public/js/bootstrap-datetimepicker.min.js"></script>
  <script type="text/javascript">
      $(function () {
          $('#datetimepicker12').datetimepicker({
              inline: true,
              sideBySide: true
          });
      });
  </script>
</body>
</html>

<?php
//omit if warnings are coming continuously

//include_once "firebase_connection.php";





?>
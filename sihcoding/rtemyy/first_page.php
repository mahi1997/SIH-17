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
	  #rte_nav li{
        background-color: white;
        color:blue;
        cursor: pointer;
        text-align: center;

      }
      #rte_nav li:hover{
        background-color: skyblue;
        transform: scale(1.1);
      }
	  a {
       text-decoration: none ;
    }
  a:hover
    {

      text-decoration:none;
      cursor:pointer;
     }
	 html {
  height: 100%;
  box-sizing: border-box;
}

*,
*:before,
*:after {
  box-sizing: inherit;
}

body {
  position: relative;
  margin: 0;
  padding-bottom: 6rem;
  min-height: 100%;
  font-family: "Helvetica Neue", Arial, sans-serif;
}


/**
 * Footer Styles
 */

.footer {
  position: absolute;
  right: 0;
  bottom: 0;
  left: 0;
  padding: 1rem;
  background-color:black;
  
}
	 
    </style>
  </head>
<body>
  <div class="container-fluid">
    <!--Header Section-->
    <div class="row" id="head_bar" style="margin-bottom:5px;">
      <div class="col-md-3 col-xs-3">

        <img class="img-responsive" src="public/images/emblemofindia.png" style="max-width:35%;height:auto;">
		
      </div>
      <div class="col-md-5 col-xs-5">
        <img class="img-responsive" src="public/images/siksha3.png" style="margin-top:15px;">
      </div>
      <div class="col-md-4 col-xs-4" >
      <a href="signup_page.php"><button class="btn btn-warning" id="signup_button" style="margin-left:180px;margin-top:20px;">Signup</button></a>
        <a href="login_page.php"><button class="btn btn-primary" id="login_button" style="margin-left:5px;margin-top:20px;">Login</button></a>
      </div>
    </div>
	
	<!--RTE navs-->
		<ul class="nav nav-pills nav-justified" id="rte_nav" style="margin-bottom:10px;margin-top:10px;">
		  <li role="presentation" class="active"><a href="#">Home</a></li>
		  
		  <li role="presentation"><a href="about_us.php">About Us</a></li>
		  
		  <li role="presentation"><a href="tech_support.php">Technical Support</a></li>
		  <li role="presentation"><a href="use.php">How To Use</a></li>
		  <li role="presentation"><a href="gallery.php">Photo Gallery</a></li>
		  <li role="presentation"><a href="ann.php">Announcements</a></li>
		  <li role="presentation"><a href="contact.php">Contact Us</a></li>
		  <li role="presentation"><a href="report.php">Report Grievance</a></li>
		  <li role="presentation"><a href="quality.php">Quality Parameter</a></li>
		  <li role="presentation"><a href="faq.php">FAQ</a></li>
		</ul>
    <!-- Carousel
        ================================================== -->
        <div class="row">
			<div class="col-md-7" >
				<div id="myCarousel" class="carousel slide" data-ride="carousel"  >
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#myCarousel" data-slide-to="1"></li>
						<li data-target="#myCarousel" data-slide-to="2"></li>
						<li data-target="#myCarousel" data-slide-to="3"></li>
						<li data-target="#myCarousel" data-slide-to="4"></li>
					</ol>
					<div class="carousel-inner" role="listbox">
						<div class="item active">
						  <center><img style="height:350px;" class="first-slide" src="public/images/study1.jpg" alt="First slide" /></center>

						</div>
						<div class="item">
						  <center><img style="height:350px;" class="first-slide" src="public/images/study2.jpg" alt="First slide" /></center>

						</div>
						<div class="item">
						   <center> <img style="height:350px;" class="first-slide" src="public/images/study3.jpg" alt="First slide" /></center>
											</div>
						<div class="item">
							<center><img style="height:350px;" class="first-slide" src="public/images/study4.jpg" alt="First slide" /></center>

						</div>
						<div class="item">
						  <center>  <img style="height:350px;" class="first-slide" src="public/images/study5.jpg" alt="First slide" />

						</div>
					</div>
					<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span><span class="sr-only">
							Previous</span> </a><a class="right carousel-control" href="#myCarousel" role="button"
								data-slide="next"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true">
								</span><span class="sr-only">Next</span> </a>
				</div>
			</div>
			 <!-- /.carousel -->
			 <!--recent News-->
			<div class="col-md-5">
				
				
			<center><iframe style="width:100%;height:350px;" src="https://www.youtube.com/embed/h_vyk1XEYVE" frameborder="0" allowfullscreen></iframe></center>
          </div>

			</div>
			
        
        <!--After_Announcements-->
        <div class="row" id="After_Announcements" style="margin-top:10px">
			<div class="col-md-4 col-xs-4" >
				<div class="panel panel-primary" >
					<div class="panel-heading">
                      Useful Links
					</div>
					<div class="panel-body bg-warning">
						<ul class="list-group text-success">
							<a href="http://ncpcr.gov.in/" target="_blank"><li class="list-group-item">National Commission for Protection of Child Rights</li></a>
							<a href="http://www.aicte-india.org/" target="_blank"><li class="list-group-item">AICTE</li></a>
							
							<a href="http://mhrd.gov.in/" target="_blank"><li class="list-group-item">Government of India, Ministry of Human Resource Development</li></a>
							<a href="http://cbseacademic.in/" target="_blank"><li class="list-group-item">CBSE Announcements</li></a>
							<a href="http://ncert.nic.in/" target="_blank"><li class="list-group-item">NCERT</li></a>
						</ul>

					</div>

				</div>
                    

			</div>
          


<?php 
///aboute RTE information is here
 ?>

          <div class="col-md-8 col-xs-8">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title">Welcome To The Website</h3>
              </div>
              <div class="panel-body bg-warning">
                <p class="text-success">
					The Right of Children to Free and Compulsory Education Act or Right to Education Act (RTE), is an Act of the Parliament of India enacted on 4 August 2009, which describes the modalities of the importance of free and compulsory education for children between 6 and 14 in India under Article 21a of the Indian Constitution. India became one of 135 countries to make education a fundamental right of every child when the Act came into force on 1 April 2010.
				</p>
				<p class="text-success">
					The Act makes education a fundamental right of every child between the ages of 6 and 14 and specifies minimum norms in elementary schools. It requires all private schools to reserve 25% of seats to children (to be reimbursed by the state as part of the public-private partnership plan). Kids are admitted in to private schools based on economic status or caste based reservations. It also prohibits all unrecognised schools from practice, and makes provisions for no donation or capitation fees and no interview of the child or parent for admission. The Act also provides that no child shall be held back, expelled, or required to pass a board examination until the completion of elementary education. There is also a provision for special training of school drop-outs to bring them up to par with students of the same age.
 
				</p>
				
				<p class="text-success">
				
				</p>
                <a href="http://righttoeducation.in/know-your-rte/about"><button class="btn btn-info">Read More...</button></a>
              </div>
              </div>
          </div>
        </div>

  </div>
  <!--promotion-->
  </div class="container-fluid">
  <div class="row" style="margin-bottom:80px;">
  <div class="col-md-3">
	  <center><div class="card">
	  <a href="#"><img class="card-img-top img-responsive" src="public/images/mhrd.png" alt="Card image cap"></a>
	  <div class="card-block">
		<h4 class="card-title"><strong>MHRD</strong></h4>
		<p class="card-text">MHRD is responsible for the development of human resources in India</p>
	  </div>
	  </div></center>
	  <a href="http://mhrd.gov.in"><center><button class="btn btn-info">View More..</button></center></a>
	</div>
	<div class="col-md-3">
	  <center><div class="card">
	  <a href="#"><img class="card-img-top img-responsive" src="public/images/rte.png" alt="Card image cap"></a>
	  <div class="card-block">
		<h4 class="card-title"><strong>RTE</strong></h4>
		<p class="card-text">RTE describes the importance of free and compulsory education for children</p>
	  </div>
	  </div></center>
	  <a href="http://righttoeducation.in"><center><button class="btn btn-info">View More..</button></center></a>
	</div>
	<div class="col-md-3">
	  <center><div class="card">
	  <a href="#"><img class="card-img-top img-responsive" src="public/images/SIH.jpg" alt="Card image cap"></a>
	  <div class="card-block">
		<h4 class="card-title"><strong>SIH</strong></h4>
		<p class="card-text">SIH is about coding together to solve real world problems</p>
	  </div>
	  </div></center>
	  <a href="http://innovate.mygov.in/sih2017"><center><button class="btn btn-info">View More..</button></center></a>
	</div>
	<div class="col-md-3">
	  <center><div class="card">
	  <a href="#"><img class="card-img-top img-responsive" src="public/images/mass.png" alt="Card image cap"></a>
	  <div class="card-block">
		<h4 class="card-title"><strong>NASSCOM</strong></h4>
		<p class="card-text">It is a trade association of IT and BPO Industry</p>
	  </div>
	  </div></center>
	  <a href="http://nasscom.in"><center><button class="btn btn-info">View More..</button></center></a>
	</div>
	</div>
</div>
  <!--footer-->
  <div class="footer">
	<div class="row">
		<div class="col-md-4">
			<ul class="list-inline">
				<li><a href="https://www.facebook.com/righttoeducation" target = "_blank" title="Facebook">Facebook</a></li>
				<li><a href="https://twitter.com/theRTEplatform" target = "_blank" title="Twitter">Twitter</a></li>
				<li><a href="http://www.linkedin.com/groups/Right-Education-6507682" target = "_blank" title="LinkedIn">LinkedIn</a></li>
				<li><a href="http://www.youtube.com/theRTEplatform" target = "_blank" title="YouTube">YouTube</a></li>
				<li> <a href="https://plus.google.com/+RightToEducationIn" rel="publisher" target="_blank" title="Google+">Google+</a></li>
			</ul>
		</div>
		<!--social links ends-->
		<div class="col-md-4 text-warning">
			<center>Right to Education Platform 2017<br> © Centre for Civil Society<br>In Association with<br><span class="text-danger lead">Smart India Hackathon</span></center>
		</div>
<!--News letter-->
		<div class="col-md-4" >
			<div class="social-media-icons">
				<div class="newsletter_box" style="float:right;">
					<span class="text-primary lead">Subscribe Newsletter</span>
					<div class="region region-subscribe">
						<div id="block-simplenews-287" class="block block-simplenews">

		
							<div class="content">
		  
								<form class="simplenews-subscribe" action="/" method="post" id="simplenews-block-form-287" accept-charset="UTF-8">
								
									<div>
										<div class="form-item form-type-textfield form-item-mail">
											<label for="edit-mail"><span class="text-success">E-mail</span> <span class="form-required" title="This field is required.">*</span></label>
											<input type="text" id="edit-mail" name="mail" value="" size="20" maxlength="128" class="form-text required" />
										</div>
										<button type="submit" id="edit-submit--2" name="op" value="Subscribe" class="form-submit btn btn-success btn-sm">Subscribe<button/>
		
										</div>
								</form>  
	  
	  
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
<!--News letter ends-->
	</div><!--row ends-->
	
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
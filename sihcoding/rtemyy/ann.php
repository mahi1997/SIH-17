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


if(isset($_POST['ann'])){
$announcements= mysqli_real_escape_string( $dbcon,trim($_POST['announcement']));

$add_query="INSERT INTO `announcements` (`id`, `page_name`,`details`,`date`) VALUES (NULL, '$announcements','$memberID',now())";

mysqli_query($dbcon,$add_query);
  header("Location:add_announcements.php");
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
	<link rel="stylesheet" type="text/css" href="public/css/jquery.wysiwyg.css" tppabs= media="screen" />
	 <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
    <script type="text/javascript" src="ckfinder/ckfinder.js"></script>
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
		  <li role="presentation"><a href="first_page.php">Home</a></li>
		  
		  <li role="presentation"><a href="about_us.php">About Us</a></li>
		  
		  <li role="presentation"><a href="tech_support.php">Technical Support</a></li>
		  <li role="presentation"><a href="use.php">How To Use</a></li>
		  <li role="presentation"><a href="gallery.php">Photo Gallery</a></li>
		  <li role="presentation" class="active"><a href="#">Announcements</a></li>
		  <li role="presentation"><a href="contact.php">Contact Us</a></li>
		  <li role="presentation"><a href="report.php">Report Grievance</a></li>
		  <li role="presentation"><a href="quality.php">Quality Parameter</a></li>
		  <li role="presentation"><a href="faq.php">FAQ's</a></li>
		</ul>
		<!--forms-->
		<div class="row" style="margin-bottom:60px;">
        <div class="col-md-offset-3 col-md-6" style="padding-top:50px;">


          <form class="form-horizontal" action="ann.php" method="POST">
		  
			<div class="form-group">
				<label for="username" class="col-sm-4 control-label"><span style="font-size:20px;">Page Name</span></label>
					<div class="col-sm-6">
						<input type="text" class="form-control" id="page_name" placeholder="page_name">
					</div>
			</div>

            <div class="form-group">
              <label for="add_announcements" class="col-sm-5 control-label"><span style="font-size:18px;">Add Announcements:</span></label>
              <div class="col-sm-12" style="width:100%">
              
				<textarea id="editor1" name="announcements" ></textarea> 
 </fieldset>
 <p>
  <script type="text/javascript">
var editor = CKEDITOR.replace( 'editor1', {
    filebrowserBrowseUrl : 'ckfinder/ckfinder.html',
    filebrowserImageBrowseUrl : 'ckfinder/ckfinder.html?type=Images',
    filebrowserFlashBrowseUrl : 'ckfinder/ckfinder.html?type=Flash',
    filebrowserUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
    filebrowserImageUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
    filebrowserFlashUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
});
CKFinder.setupCKEditor( editor, '../' );
</script>
              </div>
            </div>

            <div class="form-group">
              <div class="col-sm-offset-3 col-sm-9">
                <button type="submit"  name="add_announcements"class="btn btn-primary">Submit</button>
              </div>
            </div>
          </form>
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
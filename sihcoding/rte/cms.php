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


if(isset($_POST['add_announcements'])){
	$pname= mysqli_real_escape_string( $dbcon,trim($_POST['pname']));
$announcements= mysqli_real_escape_string( $dbcon,trim($_POST['announcements']));

$add_query="INSERT INTO cms VALUES (NULL, '$pname','$announcements',now())";
mysqli_query($dbcon,$add_query);
 header("Location:cms.php");
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
	<link rel="stylesheet" type="text/css" href="css/jquery.wysiwyg.css" tppabs= media="screen" />
  
 
	
	
		      
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
        <div class="col-md-offset-3 col-md-6" style="padding-top:50px;">


          <form class="form-horizontal" action="" method="POST">

            <div class="form-group">
              <label for="add_announcements" class="col-sm-3 control-label"><span style="font-size:18px;">Page Name:</span></label>
			  <input type="text" name="pname"/>
              <div class="col-sm-9" style="width:100%">
              DETAILS
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
</div>
</body>
</html>

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
    <script src="public/scripts/jquery.min.js"></script>

  </head>
<body>
  <div id="myModal1" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Disciplinary Reforms</h4>
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
  <div id="myModal2" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Disciplinary Reforms Results</h4>
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
  <div id="myModal3" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Allocation of funds</h4>
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
  <div id="myModal4" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Allocation of funds results</h4>
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
  <div id="myModal5" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Reforms in grading system</h4>
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
  <div id="myModal6" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Reforms in grading system results</h4>
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
  <!--school image-->
  <div class="row" style="margin-top:8px;">
    <div class="col-md-12">
    <center><img class="img-responsive" src="public/images/kv.jpg"></center>
    </div>
  </div>
</div>
  <!--page navigation headers-->
  <ul class="nav nav-tabs nav-justified" style="background-color:skyblue;margin-top:10px;" id="tab1">
  <li role="presentation" ><a href="smc_home_page.php"><h4>School</h4></a></li>
  <li role="presentation" class="active"><a href="smc_meetings.php"><h4>Meetings</h4></a></li>
  <li role="presentation"><a href="completed_tasks.php"><h4>Completed Tasks</h4></a></li>
  <li role="presentation"><a href="funds.php"><h4>Funds</h4></a></li>
</ul>
  <div class="container-fluid">
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
          <tr>
            <th scope="row">1</th>
            <td>29/03/2016</td>
            <td>Disciplinary reforms<buton  style="float:right;" class="btn btn-info " data-toggle="modal" data-target="#myModal1">Read More..</button>
              <!-- Modal -->
              <!-- Modal -->
                   </td>
            <td class="text-success"> Taken<buton  style="float:right;" class="btn btn-success" data-toggle="modal" data-target="#myModal2">Read More...</button></td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>4/05/2016</td>
            <td>Allocation of funds<buton  style="float:right;" class="btn btn-info" data-toggle="modal" data-target="#myModal3">Read More..</button></td>
            <td class="text-success"> Taken<buton class="btn btn-success" style="float:right;" data-toggle="modal" data-target="#myModal4">Read More...</button></td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>8/07/2016</td>
            <td>Reform in grading system<buton  style="float:right;" class="btn btn-info" data-toggle="modal" data-target="#myModal5">Read More..</button></td>
              <td class="text-warning">Pending<buton  style="float:right;" class="btn btn-warning" data-toggle="modal" data-target="#myModal6">Read More...</button></td>
          </tr>

        </tbody>

      </table>
      </div>
    </div>
    <div class="col-md-2" style="padding-top:10px;"><a href="meetings_update_form.php"><button class="btn btn-primary btn-block">Update</button></a>
    </div>
  </div>
  </div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="public/js/moment.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="public/js/bootstrap.js"></script>
<script src="public/js/bootstrap-datetimepicker.min.js"></script>
<script type="text/javascript">

</body>
</html>

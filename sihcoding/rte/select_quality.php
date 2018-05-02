
<?php 
include_once "connection.php";

if(!empty($_POST["DID"])) {
   $did = $_POST["DID"];
   
  
   $query = "SELECT * FROM `quality_indicators` WHERE `DID`=".$did;
   $results = mysqli_query($dbcon, $query);
  ?>
  <option value="">Select Quality</option>
  <?php
   foreach ($results as $dis) {
   ?>
   <option value ="<?php echo $dis["QID"]; ?>"><?php echo $dis["Indicator"]; ?> </option>

  <?php
    }
}
?>

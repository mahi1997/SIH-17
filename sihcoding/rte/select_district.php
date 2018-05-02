<?php 
include_once "connection.php";

if(!empty($_POST["State_ID"])) {
   $state_id = $_POST["State_ID"];
   
  ?>
  <script type="text/javascript">
  alert('<?php echo $state_id; ?>');
  </script>
<?php  
   
   $query = "SELECT * FROM `district_table` WHERE `State ID`=".$state_id;
   $results = mysqli_query($dbcon, $query);
  ?>
  <option value="">Select district</option>
  <?php
   foreach ($results as $district) {
   ?>
   <option value ="<?php echo $district["District ID"]; ?>"><?php echo $district["District"]; ?> </option>

  <?php
    }
}
?>

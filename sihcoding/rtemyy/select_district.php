<?php 
include_once "connection.php";

if(!empty($_POST["State_ID"])) {
   $state_id = $_POST["State_ID"];
   $table="state_".$state_id;
  ?>
  <script type="text/javascript">
  alert('<?php echo $table ?>');
  </script>
<?php  
   
   $query = "SELECT * FROM ".$table." WHERE 1";
   $results = mysqli_query($dbcon, $query);
  ?>
  <option value="">Select district</option>
  <?php
   foreach ($results as $district) {
   ?>
   <option value ="<?php echo $state_id.$district["District ID"]; ?>"><?php echo $district["District"]; ?> </option>

  <?php
    }
}
?>

<?php 
include_once "connection.php";

if(!empty($_POST["District_table_ID"])) {
   $district_table_id = $_POST["District_table_ID"];
   
   $table="district_".$district_table_id;
   
   ?>
  <script type="text/javascript">
  alert('<?php echo $table ?>');
  </script>
<?php 

   $query = "SELECT * FROM ".$table." WHERE 1";
   $results = mysqli_query($dbcon, $query);
  
  ?>
  <option value="">Select School</option>
  <?php
   foreach ($results as $school) {
   ?>
   <option value="<?php echo $district_table_id.$school["School ID"];?>"><?php echo $school["School"]; ?> </option>

  <?php
    }
}
?>
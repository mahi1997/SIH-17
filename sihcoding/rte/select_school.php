<?php 
include_once "connection.php";

if(!empty($_POST["District_ID"])&&(!empty($_POST["District_ID"]))) {
   $district_id = $_POST["District_ID"];
   
   
   
   //remove below alert after completion..
   ?>
  <script type="text/javascript">
  alert('<?php echo $district_id; ?>');
  </script>
<?php 

   $query = "SELECT * FROM `school_list` WHERE `District ID`=".$district_id;
   $results = mysqli_query($dbcon, $query);
  
  ?>
  <option value="">Select School</option>
  <?php
   foreach ($results as $school) {
   ?>
   <option value="<?php echo $school["School ID"];?>"><?php echo $school["School"]; ?> </option>

  <?php
    }
}
?>
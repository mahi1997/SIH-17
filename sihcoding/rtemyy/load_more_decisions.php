<script type="text/javascript">
	alert("you are here");
</script>


<?php

include_once "connection.php";


if(isset($_GET['id'])){

	
	/*
	$id=$_POST['id'];
$table=$_POST['tablemeeting'];



$getsdp = "SELECT `Decisions`  FROM ".$table." WHERE  `id`=".$id;
$result = mysqli_query($dbcon,$getsdp);
$row = mysqli_fetch_row($result);

echo "<p>".$row[0]."</p>";
*/
echo "<p> I am decisions pop up</p>";
}



?>
 
 
<?php
//omit if warnings are coming continuously
//session_start();
include_once "connection.php";

/*
if(isset($_GET["memberID"])){
  $memberid = $_GET["memberID"];

$schoolid= substr($memberid,1,7);
*/

$schoolid="0101004";
$table_school="school_".$schoolid;
$getAbout = "SELECT *  FROM `school_list`  WHERE  `School ID`=".$schoolid;

 $result = mysqli_query($dbcon,$getAbout);
 $num_rows=mysqli_num_rows($result);
        $temp_array=array();
        if($num_rows>0){
        	while($row=mysqli_fetch_array($result)){
        		$temp_array['About']=$row['About'];
        		
        	}
        }

 header('Content-Type: application/json');
 
 echo json_encode(array("aboutschool" => $temp_array ));      

/*
  }

*/

?>
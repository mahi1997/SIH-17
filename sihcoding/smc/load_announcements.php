<?php
class feeds{
	
	public function query($offset)
	{
		$con = mysqli_connect("localhost","root","","sihwork") or die('error');
        $sql_top = "SELECT MAX(`id`) AS max FROM `rte_announcements` ;";
      $top_result = mysqli_query($con,$sql_top) or die(mysql_error());
      $top_max = mysqli_fetch_assoc($top_result);
      if($offset==0){ $max=$top_max['max']+1;}
      else{$max=$offset;}
       

		$query = "select * from `rte_announcements` where  `id`<$max order by `id` desc limit 5";
		$result = mysqli_query($con,$query);
		$count = mysqli_num_rows($result);
		
		$data = '';
		if($count>0)
		{
			while($row =mysqli_fetch_array($result))
			{
				$id = $row['id'];
				$feed = $row['Announcements'];
				$data = $data.'<blockquote><p>'.$feed.'</p></blockquote>';
			}
			$data=$data.'<div class="final" val="'.$id.'" ></div>';
			return $data;
		}
		else{
			echo '0';
		}
		
	}
	
	public function main()
	{
		if(isset($_POST['from']))
		{
			$from=$_POST['from'];
			
			$data = $this->query($from);
			echo $data;
		}else
		{
			$data = $this->query(0);
			return $data;
		}
	}
	
}	
$obj = new Feeds();
$data = $obj->main();
?>

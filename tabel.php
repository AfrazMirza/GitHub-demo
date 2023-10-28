<form action="" method="post">

Enter Search Data:<input type="text" name="skw">

<input type="submit" name="find" value="search data">

</form>





	
	<?php
error_reporting(0);
	 //select all records from the tables
include('connection.php');
$skw=$_POST["skw"];
if(isset($_POST["skw"]))
	
	{
		
		


	 $query="Select * from abcd  where kid='$skw' or city='$skw' or cls='$skw' or sname='$skw' order by Sname";

	}
	
	else
		
		{
			

	 $query="Select * from abcd order by Sname";
	
		}
		
	 $res = mysqli_query($conn,$query);
	 
	 $tc = mysqli_num_rows($res);
if($tc>0)
	
	{
?>

<table border="1">

	<th>Sno</th>
	<th>Kid</th>
	<th>Sname</th>
	<th>City</th>
	<th>mobile</th>
	<th>course</th>
	<tr>


<?php

	 while($rs= mysqli_fetch_array($res)){
		 
	 $i++;
		 ?>
		 <tr>
		 <td><?php echo $i;?></td>
		 <td><?php echo $rs["kid"];?></td>
		 <td><?php echo $rs["sname"];?></td>
		 <td><?php echo $rs["city"];?></td>
		 <td><?php echo $rs["mobile"];?></td>
		 <td><?php echo $rs["course"];?></td>
	 </tr>
	 
	<?php

	 }

	}
	
	
	else
	{
		?>
		<script>
		alert('Record not found');
		window.location.href="table.php";
		</script>
		
		<?php
		
	}
	 ?>
	 
</table>
<b>Total nos. of Record(s):</b>
<?php echo $tc;?>   
<form onsubmit = "return confirm ('Save Now');"
action = "" method ="post">
Enter KID <input type ="text" name="Kid">
<br>
Enter Name <input type ="text" name="sname">
<br>
Enter City <input type ="text" name="city">
<br>
Enter Mobile No <input type ="text" name="mob">
<br>
Enter Course <input type ="text" name="cls">

<input type ="Submit" value ="Result" name = "Save">
</form>
<?PHP
if (isset($_POST["Save"]))
{
$Kid = $_POST["Kid"];
$sname = $_POST["sname"];
$city = $_POST["city"];
$cls = $_POST["cls"];
$mob = $_POST["mob"];
include ('config.php');

$str = "insert into demo(Kid,sname,cls,city,mob) 
VALUES
('$Kid','$sname','$cls','$city','$mob')";
echo 
$res=mysqli_query($conn,$str);
if($res==true)
{
?>
<script>
alert('Record has been saved!');
</script>
<?php
}
else
{
echo"error";
}
}
?>


	<?php
error_reporting(0);
	 //select all records from the tables
include('config.php');

	 $query="Select * from abc order by Sname";
	 $res = mysqli_query($conn,$query);
	 
	 $tc = mysqli_num_rows($res);
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

?>	 
</table>
<b>Total nos. of Record(s):</b>
<?php echo $tc;?>  
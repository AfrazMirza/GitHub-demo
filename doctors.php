<form onsubmit = "return confirm ('Save Now');"
action ="" method = "post">
Enter Name <input type= "text" name="name">
<br>
Enter Mobile Num <input type ="text" name="mob">
<br>
Enter Address <input type = "text" name= "add">
<br>
Doctors <select name ="doc">
<optgroup lable = "doctors">
<option>Dr.Ashutosh Sharma</option>
<option>Dr.Surri</option>
<option>Dr.Arif Ansari</option>
<option>Dr.Vivek Sharma</option>
<option>Dr.Abhishek Sharma</option>
</optgroup>
</select>
<input type ="submit" value="Submit" name="abc">
</form>
<?PHP
if(isset($_POST["abc"]))
{
$name=$_POST["name"];
$add=$_POST["add"];
$mob=$_POST["mob"];
$doc=$_POST["doc"];
$conn = mysqli_connect("localhost","root","");
mysqli_select_db($conn,"xyz");
$str ="insert into xyz(name,add,mob,doc)VALUES
('$name','$add','$mob','$doc')";
$res=mysqli_query($conn,$str);
if($res==true)
{
?>
<script>
alert('Login Sucessfull');
</script>
<?php
}
else
{
?>
<script>
alert('Worng Username & Password');
</script>
<?php
}
}
?>


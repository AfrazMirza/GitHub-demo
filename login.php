<form onsubmit = "return confirm ('Save Now');"
 action = "" method = "post">
Enter Username <input type = "text" name ="name">
<br>
Enter Password <input type ="text" name = "pass">
<br>
<input type = "Submit" value ="Login" name = "save">
</form>
<?PHP
if(isset($_POST["save"]))
{
$name=$_POST["name"];
$pass=$_POST["pass"];

$conn = mysqli_connect("localhost","root","");
mysqli_select_db($conn,"login");

$abc ="insert into demo(name,pass)VALUES
('$name','$pass')";
$res = mysqli_query($conn,$abc);
if($res == true)
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

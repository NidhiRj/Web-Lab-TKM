<?php

$servername="localhost";
$username="root";
$password="";
$dbname="empdb";
$tbname="emp";
 
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
	die("Connection failed".mysqli_connect_error());
}
else
{
	echo "<br><h2 align=center>CONNECTION SUCCESSFULL!!</h2><br/>";
}
$id=$_POST['eid'];
$name=$_POST['ename'];
$dep=$_POST['dept'];
$salary=$_POST['sal'];

// $sql=mysqli_select_db("$dbname")die("Couldnt select db");
$query="INSERT INTO emp(eid,ename,dept,sal) VALUES('".$id."','".$name."','".$dep."','".$salary."')";
$res=mysqli_query($conn,$query);
if($res)
{
	echo "SUBMITTED SUCCESSFULLY!!";
}
else
{
	echo "ERROR";
}
mysqli_close($conn);
?>
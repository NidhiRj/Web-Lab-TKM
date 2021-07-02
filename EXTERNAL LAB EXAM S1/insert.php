<?php

require "dbConnect.php";

$name=$_POST['name'];
$hname=$_POST['hotel'];
$phno=$_POST['phno'];
$date=$_POST['adate'];
$roomno=$_POST['roomno'];
$days=$_POST['days'];
if($hname=="Rajadhani")
{
    $rate=$days*1000;
}
else
    $rate=$days*950;

$query="SELECT * FROM infotb WHERE hname='".$hname."' and udate='".$date."' and uroomno='".$roomno."' ";
$res=mysqli_query($conn,$query);
if(mysqli_num_rows($res)>0)
{
    echo "<script>alert('THIS ROOM IS ALREADY BOOKED FOR THE DAY!')</script>";
}
else
{
    $q="INSERT INTO infotb(uname,hname,unum,udate,uroomno,rate)VALUES('".$name."','".$hname."','".$phno."','".$date."','".$roomno."','".$rate."')";
    $r=mysqli_query($conn,$q);
    if(!$r)
    {
        echo "ERROR INSERTED";
    }
    // else
    // {
    //     echo "ERROR INSERTING";
    // }
}
mysqli_close($conn);
?>
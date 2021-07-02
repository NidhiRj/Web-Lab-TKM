<?php

$server="localhost";
$username="root";
$password="";
$dbname="info";

$conn=mysqli_connect($server,$username,$password,$dbname);
if(!$conn)
{
    die("ERROR ".mysqli_connect_errno());
}
// else
// {
//     echo "SUCCESSFULL";
// }



?>
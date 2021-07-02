<?php

require "dbConnect.php";

$q="SELECT * FROM infotb";
$r=mysqli_query($conn,$q);
if(mysqli_num_rows($r)>0)
{
    echo "<center><h1>BOOKING DETAILS</h1></center>";
    echo "<table bgcolor=Tomato border=2 align=center cellspacing=2 cellpadding=2>";
    echo "<tr><th>Name</th><th>Hotel Name</th><th>Ph no</th><th>Date of arrival</th><th width=10><Roomno</th><th>Rate</th></tr>";
    while($row=mysqli_fetch_assoc($r))
    {
        echo "<tr><td bgcolor=LightGrey>$row[uname]</td><td bgcolor=LightGrey>$row[hname]</td><td bgcolor=LightGrey>$row[unum]</td><td bgcolor=LightGrey>$row[udate]</td><td bgcolor=LightGrey>$row[uroomno]</td><td bgcolor=LightGrey>$row[rate]</td>";
    }
}
else
{
    echo "NO DATA";
}

mysqli_close($conn);

?>
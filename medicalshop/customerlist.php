<?php
error_reporting(0);
$con=mysqli_connect("localhost","root","","admin");
if(!$con){ 
  die('Could not connect: '.mysqli_connect_error()); 
}

$query="SELECT * FROM CUSTOMER";
$data=mysqli_query($con,$query);
$total=mysqli_num_rows($data);
?>
<table  bgcolor="#ffffff">
    <tr>
        <th>Customer_Name----------</th>
        <th>Phone.no-----------------</th>
    </tr>


<?php
while($result=mysqli_fetch_assoc($data))
{
    echo "<tr>
         <td>".$result['NAME']." </td>
         <td>".$result['PHONE']." </td>
         </tr>";
}
?>
</table>

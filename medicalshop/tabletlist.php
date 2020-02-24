<?php
error_reporting(0);
$con=mysqli_connect("localhost","root","","admin");
if(!$con){ 
  die('Could not connect: '.mysqli_connect_error()); 
}

$query="SELECT * FROM MEDICINE";
$data=mysqli_query($con,$query);
$total=mysqli_num_rows($data);
?>
<table  bgcolor="#ffffff">
    <tr>
        <th>Id----------</th>
        <th>medicine_name--------------------</th>
        <th>Type----------</th>
        <th>Price</th>
    </tr>


<?php
while($result=mysqli_fetch_assoc($data))
{
    echo "<tr>
         <td>".$result['Id']." </td>
         <td>".$result['medicine_name']." </td>
         <td>".$result['Type']."</td>
         <td>".$result['Price']."</td>
         </tr>";
}
?>
</table>

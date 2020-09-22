<?php 
include 'server.php';
echo "<h3> Employee Details</h3>";
  $show_query="select * from emp_info";
  $result=mysqli_query($db,$show_query);
  $count=1;
echo "<table border=2><tr bgcolor='#F26F145'><td>Emp Fname</td><td>Emp LName</td><td>Email</td><td>Mobile Number</td></tr>";

 while ($row=mysqli_fetch_array($result)) {

   echo '<tr>  <td> '.$count++.'</td>
        <td> '.$row[1].' </td>
        <td> '.$row[2].' </td>
        <td> '.$row[3].' </td>
        <td> '.$row[4].' </td>
         </tr> ';
    }
    echo "</table>";
?>
<a href="index.php">Back to Registration</a>
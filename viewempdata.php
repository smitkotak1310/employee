<?php 
include 'server.php';
echo "<h3>Details</h3>";
  $show_query="select * from emp_info";
  $result=mysqli_query($db,$show_query);
 
echo "<table border=2><tr bgcolor='#e2f24f'><td>First Name</td><td>Last Name</td><td>Email</td><td>Mobile Number</td></tr>";

 while ($row=mysqli_fetch_array($result)) {
  
      echo '<tr>
        <td> '.$row[0].' </td>
        <td> '.$row[1].' </td>
        <td> '.$row[2].' </td>
        <td> '.$row[3].' </td>
         </tr> ';
    }
    echo "</table>";
?>
<a href="index.php">Back to Registration</a>

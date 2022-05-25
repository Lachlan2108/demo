<?php
      function DisplayData()
      {

        include 'application\config\database.php';
        $db = OpenCon();
        echo "Connected Successfully";

        $query = "SELECT * FROM `user`";
        $result = mysqli_query($db, $query);/* gets SQL DATA */
        if (!$result) 
        {
            echo "<p>Something is wrong with ", $query, " Please try again or contact system admin</p>";
        } else 
        {
  
            echo "<table cellpadding='4'>
            <tr> <th>User_ID</th> <th>Name</th> <th>Email</th> <th>Phone</th>";
  
            while ($row = mysqli_fetch_row($result)) 
            {
                $setAssignString = "Taxi('admin.php','targetDiv', $row[0]);";
  
                echo "<tr>";
                echo "<td>" . $row[0] . "</td>"; 
                echo "<td>" . $row[1] . "</td>"; /* LOOP TO ADD MANY ROWS */
                echo "<td>" . $row[2] . "</td>"; 
                echo "<td>" . $row[3] . "</td>"; 
                echo "</tr>";
            }
            echo "</table>";
        }
      }
      
?>
<?php
function GetNextUserID()
      {

        include 'application\config\database.php';
        $db = OpenCon();

        $query = "SELECT MAX(User_ID) as User_ID FROM user;";
        $result = mysqli_query($db, $query);/* gets SQL DATA */
        if (!$result) 
        {
            echo "<p>Something is wrong with ", $query, " Please try again or contact system admin</p>";
        } else 
        {
            $result++;
        }
        return $result;
      }
?> 
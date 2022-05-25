<?php

    include 'application\models\GetNextUserID.php';
    include 'application\config\database.php';

    function insert()
    {
        $NAME = $_POST["name"];
        $EMAIL = $_POST["email"];
        $NUMBER = $_POST["Number"];
    
        $UserID = GetNextUserID();
        $db = OpenCon();
    
        $query = "INSERT INTO `user` (`User_ID`, `Name`, `Email`, `Number`) VALUES ('$UserID', '$NAME', '$EMAIL', ' $NUMBER');";
        $result = mysqli_query($db, $query);
    
    }
    

?>



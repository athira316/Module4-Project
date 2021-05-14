<?php
    $servername = "localhost";
    $username = "root";
    $pass = "";
    $db = "apprenticeship details";
    $conn = mysqli_connect($servername,$username,$pass,$db);
    if($conn)
    {
         echo " DATA BASE SUCCESSFULLY CONNECTED";
    }
    else{
        echo " FAILD TO CONNECT".mysqli_connect_error();
    }
    
?>
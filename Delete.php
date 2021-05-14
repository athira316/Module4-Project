<?php
include_once "connection.php";
        $apprenticeshipcode = $_GET['apprenticeshipcode'];
        $query = "DELETE FROM athira WHERE apprenticeshipcode = $apprenticeshipcode";
        $data = mysqli_query($conn,$query);
        if($data)
        {
            echo " Sucessfully Deleted";
        }
        else{
            echo " Faild to Delete";
        }
   
?>